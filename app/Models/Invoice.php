<?php

namespace App\Models;

use Database\Factories\InvoiceFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * App\Models\Invoice
 *
 * @property int $id
 * @property int $customer_id
 * @property int $amount
 * @property string $status B - Billed, P - Paid, V - Void
 * @property string $billed_date
 * @property string|null $paid_date
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Customer|null $Customer
 * @method static InvoiceFactory factory($count = null, $state = [])
 * @method static Builder|Invoice newModelQuery()
 * @method static Builder|Invoice newQuery()
 * @method static Builder|Invoice query()
 * @mixin Eloquent
 */
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
