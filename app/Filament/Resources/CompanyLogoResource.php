<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompanyLogoResource\Pages;
use App\Filament\Resources\CompanyLogoResource\RelationManagers;
use App\Models\CompanyLogo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CompanyLogoResource extends Resource
{
    protected static ?string $model = CompanyLogo::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';
    protected static ?string $navigationGroup = 'Page Content';
    protected static ?string $navigationLabel = 'Company Logos';
    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Company Logo Details')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Section::make('Logo')
                            ->schema([
                                Forms\Components\Toggle::make('use_logo_url')
                                    ->label('Use Logo URL instead of upload')
                                    ->default(false)
                                    ->live()
                                    ->columnSpanFull(),
                                Forms\Components\FileUpload::make('logo')
                                    ->image()
                                    ->directory('company-logos')
                                    ->visibility('public')
                                    ->imageEditor()
                                    ->maxSize(2048)
                                    ->acceptedFileTypes(['image/svg+xml', 'image/png', 'image/jpeg'])
                                    ->visible(fn (Forms\Get $get) => !$get('use_logo_url')),
                                Forms\Components\TextInput::make('logo_url')
                                    ->label('Logo URL')
                                    ->url()
                                    ->maxLength(255)
                                    ->visible(fn (Forms\Get $get) => $get('use_logo_url'))
                                    ->dehydrated(false)
                                    ->afterStateUpdated(function ($state, Forms\Set $set) {
                                        if ($state) {
                                            $set('logo', $state);
                                        }
                                    }),
                            ])->columns(1),
                        Forms\Components\TextInput::make('website_url')
                            ->label('Website URL')
                            ->url()
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
                Tables\Columns\ImageColumn::make('logo')
                    ->label('Logo')
                    ->defaultImageUrl(fn ($record) => $record->logo && filter_var($record->logo, FILTER_VALIDATE_URL) ? $record->logo : null),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('website_url')
                    ->label('Website')
                    ->url(fn ($record) => $record->website_url)
                    ->openUrlInNewTab()
                    ->limit(30),
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
                    ->placeholder('All Logos')
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
            'index' => Pages\ListCompanyLogos::route('/'),
            'create' => Pages\CreateCompanyLogo::route('/create'),
            'edit' => Pages\EditCompanyLogo::route('/{record}/edit'),
        ];
    }
}
