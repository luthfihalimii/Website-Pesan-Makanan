<?php

namespace App\Filament\Resources\TransactionItemsResource\Pages;

use App\Filament\Resources\TransactionItemsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTransactionItems extends ListRecords
{
    protected static string $resource = TransactionItemsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
