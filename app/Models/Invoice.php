<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Invoice extends Model
{
    use HasFactory;

    const STATUS_BILLED = 'B';
    const STATUS_PAID = 'P';
    const STATUS_VOID = 'V';

    public function Customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}
