<?php

namespace App\Filament\Resources\FoodsResource\Pages;

use App\Filament\Resources\FoodsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFoods extends EditRecord
{
    protected static string $resource = FoodsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
