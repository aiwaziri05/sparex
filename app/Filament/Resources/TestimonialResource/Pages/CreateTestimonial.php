<?php

namespace App\Filament\Resources\TestimonialResource\Pages;

use App\Filament\Resources\TestimonialResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTestimonial extends CreateRecord
{
    protected static string $resource = TestimonialResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (isset($data['use_image_url']) && $data['use_image_url'] && isset($data['image_url'])) {
            $data['image'] = $data['image_url'];
        }
        unset($data['use_image_url'], $data['image_url']);
        return $data;
    }
}
