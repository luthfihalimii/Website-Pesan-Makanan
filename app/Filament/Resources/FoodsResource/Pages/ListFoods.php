<?php

namespace App\Filament\Resources\FoodsResource\Pages;

use App\Filament\Resources\FoodsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFoods extends ListRecords
{
    protected static string $resource = FoodsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
