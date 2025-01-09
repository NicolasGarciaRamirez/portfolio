<?php

namespace App\Filament\Sections\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables\Columns\TextColumn;

class LatestUsers extends BaseWidget
{
    public function table(Table $table): Table
    {
        return $table
            ->query(
                \App\Models\User::query()->latest()
            )
            ->columns([
                TextColumn::make('name'),
            ]);
    }
}
