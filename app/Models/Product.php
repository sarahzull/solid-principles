<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    
    public function stock()
    {
        return $this->hasOne(Stock::class);
    }

    public function scopeInStock()
    {
        return $this->stock->quantity > 0;
    }

    public function scopeUpdateStock()
    {
        $this->stock()->update([
            'quantity'  => $this->stock->quantity - 1
        ]);
    }
}
