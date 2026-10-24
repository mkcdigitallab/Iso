<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Override;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'stock',
        'image_path',
        'type',
    ];

    protected function casts()
    {
        return [
            'price'=>'decimal:2',
            'stock'=>'integer',
        ];
    }
    
    public function orderItems():HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    public function isEsportJersey():bool
    {
        return $this->type === 'esport_jersey';
    }

    public function isClothing():bool
    {
        return $this->type==='clothing';
    }

    }
