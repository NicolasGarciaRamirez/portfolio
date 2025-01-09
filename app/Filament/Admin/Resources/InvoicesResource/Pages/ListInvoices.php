<?php

namespace App\Filament\Admin\Resources\InvoicesResource\Pages;

use App\Filament\Admin\Resources\InvoicesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInvoices extends ListRecords
{
    protected static string $resource = InvoicesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
