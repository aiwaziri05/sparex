<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StatResource\Pages;
use App\Filament\Resources\StatResource\RelationManagers;
use App\Models\Stat;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StatResource extends Resource
{
    protected static ?string $model = Stat::class;

    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';
    protected static ?string $navigationGroup = 'Page Content';
    protected static ?string $navigationLabel = 'Stats';
    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Stat Details')
                    ->schema([
                        Forms\Components\TextInput::make('label')
                            ->required()
                            ->maxLength(255)
                            ->label('Label')
                            ->helperText('e.g., "Projects", "Forecast Accuracy"'),
                        Forms\Components\TextInput::make('value')
                            ->required()
                            ->maxLength(255)
                            ->label('Value')
                            ->helperText('e.g., "150", "94", "85"'),
                        Forms\Components\TextInput::make('suffix')
                            ->maxLength(10)
                            ->label('Suffix')
                            ->helperText('e.g., "+", "%", or leave empty'),
                        Forms\Components\TextInput::make('description')
                            ->maxLength(255)
                            ->label('Description')
                            ->helperText('e.g., "Delivered", "AI-Driven", "With Automation"'),
                        Forms\Components\Select::make('color')
                            ->required()
                            ->options([
                                'indigo' => 'Indigo',
                                'emerald' => 'Emerald',
                                'amber' => 'Amber',
                                'blue' => 'Blue',
                                'purple' => 'Purple',
                                'pink' => 'Pink',
                                'green' => 'Green',
                            ])
                            ->default('indigo'),
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
                Tables\Columns\TextColumn::make('label')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('value')
                    ->sortable(),
                Tables\Columns\TextColumn::make('suffix')
                    ->sortable(),
                Tables\Columns\TextColumn::make('description')
                    ->searchable()
                    ->limit(30),
                Tables\Columns\TextColumn::make('color')
                    ->badge()
                    ->sortable(),
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
                    ->placeholder('All Stats')
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
            'index' => Pages\ListStats::route('/'),
            'create' => Pages\CreateStat::route('/create'),
            'edit' => Pages\EditStat::route('/{record}/edit'),
        ];
    }
}
