<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\ProjectResource;
use App\Models\Project;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class RecentProjects extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';
    
    protected static ?int $sort = 2;

    public function table(Table $table): Table
    {
        return $table
            ->query(Project::query()->latest()->limit(5))
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->size(40)
                    ->circular(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->limit(40),
                Tables\Columns\TextColumn::make('category')
                    ->badge(),
                Tables\Columns\IconColumn::make('is_published')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('M j, Y')
                    ->sortable(),
            ])
            ->actions([
                Tables\Actions\Action::make('edit')
                    ->url(fn (Project $record): string => ProjectResource::getUrl('edit', ['record' => $record])),
            ])
            ->heading('Recent Projects');
    }
}

