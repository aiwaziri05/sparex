<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\ContactResource;
use App\Models\Contact;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class UnreadContacts extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';
    
    protected static ?int $sort = 4;

    public function table(Table $table): Table
    {
        return $table
            ->query(Contact::query()->where('is_read', false)->latest()->limit(5))
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('email')
                    ->searchable()
                    ->copyable(),
                Tables\Columns\TextColumn::make('subject')
                    ->badge()
                    ->limit(30),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('M j, Y H:i')
                    ->sortable()
                    ->label('Received'),
            ])
            ->actions([
                Tables\Actions\Action::make('view')
                    ->url(fn (Contact $record): string => ContactResource::getUrl('view', ['record' => $record])),
                Tables\Actions\Action::make('mark_read')
                    ->label('Mark as Read')
                    ->icon('heroicon-o-check')
                    ->action(function (Contact $record) {
                        $record->update(['is_read' => true]);
                    })
                    ->color('success'),
            ])
            ->heading('Unread Contact Submissions')
            ->emptyStateHeading('No unread contacts')
            ->emptyStateDescription('All contact submissions have been read.');
    }
}

