<?php

namespace App\Filament\Resources\Pendaftarans\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PendaftaranForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_lengkap')
                    ->required(),
                Select::make('jenis_kelamin')
                    ->options(['Pria' => 'Pria', 'Wanita' => 'Wanita'])
                    ->required(),
                TextInput::make('agama')
                    ->required(),
                TextInput::make('hobi')
                    ->required(),
                Textarea::make('komentar')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('password')
                    ->password()
                    ->required(),
                TextInput::make('latitude')
                    ->label('Latitude')
                    ->numeric()
                    ->helperText('Contoh: -3.319437'),
                TextInput::make('longitude')
                    ->label('Longitude')
                    ->numeric()
                    ->helperText('Contoh: 114.590082'),
            ]);
    }
}
