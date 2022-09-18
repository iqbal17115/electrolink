<?php

namespace App\Http\Livewire\Backend\Inventory;
use App\Models\Backend\Inventory\SaleInvoice;
use App\Models\Backend\Inventory\SaleInvoiceDetail;
use App\Models\Backend\Inventory\SalePayment;
use Livewire\Component;

class SaleList extends Component
{
    public function SaleDelete($invoiceId){
        SaleInvoice::whereId($invoiceId)->delete();
        SaleInvoiceDetail::whereSaleInvoiceId($invoiceId)->delete();
        SalePayment::whereSaleInvoiceId($invoiceId)->delete();

        $this->emit('success', [
            'text' => 'Sale Invoice Deleted Successfully',
        ]);
    }

    public function render()
    {
        return view('livewire.backend.inventory.sale-list');
    }
}
