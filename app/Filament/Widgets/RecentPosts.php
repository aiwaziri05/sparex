<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\PostResource;
use App\Models\Post;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class RecentPosts extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';
    
    protected static ?int $sort = 3;

    public function table(Table $table): Table
    {
        return $table
            ->query(Post::query()->latest()->limit(5))
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->size(40)
                    ->circular(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->limit(40),
                Tables\Columns\TextColumn::make('category')
                    ->badge(),
                Tables\Columns\TextColumn::make('author')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_published')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('M j, Y')
                    ->sortable(),
            ])
            ->actions([
                Tables\Actions\Action::make('edit')
                    ->url(fn (Post $record): string => PostResource::getUrl('edit', ['record' => $record])),
            ])
            ->heading('Recent Blog Posts');
    }
}

