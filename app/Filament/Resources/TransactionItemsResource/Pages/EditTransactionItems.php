<?php

namespace App\Filament\Resources\TransactionItemsResource\Pages;

use App\Filament\Resources\TransactionItemsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTransactionItems extends EditRecord
{
    protected static string $resource = TransactionItemsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
