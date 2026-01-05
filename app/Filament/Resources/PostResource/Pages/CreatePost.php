<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;
    
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Handle image URL if toggle is enabled
        if (isset($data['use_image_url']) && $data['use_image_url']) {
            if (!empty($data['image_url'])) {
                $data['image'] = $data['image_url'];
            }
        }
        
        // Ensure image is set - validation should catch this, but double-check
        if (empty($data['image'])) {
            \Filament\Notifications\Notification::make()
                ->title('Image is required')
                ->body('Please upload an image or provide an image URL.')
                ->danger()
                ->send();
            
            throw new \Illuminate\Validation\ValidationException(
                \Illuminate\Support\Facades\Validator::make([], ['image' => 'required'])->errors()->add('image', 'Please upload an image or provide an image URL.')
            );
        }
        
        unset($data['use_image_url'], $data['image_url']);
        
        return $data;
    }
}
