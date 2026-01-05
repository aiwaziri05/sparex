<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimonialResource\Pages;
use App\Filament\Resources\TestimonialResource\RelationManagers;
use App\Models\Testimonial;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TestimonialResource extends Resource
{
    protected static ?string $model = Testimonial::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';
    protected static ?string $navigationGroup = 'Page Content';
    protected static ?string $navigationLabel = 'Testimonials';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Client Information')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('position')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('company')
                            ->required()
                            ->maxLength(255),
                    ])->columns(3),
                Forms\Components\Section::make('Testimonial Content')
                    ->schema([
                        Forms\Components\Textarea::make('testimonial')
                            ->required()
                            ->rows(4)
                            ->maxLength(65535)
                            ->columnSpanFull(),
                        Forms\Components\Section::make('Image')
                            ->schema([
                                Forms\Components\Toggle::make('use_image_url')
                                    ->label('Use Image URL instead of upload')
                                    ->default(false)
                                    ->live()
                                    ->columnSpanFull(),
                                Forms\Components\FileUpload::make('image')
                                    ->image()
                                    ->directory('testimonials')
                                    ->visibility('public')
                                    ->imageEditor()
                                    ->maxSize(2048)
                                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                                    ->visible(fn (Forms\Get $get) => !$get('use_image_url')),
                                Forms\Components\TextInput::make('image_url')
                                    ->label('Image URL')
                                    ->url()
                                    ->maxLength(255)
                                    ->visible(fn (Forms\Get $get) => $get('use_image_url'))
                                    ->dehydrated(false)
                                    ->afterStateUpdated(function ($state, Forms\Set $set) {
                                        if ($state) {
                                            $set('image', $state);
                                        }
                                    }),
                            ])->columns(1),
                        Forms\Components\Select::make('color')
                            ->required()
                            ->options([
                                'blue' => 'Blue',
                                'emerald' => 'Emerald',
                                'amber' => 'Amber',
                                'purple' => 'Purple',
                                'pink' => 'Pink',
                                'indigo' => 'Indigo',
                            ])
                            ->default('blue'),
                        Forms\Components\Toggle::make('is_verified')
                            ->label('Verified Client')
                            ->default(true)
                            ->required(),
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
                Tables\Columns\ImageColumn::make('image')
                    ->label('Photo')
                    ->circular()
                    ->defaultImageUrl(fn ($record) => $record->image && filter_var($record->image, FILTER_VALIDATE_URL) ? $record->image : null),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('position')
                    ->searchable(),
                Tables\Columns\TextColumn::make('company')
                    ->searchable(),
                Tables\Columns\TextColumn::make('color')
                    ->badge()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_verified')
                    ->label('Verified')
                    ->boolean()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean()
                    ->sortable(),
                Tables\Columns\TextColumn::make('order')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('M j, Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Active Status')
                    ->placeholder('All Testimonials')
                    ->trueLabel('Active')
                    ->falseLabel('Inactive'),
                Tables\Filters\TernaryFilter::make('is_verified')
                    ->label('Verified Status')
                    ->placeholder('All')
                    ->trueLabel('Verified')
                    ->falseLabel('Unverified'),
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
            'index' => Pages\ListTestimonials::route('/'),
            'create' => Pages\CreateTestimonial::route('/create'),
            'edit' => Pages\EditTestimonial::route('/{record}/edit'),
        ];
    }
}
