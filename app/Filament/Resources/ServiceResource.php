<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?string $navigationGroup = 'Page Content';
    protected static ?string $navigationLabel = 'Services';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Service Details')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),
                        Forms\Components\Textarea::make('description')
                            ->required()
                            ->rows(3)
                            ->maxLength(65535)
                            ->columnSpanFull(),
                        Forms\Components\Section::make('Icon')
                            ->schema([
                                Forms\Components\Toggle::make('use_icon_url')
                                    ->label('Use Icon URL instead of upload')
                                    ->default(false)
                                    ->live()
                                    ->columnSpanFull(),
                                Forms\Components\FileUpload::make('icon')
                                    ->image()
                                    ->directory('services/icons')
                                    ->visibility('public')
                                    ->maxSize(1024)
                                    ->acceptedFileTypes(['image/svg+xml', 'image/png', 'image/jpeg'])
                                    ->visible(fn (Forms\Get $get) => !$get('use_icon_url')),
                                Forms\Components\TextInput::make('icon_url')
                                    ->label('Icon URL')
                                    ->url()
                                    ->maxLength(255)
                                    ->visible(fn (Forms\Get $get) => $get('use_icon_url'))
                                    ->dehydrated(false)
                                    ->afterStateUpdated(function ($state, Forms\Set $set) {
                                        if ($state) {
                                            $set('icon', $state);
                                        }
                                    }),
                            ])->columns(1),
                        Forms\Components\TextInput::make('icon_color')
                            ->label('Icon Background Color (RGBA)')
                            ->helperText('e.g., rgba(25, 118, 210, 0.15)')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('order')
                            ->numeric()
                            ->default(0)
                            ->required(),
                        Forms\Components\Toggle::make('is_active')
                            ->label('Active')
                            ->default(true)
                            ->required(),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('icon')
                    ->label('Icon')
                    ->circular()
                    ->defaultImageUrl(fn ($record) => $record->icon && filter_var($record->icon, FILTER_VALIDATE_URL) ? $record->icon : null),
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('order')
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('M j, Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Active Status')
                    ->placeholder('All Services')
                    ->trueLabel('Active')
                    ->falseLabel('Inactive'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('order');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
