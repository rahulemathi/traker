<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\mileage;
use Filament\Forms\Set;
use App\Models\Mileages;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\MileagesResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MileagesResource\RelationManagers;

class MileagesResource extends Resource
{
    protected static ?string $model = mileage::class;

    protected static ?string $navigationIcon = 'heroicon-o-map-pin';

    protected static ?string $navigationGroup = 'Bikes';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
               Select::make('details_id')->relationship('detail_id', 'id'),
                TextInput::make('primary_km')->required(),
                TextInput::make('secondary_km')->required(),
                TextInput::make('fuel_injected')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('details_id'),
                TextColumn::make('primary_km'),
                TextColumn::make('secondary_km'),
                TextColumn::make('fuel_injected'),
                TextColumn::make('mileage_per_liter')
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
            'index' => Pages\ListMileages::route('/'),
            'create' => Pages\CreateMileages::route('/create'),
            'edit' => Pages\EditMileages::route('/{record}/edit'),
        ];
    }
}
