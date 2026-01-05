<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder';
    
    protected static ?string $navigationGroup = 'Content';
    
    protected static ?string $navigationLabel = 'Projects';
    
    protected static ?int $navigationSort = 1;

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
                            ->columnSpanFull(),
                        Forms\Components\RichEditor::make('long_description')
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
                                'Web Platforms' => 'Web Platforms',
                                'Mobile Apps' => 'Mobile Apps',
                                'Dashboards' => 'Dashboards',
                                'System Automation' => 'System Automation',
                                'Data Analytics' => 'Data Analytics',
                                'IT Infrastructure' => 'IT Infrastructure',
                            ])
                            ->searchable(),
                        Forms\Components\Select::make('color')
                            ->required()
                            ->options([
                                'blue' => 'Blue',
                                'indigo' => 'Indigo',
                                'orange' => 'Orange',
                                'emerald' => 'Emerald',
                                'purple' => 'Purple',
                                'cyan' => 'Cyan',
                                'rose' => 'Rose',
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
                            ->directory('projects')
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
                
                Forms\Components\Section::make('Tags & Technologies')
                    ->schema([
                        Forms\Components\TagsInput::make('tags')
                            ->placeholder('Add tags (press Enter)')
                            ->separator(',')
                            ->columnSpanFull(),
                        Forms\Components\TagsInput::make('technologies')
                            ->placeholder('Add technologies (press Enter)')
                            ->separator(',')
                            ->columnSpanFull(),
                        Forms\Components\Repeater::make('features')
                            ->schema([
                                Forms\Components\TextInput::make('feature')
                                    ->required()
                                    ->maxLength(255),
                            ])
                            ->defaultItems(0)
                            ->addActionLabel('Add Feature')
                            ->collapsible()
                            ->columnSpanFull(),
                    ])->columns(1),
                
                Forms\Components\Section::make('Additional Information')
                    ->schema([
                        Forms\Components\TextInput::make('client')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('duration')
                            ->maxLength(255)
                            ->placeholder('e.g., 3 months'),
                        Forms\Components\TextInput::make('team_size')
                            ->maxLength(255)
                            ->placeholder('e.g., 5 people'),
                    ])->columns(3),
                
                Forms\Components\Section::make('Additional Images')
                    ->schema([
                        Forms\Components\Repeater::make('images')
                            ->schema([
                                Forms\Components\TextInput::make('image')
                                    ->label('Image URL or Path')
                                    ->placeholder('Enter image URL or upload path')
                                    ->maxLength(500)
                                    ->helperText('Enter a full URL (http://...) or relative path'),
                            ])
                            ->defaultItems(0)
                            ->addActionLabel('Add Image')
                            ->collapsible()
                            ->itemLabel(fn (array $state): ?string => $state['image'] ?? null)
                            ->columnSpanFull(),
                    ])->columns(1),
                
                Forms\Components\Section::make('Publishing')
                    ->schema([
                        Forms\Components\Toggle::make('is_published')
                            ->default(true)
                            ->label('Published'),
                        Forms\Components\Toggle::make('show_on_homepage')
                            ->default(false)
                            ->label('Show on Homepage')
                            ->helperText('Display this project on the homepage'),
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
                        'Web Platforms' => 'info',
                        'Mobile Apps' => 'success',
                        'Dashboards' => 'warning',
                        'System Automation' => 'danger',
                        'Data Analytics' => 'primary',
                        'IT Infrastructure' => 'gray',
                        default => 'gray',
                    })
                    ->searchable()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_published')
                    ->boolean()
                    ->label('Published')
                    ->sortable(),
                Tables\Columns\IconColumn::make('show_on_homepage')
                    ->boolean()
                    ->label('Homepage')
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
                        'Web Platforms' => 'Web Platforms',
                        'Mobile Apps' => 'Mobile Apps',
                        'Dashboards' => 'Dashboards',
                        'System Automation' => 'System Automation',
                        'Data Analytics' => 'Data Analytics',
                        'IT Infrastructure' => 'IT Infrastructure',
                    ]),
                Tables\Filters\TernaryFilter::make('is_published')
                    ->label('Published')
                    ->placeholder('All projects')
                    ->trueLabel('Published only')
                    ->falseLabel('Unpublished only'),
            ])
            ->actions([
                Tables\Actions\Action::make('view')
                    ->label('View on Website')
                    ->icon('heroicon-o-eye')
                    ->url(fn (Project $record): string => route('portfolio.show', $record->slug))
                    ->openUrlInNewTab(),
                Tables\Actions\Action::make('duplicate')
                    ->label('Duplicate')
                    ->icon('heroicon-o-document-duplicate')
                    ->action(function (Project $record) {
                        $newProject = $record->replicate();
                        $newProject->title = $record->title . ' (Copy)';
                        $newProject->slug = Str::slug($newProject->title) . '-' . time();
                        $newProject->is_published = false;
                        $newProject->published_at = null;
                        $newProject->save();
                        
                        return redirect()->route('filament.admin.resources.projects.edit', $newProject);
                    })
                    ->requiresConfirmation()
                    ->modalHeading('Duplicate Project')
                    ->modalDescription('Are you sure you want to duplicate this project?'),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
