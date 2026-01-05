<?php

namespace App\Filament\Widgets;

use App\Models\Contact;
use App\Models\Post;
use App\Models\Project;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $totalProjects = Project::count();
        $publishedProjects = Project::where('is_published', true)->count();
        $unpublishedProjects = $totalProjects - $publishedProjects;
        
        $totalPosts = Post::count();
        $publishedPosts = Post::where('is_published', true)->count();
        $unpublishedPosts = $totalPosts - $publishedPosts;
        
        $unreadContacts = Contact::where('is_read', false)->count();
        $totalUsers = User::count();

        return [
            Stat::make('Total Projects', $totalProjects)
                ->description($publishedProjects . ' published, ' . $unpublishedProjects . ' unpublished')
                ->descriptionIcon('heroicon-m-folder')
                ->color('primary')
                ->url(\App\Filament\Resources\ProjectResource::getUrl('index')),
            
            Stat::make('Total Posts', $totalPosts)
                ->description($publishedPosts . ' published, ' . $unpublishedPosts . ' unpublished')
                ->descriptionIcon('heroicon-m-document-text')
                ->color('success')
                ->url(\App\Filament\Resources\PostResource::getUrl('index')),
            
            Stat::make('Unread Contacts', $unreadContacts)
                ->description('New contact form submissions')
                ->descriptionIcon('heroicon-m-envelope')
                ->color('danger')
                ->url(\App\Filament\Resources\ContactResource::getUrl('index')),
            
            Stat::make('Total Users', $totalUsers)
                ->description('Registered admin users')
                ->descriptionIcon('heroicon-m-users')
                ->color('info')
                ->url(\App\Filament\Resources\UserResource::getUrl('index')),
        ];
    }
}

