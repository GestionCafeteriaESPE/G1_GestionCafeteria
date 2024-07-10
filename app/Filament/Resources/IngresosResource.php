<?php
namespace App\Filament\Resources;

use App\Filament\Resources\IngresosResource\Pages;
use App\Models\Ingresos;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class IngresosResource extends Resource
{
    protected static ?string $model = Ingresos::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                DatePicker::make('fecha_ing')
                    ->label('Fecha de Ingreso')
                    ->required()
                    ->placeholder('YYYY-MM-DD'),

                TextInput::make('descripcion_ing')
                    ->required()
                    ->maxLength(191),

                TextInput::make('cantidad_ing')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('fecha_ing')
                    ->label('Fecha de Ingreso')
                    ->sortable(),  // Puedes añadir sortable si necesitas

                Tables\Columns\TextColumn::make('descripcion_ing')
                    ->searchable(),

                Tables\Columns\TextColumn::make('cantidad_ing')
                    ->numeric()
                    ->sortable(),
            ])
            ->filters([
                // Agrega tus filtros aquí
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Define tus relaciones aquí
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListIngresos::route('/'),
            'create' => Pages\CreateIngresos::route('/create'),
            'edit' => Pages\EditIngresos::route('/{record}/edit'),
        ];
    }
}