<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'cpf', 'email'];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = Str::of($value)->trim()->ucfirst();
    }

    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = Str::of($value)->trim();
    }

    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }
}
