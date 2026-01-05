<?php

namespace App\Filament\Resources\ContactResource\Pages;

use App\Filament\Resources\ContactResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewContact extends ViewRecord
{
    protected static string $resource = ContactResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('reply')
                ->label('Reply via Email')
                ->icon('heroicon-o-envelope')
                ->url(fn () => 'mailto:' . $this->record->email . '?subject=Re: ' . urlencode($this->record->subject))
                ->openUrlInNewTab(),
            Actions\Action::make('mark_read')
                ->label(fn () => $this->record->is_read ? 'Mark as Unread' : 'Mark as Read')
                ->icon(fn () => $this->record->is_read ? 'heroicon-o-eye-slash' : 'heroicon-o-eye')
                ->action(function () {
                    $this->record->update(['is_read' => !$this->record->is_read]);
                    $this->redirect(static::getUrl(['record' => $this->record]));
                })
                ->color(fn () => $this->record->is_read ? 'warning' : 'success'),
            Actions\DeleteAction::make(),
        ];
    }
}
