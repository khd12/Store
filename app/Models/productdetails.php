<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cart;

class productdetails extends Model
{
    use HasFactory;

    public function Cards()
    {

        return $this->belongsTo(card::class, 'product_id', 'id');
    }
}