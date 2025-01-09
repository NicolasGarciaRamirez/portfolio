<?php

namespace App\Filament\Sections\Resources\UserResource\Pages;

use App\Filament\Sections\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class Users extends CreateRecord
{
    protected static string $resource = UserResource::class;
}
