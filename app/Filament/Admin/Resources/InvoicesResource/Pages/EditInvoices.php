<?php

namespace App\Filament\Admin\Resources\InvoicesResource\Pages;

use App\Filament\Admin\Resources\InvoicesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInvoices extends EditRecord
{
    protected static string $resource = InvoicesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
