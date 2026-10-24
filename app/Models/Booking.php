<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_ud',
        'location_description',
        'dimensions',
        'requested_date',
        'status',
        'inspiration_path',
    ];

    protected function casts():array
    {
        return [
            'requested_date'=>'date'
        ];
    }

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
