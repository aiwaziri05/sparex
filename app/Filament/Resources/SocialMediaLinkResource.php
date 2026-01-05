<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SocialMediaLinkResource\Pages;
use App\Filament\Resources\SocialMediaLinkResource\RelationManagers;
use App\Models\SocialMediaLink;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SocialMediaLinkResource extends Resource
{
    protected static ?string $model = SocialMediaLink::class;

    protected static ?string $navigationIcon = 'heroicon-o-share';
    protected static ?string $navigationGroup = 'Page Content';
    protected static ?string $navigationLabel = 'Social Media Links';
    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Social Media Link Details')
                    ->schema([
                        Forms\Components\Select::make('platform')
                            ->required()
                            ->options([
                                'facebook' => 'Facebook',
                                'twitter' => 'Twitter / X',
                                'instagram' => 'Instagram',
                                'linkedin' => 'LinkedIn',
                                'youtube' => 'YouTube',
                                'github' => 'GitHub',
                                'tiktok' => 'TikTok',
                                'pinterest' => 'Pinterest',
                                'other' => 'Other',
                            ])
                            ->searchable(),
                        Forms\Components\TextInput::make('url')
                            ->required()
                            ->url()
                            ->maxLength(255)
                            ->columnSpanFull(),
                        Forms\Components\TextInput::make('icon')
                            ->label('Custom Icon Path (Optional)')
                            ->helperText('Leave empty to use default platform icon')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('hover_color')
                            ->label('Hover Color')
                            ->helperText('e.g., blue-600, pink-600, blue-400')
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
                Tables\Columns\TextColumn::make('platform')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('url')
                    ->label('URL')
                    ->url(fn ($record) => $record->url)
                    ->openUrlInNewTab()
                    ->limit(40)
                    ->copyable()
                    ->copyMessage('URL copied!'),
                Tables\Columns\TextColumn::make('hover_color')
                    ->badge(),
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
                Tables\Filters\SelectFilter::make('platform')
                    ->options([
                        'facebook' => 'Facebook',
                        'twitter' => 'Twitter / X',
                        'instagram' => 'Instagram',
                        'linkedin' => 'LinkedIn',
                        'youtube' => 'YouTube',
                        'github' => 'GitHub',
                        'tiktok' => 'TikTok',
                        'pinterest' => 'Pinterest',
                        'other' => 'Other',
                    ]),
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Active Status')
                    ->placeholder('All Links')
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
            'index' => Pages\ListSocialMediaLinks::route('/'),
            'create' => Pages\CreateSocialMediaLink::route('/create'),
            'edit' => Pages\EditSocialMediaLink::route('/{record}/edit'),
        ];
    }
}
