<?php

namespace App\Filament\Resources\FoodsResource\Pages;

use App\Filament\Resources\FoodsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFoods extends CreateRecord
{
    protected static string $resource = FoodsResource::class;
}
