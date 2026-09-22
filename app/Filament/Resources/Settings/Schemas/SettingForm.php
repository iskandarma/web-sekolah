<?php

namespace App\Filament\Resources\Settings\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('school_name')
                    ->required(),
                TextInput::make('slogan'),
                TextInput::make('logo'),
                TextInput::make('favicon'),
                FileUpload::make('hero_image')
                    ->image(),
                Textarea::make('address')
                    ->columnSpanFull(),
                TextInput::make('phone')
                    ->tel(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email(),
                Textarea::make('maps')
                    ->columnSpanFull(),
                TextInput::make('facebook'),
                TextInput::make('instagram'),
                TextInput::make('youtube'),
            ]);
    }
}
