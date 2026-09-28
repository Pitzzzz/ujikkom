<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryResource\Pages;
use App\Models\Gallery;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationLabel = 'Galeri';

    protected static ?string $modelLabel = 'Galeri';

    protected static ?string $pluralModelLabel = 'Galeri';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                    ->label('Gambar')
                    ->image()
                    ->directory('galleries')
                    ->disk('public')
                    ->imageEditor()
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('title')
                    ->label('Judul')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('category')
                    ->label('Kategori')
                    ->options([
                        'Kegiatan' => 'Kegiatan',
                        'Prestasi' => 'Prestasi',
                        'Fasilitas' => 'Fasilitas',
                        'Acara' => 'Acara',
                    ])
                    ->required()
                    ->searchable(),
                Forms\Components\DatePicker::make('date')
                    ->label('Tanggal')
                    ->required()
                    ->default(now()),
                Forms\Components\Textarea::make('short_description')
                    ->label('Deskripsi singkat')
                    ->rows(3)
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
                    ->sortable(),
                Tables\Columns\TextColumn::make('category')
                    ->label('Kategori')
                    ->badge()
                    ->searchable(),
                Tables\Columns\TextColumn::make('date')
                    ->label('Tanggal')
                    ->date('d M Y')
                    ->sortable(),
            ])
            ->defaultSort('date', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('category')
                    ->label('Kategori')
                    ->options([
                        'Kegiatan' => 'Kegiatan',
                        'Prestasi' => 'Prestasi',
                        'Fasilitas' => 'Fasilitas',
                        'Acara' => 'Acara',
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
            'index' => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'edit' => Pages\EditGallery::route('/{record}/edit'),
        ];
    }
}
