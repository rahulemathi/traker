<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Detail;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Group;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Pages\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\DetailResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\DetailResource\Pages\EditDetail;
use App\Filament\Resources\DetailResource\RelationManagers;
use App\Filament\Resources\DetailResource\Pages\ListDetails;
use App\Filament\Resources\DetailResource\Pages\CreateDetail;
use App\Models\details;

class DetailResource extends Resource
{
    protected static ?string $model = details::class;

    protected static ?string $navigationIcon = 'heroicon-o-bars-3';

       protected static ?string $navigationGroup = 'Bikes';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        $user = Auth::id();
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make()->schema([
                        Select::make('model_id')->relationship('bike_model','name'),
                        TextInput::make('user_tested_mileage')->numeric(),
                        Hidden::make('user_id')->default($user)
                    ])
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('bike_model.name')->label('Model'),
                TextColumn::make('users.name')->label('User Name'),
                TextColumn::make('user_tested_mileage')
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
            'index' => Pages\ListDetails::route('/'),
            'create' => Pages\CreateDetail::route('/create'),
            'edit' => Pages\EditDetail::route('/{record}/edit'),
        ];
    }
}
