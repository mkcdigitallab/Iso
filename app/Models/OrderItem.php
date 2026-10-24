<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'price',
        'custom_data',
    ];

    protected function casts():array
    {
        return [
            'price'=>'decimal:2',
            'quantity'=>'integer',
            'custom_data'=>'array',
        ];
    }

    public function order():BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
    public function products():BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
