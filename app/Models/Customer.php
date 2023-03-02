<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasFactory;

    const TYPE_INDIVIDUAL = 'I';
    const TYPE_BUSINESS = 'B';

    protected $fillable = [
        'name',
        'type',
        'email',
        'country',
        'city',
        'address',
        'postal_code',
    ];

    public function invoices(): HasMany
    {
        return $this->hasMany(Invoice::class);
    }
}
