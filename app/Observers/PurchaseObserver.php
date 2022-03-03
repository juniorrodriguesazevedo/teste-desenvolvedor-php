<?php

namespace App\Observers;

use App\Models\Purchase;

class PurchaseObserver
{
    /**
     * Handle the Purchase "creating" event.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return void
     */
    public function creating(Purchase $purchase)
    {
        $purchase->value_total = $purchase->product->price * $purchase->the_amount;
    }

    /**
     * Handle the Purchase "updating" event.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return void
     */
    public function updating(Purchase $purchase)
    {
        $purchase->value_total = $purchase->product->price * $purchase->the_amount;
    }
}
