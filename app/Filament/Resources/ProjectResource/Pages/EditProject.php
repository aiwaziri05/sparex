<?php

namespace App\Filament\Resources\ProjectResource\Pages;

use App\Filament\Resources\ProjectResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProject extends EditRecord
{
    protected static string $resource = ProjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('view')
                ->label('View on Website')
                ->icon('heroicon-o-eye')
                ->url(fn () => route('portfolio.show', $this->record->slug))
                ->openUrlInNewTab(),
            Actions\DeleteAction::make(),
        ];
    }
    
    protected function mutateFormDataBeforeSave(array $data): array
    {
        // Handle image URL if toggle is enabled
        if (isset($data['use_image_url']) && $data['use_image_url']) {
            if (!empty($data['image_url'])) {
                // User provided a new URL
                $data['image'] = $data['image_url'];
            } else {
                // URL mode but no URL provided - keep existing image
                $data['image'] = $this->record->image;
            }
        } else {
            // File upload mode
            if (empty($data['image']) || $data['image'] === null) {
                // No file uploaded - keep existing image
                $data['image'] = $this->record->image;
            }
            // If image is set, it's a new file upload, so use it
        }
        
        // Ensure image is never null
        if (empty($data['image'])) {
            $data['image'] = $this->record->image;
        }
        
        unset($data['use_image_url'], $data['image_url']);
        
        // Convert images repeater to simple array of strings
        if (isset($data['images']) && is_array($data['images'])) {
            $data['images'] = array_column($data['images'], 'image');
            $data['images'] = array_filter($data['images']); // Remove empty values
        }
        
        return $data;
    }
    
    protected function mutateFormDataBeforeFill(array $data): array
    {
        // Convert images array to repeater format
        if (isset($data['images']) && is_array($data['images'])) {
            $data['images'] = array_map(fn ($img) => ['image' => $img], $data['images']);
        }
        
        // Set image URL field if image is a URL
        if (isset($data['image']) && filter_var($data['image'], FILTER_VALIDATE_URL)) {
            $data['image_url'] = $data['image'];
            $data['use_image_url'] = true;
        }
        
        return $data;
    }
}
