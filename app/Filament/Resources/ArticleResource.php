<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Models\Article;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationLabel = 'Artikel';

    protected static ?string $modelLabel = 'Artikel';

    protected static ?string $pluralModelLabel = 'Artikel';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                    ->label('Gambar')
                    ->image()
                    ->directory('articles')
                    ->disk('public')
                    ->imageEditor()
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('title')
                    ->label('Judul')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state ?? ''))),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true),
                Forms\Components\Select::make('category')
                    ->label('Kategori')
                    ->options([
                        'Berita' => 'Berita',
                        'Pengumuman' => 'Pengumuman',
                        'Prestasi' => 'Prestasi',
                        'Tips' => 'Tips',
                    ])
                    ->required()
                    ->searchable(),
                Forms\Components\DatePicker::make('date')
                    ->label('Tanggal')
                    ->required()
                    ->default(now()),
                Forms\Components\TextInput::make('author')
                    ->label('Penulis')
                    ->required()
                    ->maxLength(255)
                    ->default('Redaksi HM'),
                Forms\Components\TextInput::make('read_time')
                    ->label('Waktu baca')
                    ->required()
                    ->maxLength(50)
                    ->default('3 mnt')
                    ->placeholder('3 mnt'),
                Forms\Components\Textarea::make('excerpt')
                    ->label('Ringkasan')
                    ->rows(3)
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('quote')
                    ->label('Kutipan (opsional)')
                    ->maxLength(255)
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('content')
                    ->label('Konten')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Gambar')
                    ->disk('public'),
                Tables\Columns\TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->sortable()
                    ->limit(40),
                Tables\Columns\TextColumn::make('category')
                    ->label('Kategori')
                    ->badge()
                    ->searchable(),
                Tables\Columns\TextColumn::make('date')
                    ->label('Tanggal')
                    ->date('d M Y')
                    ->sortable(),
                Tables\Columns\TextColumn::make('author')
                    ->label('Penulis')
                    ->toggleable(),
            ])
            ->defaultSort('date', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('category')
                    ->label('Kategori')
                    ->options([
                        'Berita' => 'Berita',
                        'Pengumuman' => 'Pengumuman',
                        'Prestasi' => 'Prestasi',
                        'Tips' => 'Tips',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}
