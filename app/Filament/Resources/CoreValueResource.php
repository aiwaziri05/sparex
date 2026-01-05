<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CoreValueResource\Pages;
use App\Filament\Resources\CoreValueResource\RelationManagers;
use App\Models\CoreValue;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CoreValueResource extends Resource
{
    protected static ?string $model = CoreValue::class;

    protected static ?string $navigationIcon = 'heroicon-o-sparkles';
    protected static ?string $navigationGroup = 'Page Content';
    protected static ?string $navigationLabel = 'Core Values';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Core Value Details')
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
                        Forms\Components\Textarea::make('icon_svg')
                            ->label('Icon SVG Path')
                            ->helperText('Paste the SVG path data here (e.g., d="M13 10V3L4 14h7v7l9-11h-7z")')
                            ->rows(2)
                            ->columnSpanFull(),
                        Forms\Components\Select::make('color')
                            ->required()
                            ->options([
                                'blue' => 'Blue',
                                'green' => 'Green',
                                'amber' => 'Amber',
                                'purple' => 'Purple',
                                'pink' => 'Pink',
                                'indigo' => 'Indigo',
                            ])
                            ->default('blue'),
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
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
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
                    ->placeholder('All Values')
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
            'index' => Pages\ListCoreValues::route('/'),
            'create' => Pages\CreateCoreValue::route('/create'),
            'edit' => Pages\EditCoreValue::route('/{record}/edit'),
        ];
    }
}
