<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactInfoResource\Pages;
use App\Filament\Resources\ContactInfoResource\RelationManagers;
use App\Models\ContactInfo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactInfoResource extends Resource
{
    protected static ?string $model = ContactInfo::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Page Content';

    protected static ?string $navigationLabel = 'Contact Info';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
         return $form
        ->schema([
            Forms\Components\Section::make('Email')
                ->schema([
                    Forms\Components\TextInput::make('email')
                        ->email()
                        ->required(),

                    Forms\Components\TextInput::make('email_description')
                        ->placeholder('Short helper text under email'),
                ]),

            Forms\Components\Section::make('Phone')
                ->schema([
                    Forms\Components\TextInput::make('phone')
                        ->required(),

                    Forms\Components\TextInput::make('phone_description')
                        ->placeholder('Availability or response time'),
                ]),

            Forms\Components\Section::make('Address')
                ->schema([
                    Forms\Components\Textarea::make('address')
                        ->rows(3)
                        ->required(),

                    Forms\Components\TextInput::make('address_description')
                        ->placeholder('Office hours or extra info'),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('email_description'),
                Tables\Columns\TextColumn::make('phone'),
                Tables\Columns\TextColumn::make('phone_description'),
                Tables\Columns\TextColumn::make('address')->limit(30),
                Tables\Columns\TextColumn::make('address_description'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListContactInfos::route('/'),
            'create' => Pages\CreateContactInfo::route('/create'),
            'edit' => Pages\EditContactInfo::route('/{record}/edit'),
        ];
    }
}
