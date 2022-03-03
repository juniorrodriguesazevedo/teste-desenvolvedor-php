<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id', 'product_id', 'date', 'status',
        'bar_code', 'the_amount', 'value_total'
    ];

    public function getDateFormattedAttribute()
    {
        return date('d/m/Y', strtotime($this->date));
    }

    public function getValueTotalFormattedAttribute()
    {
        return str_replace('.', ',', $this->value_total);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
