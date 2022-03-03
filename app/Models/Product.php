<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'price'];

    public function getPriceFormattedAttribute()
    {
        return str_replace('.', ',', $this->price);
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = Str::of($value)->trim()->ucfirst();
    }

    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }
}
