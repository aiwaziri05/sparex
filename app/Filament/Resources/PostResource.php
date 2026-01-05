<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    
    protected static ?string $navigationGroup = 'Content';
    
    protected static ?string $navigationLabel = 'Blog Posts';
    
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Basic Information')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (string $operation, $state, Forms\Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),
                        Forms\Components\TextInput::make('slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true)
                            ->alphaDash(),
                        Forms\Components\Textarea::make('description')
                            ->required()
                            ->rows(3)
                            ->columnSpanFull()
                            ->helperText('Short description for blog listing'),
                        Forms\Components\RichEditor::make('content')
                            ->required()
                            ->columnSpanFull()
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'underline',
                                'strike',
                                'link',
                                'bulletList',
                                'orderedList',
                                'h2',
                                'h3',
                                'blockquote',
                                'codeBlock',
                            ]),
                    ])->columns(2),
                
                Forms\Components\Section::make('Categorization')
                    ->schema([
                        Forms\Components\Select::make('category')
                            ->required()
                            ->options([
                                'Analytics' => 'Analytics',
                                'Best Practices' => 'Best Practices',
                                'Trends' => 'Trends',
                                'Security' => 'Security',
                                'Infrastructure' => 'Infrastructure',
                                'Design' => 'Design',
                            ])
                            ->searchable(),
                        Forms\Components\Select::make('color')
                            ->required()
                            ->options([
                                'blue' => 'Blue',
                                'green' => 'Green',
                                'amber' => 'Amber',
                                'red' => 'Red',
                                'indigo' => 'Indigo',
                                'purple' => 'Purple',
                            ])
                            ->searchable(),
                    ])->columns(2),
                
                Forms\Components\Section::make('Image')
                    ->schema([
                        Forms\Components\Toggle::make('use_image_url')
                            ->label('Use Image URL instead of upload')
                            ->default(fn ($record) => $record && filter_var($record->image, FILTER_VALIDATE_URL))
                            ->live()
                            ->columnSpanFull(),
                        Forms\Components\FileUpload::make('image')
                            ->image()
                            ->directory('posts')
                            ->visibility('public')
                            ->imageEditor()
                            ->maxSize(5120)
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                            ->visible(fn (Forms\Get $get) => !$get('use_image_url'))
                            ->required(fn (Forms\Get $get, $record) => !$get('use_image_url') && !$record)
                            ->dehydrated(fn (Forms\Get $get) => !$get('use_image_url')),
                        Forms\Components\TextInput::make('image_url')
                            ->label('Image URL')
                            ->url()
                            ->maxLength(255)
                            ->default(fn ($record) => $record && filter_var($record->image, FILTER_VALIDATE_URL) ? $record->image : null)
                            ->visible(fn (Forms\Get $get) => $get('use_image_url'))
                            ->required(fn (Forms\Get $get, $record) => $get('use_image_url') && !$record)
                            ->dehydrated(false)
                            ->afterStateUpdated(function ($state, Forms\Set $set, Forms\Get $get) {
                                if ($get('use_image_url') && $state) {
                                    $set('image', $state);
                                }
                            }),
                    ])->columns(1),
                
                Forms\Components\Section::make('Metadata')
                    ->schema([
                        Forms\Components\TextInput::make('read_time')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('e.g., 5 min read')
                            ->helperText('Estimated reading time'),
                        Forms\Components\TextInput::make('author')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Author name'),
                        Forms\Components\TagsInput::make('tags')
                            ->placeholder('Add tags (press Enter)')
                            ->separator(',')
                            ->columnSpanFull(),
                    ])->columns(2),
                
                Forms\Components\Section::make('Publishing')
                    ->schema([
                        Forms\Components\Toggle::make('is_published')
                            ->default(true)
                            ->label('Published'),
                        Forms\Components\DateTimePicker::make('published_at')
                            ->default(now())
                            ->displayFormat('d/m/Y H:i')
                            ->timezone('UTC'),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->size(50)
                    ->circular(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->limit(50),
                Tables\Columns\TextColumn::make('category')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Analytics' => 'info',
                        'Best Practices' => 'success',
                        'Trends' => 'warning',
                        'Security' => 'danger',
                        'Infrastructure' => 'primary',
                        'Design' => 'gray',
                        default => 'gray',
                    })
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('author')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_published')
                    ->boolean()
                    ->label('Published')
                    ->sortable(),
                Tables\Columns\TextColumn::make('published_at')
                    ->dateTime('M j, Y')
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('M j, Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('category')
                    ->options([
                        'Analytics' => 'Analytics',
                        'Best Practices' => 'Best Practices',
                        'Trends' => 'Trends',
                        'Security' => 'Security',
                        'Infrastructure' => 'Infrastructure',
                        'Design' => 'Design',
                    ]),
                Tables\Filters\SelectFilter::make('author')
                    ->options(fn () => Post::query()->distinct()->pluck('author', 'author')->toArray())
                    ->searchable(),
                Tables\Filters\TernaryFilter::make('is_published')
                    ->label('Published')
                    ->placeholder('All posts')
                    ->trueLabel('Published only')
                    ->falseLabel('Unpublished only'),
            ])
            ->actions([
                Tables\Actions\Action::make('view')
                    ->label('View on Website')
                    ->icon('heroicon-o-eye')
                    ->url(fn (Post $record): string => route('blog.show', $record->slug))
                    ->openUrlInNewTab(),
                Tables\Actions\Action::make('duplicate')
                    ->label('Duplicate')
                    ->icon('heroicon-o-document-duplicate')
                    ->action(function (Post $record) {
                        $newPost = $record->replicate();
                        $newPost->title = $record->title . ' (Copy)';
                        $newPost->slug = Str::slug($newPost->title) . '-' . time();
                        $newPost->is_published = false;
                        $newPost->published_at = null;
                        $newPost->save();
                        
                        return redirect()->route('filament.admin.resources.posts.edit', $newPost);
                    })
                    ->requiresConfirmation()
                    ->modalHeading('Duplicate Post')
                    ->modalDescription('Are you sure you want to duplicate this post?'),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\BulkAction::make('publish')
                        ->label('Publish')
                        ->icon('heroicon-o-check-circle')
                        ->action(fn ($records) => $records->each->update([
                            'is_published' => true,
                            'published_at' => now(),
                        ]))
                        ->requiresConfirmation(),
                    Tables\Actions\BulkAction::make('unpublish')
                        ->label('Unpublish')
                        ->icon('heroicon-o-x-circle')
                        ->action(fn ($records) => $records->each->update([
                            'is_published' => false,
                        ]))
                        ->requiresConfirmation(),
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
