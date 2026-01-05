<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Models\Contact;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope';
    
    protected static ?string $navigationGroup = 'Communications';
    
    protected static ?string $navigationLabel = 'Contact Submissions';
    
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Contact Information')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->disabled()
                            ->dehydrated(),
                        Forms\Components\TextInput::make('email')
                            ->disabled()
                            ->dehydrated()
                            ->url(fn ($record) => $record ? 'mailto:' . $record->email : null)
                            ->openUrlInNewTab(),
                        Forms\Components\TextInput::make('subject')
                            ->disabled()
                            ->dehydrated(),
                    ])->columns(3),
                
                Forms\Components\Section::make('Message')
                    ->schema([
                        Forms\Components\Textarea::make('message')
                            ->disabled()
                            ->dehydrated()
                            ->rows(10)
                            ->columnSpanFull(),
                    ]),
                
                Forms\Components\Section::make('Status')
                    ->schema([
                        Forms\Components\Toggle::make('is_read')
                            ->label('Mark as Read')
                            ->default(false),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('email')
                    ->searchable()
                    ->sortable()
                    ->copyable()
                    ->copyMessage('Email copied!'),
                Tables\Columns\TextColumn::make('subject')
                    ->searchable()
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'project' => 'primary',
                        'partnership' => 'success',
                        'career' => 'warning',
                        'other' => 'gray',
                        default => 'gray',
                    }),
                Tables\Columns\IconColumn::make('is_read')
                    ->boolean()
                    ->label('Read')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('M j, Y H:i')
                    ->sortable()
                    ->label('Received'),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_read')
                    ->label('Read Status')
                    ->placeholder('All messages')
                    ->trueLabel('Read only')
                    ->falseLabel('Unread only'),
                Tables\Filters\SelectFilter::make('subject')
                    ->options([
                        'project' => 'Start a Project',
                        'partnership' => 'Partnership Inquiry',
                        'career' => 'Careers',
                        'other' => 'Other',
                    ]),
            ])
            ->actions([
                Tables\Actions\Action::make('reply')
                    ->label('Reply')
                    ->icon('heroicon-o-envelope')
                    ->url(fn (Contact $record): string => 'mailto:' . $record->email . '?subject=Re: ' . urlencode($record->subject))
                    ->openUrlInNewTab(),
                Tables\Actions\Action::make('mark_read')
                    ->label(fn (Contact $record) => $record->is_read ? 'Mark as Unread' : 'Mark as Read')
                    ->icon(fn (Contact $record) => $record->is_read ? 'heroicon-o-eye-slash' : 'heroicon-o-eye')
                    ->action(function (Contact $record) {
                        $record->update(['is_read' => !$record->is_read]);
                    })
                    ->color(fn (Contact $record) => $record->is_read ? 'warning' : 'success'),
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\BulkAction::make('mark_read')
                        ->label('Mark as Read')
                        ->icon('heroicon-o-check-circle')
                        ->action(fn ($records) => $records->each->update(['is_read' => true]))
                        ->requiresConfirmation(),
                    Tables\Actions\BulkAction::make('mark_unread')
                        ->label('Mark as Unread')
                        ->icon('heroicon-o-x-circle')
                        ->action(fn ($records) => $records->each->update(['is_read' => false]))
                        ->requiresConfirmation(),
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc')
            ->poll('30s');
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
            'index' => Pages\ListContacts::route('/'),
            'view' => Pages\ViewContact::route('/{record}'),
        ];
    }
    
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('is_read', false)->count() ?: null;
    }
    
    public static function getNavigationBadgeColor(): ?string
    {
        return 'danger';
    }
}
