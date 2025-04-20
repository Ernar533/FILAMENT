<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Filament\Resources\ArticleResource\RelationManagers;
use App\Models\Article;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Set;
use Illuminate\Support\Str;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Carbon\Carbon;
use Filament\Forms\Components\Select;
use App\Models\ArticleCategory;



class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-document';

    protected static ?string $navigationLabel = 'Статьи';

    protected static ?string $modelLabel = 'Статьи';

    protected static ?string $pluralModelLabel = 'Статьи';

    protected static ?string $navigationGroup = 'Контент';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->label('Наименование')
                ->required()
                ->maxLength(255)
                ->Live(onBlur: true)
                ->afterStateUpdated(function(Set $set, $state) {
                    $set('slug', Str::slug($state));
                }),
                Forms\Components\TextInput::make('slug')->label('Код')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('preview_image')->label('Изображение анонса')
                    ->image()
                    ->directory('articles')
                    ->required(),
                Forms\Components\FileUpload::make('detail_image')->label('Детальное изображнеие')
                    ->image()
                    ->directory('articles')
                    ->required(),
                Forms\Components\Textarea::make('preview_text')->label('Анонс')
                    ->required()
                    ->columnSpanFull(),
                    Forms\Components\RichEditor::make('detail_text')->label('Статья')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TagsInput::make('tags')->label('Теги'),
                Forms\Components\Select::make('category_id')->label('Категория')
                    ->options(static::categoryOptions())
                    ->required(),
                Forms\Components\DateTimePicker::make('published_at')->label('Дата публикации')
                    ->default(Carbon::now())
                    ->required(),
                Forms\Components\Toggle::make('active')
                    ->default(true)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Наименование')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')->label('Код')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('preview_image')->label(''),
                Tables\Columns\ImageColumn::make('detail_image')->label(''),
                Tables\Columns\TextColumn::make('category.title')->label('Категория')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('published_at')->label('Дата публикации')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\IconColumn::make('active')->label('Активность')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }

    public static function categoryOptions() {
        return ArticleCategory::pluck('title', 'id');
    }
}
