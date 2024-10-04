<?php

namespace App\Filament\Resources\VentasResource\Pages;

use App\Filament\Resources\VentasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVentas extends EditRecord
{
    protected static string $resource = VentasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function afterSave(): void
    {
        // Llamamos al método realizarVenta después de editar una venta
        $this->record->realizarVenta();
    }
}
