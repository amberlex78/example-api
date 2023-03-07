<?php

namespace App\Models;

use Database\Factories\CustomerFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\Customer
 *
 * @property int $id
 * @property string $name
 * @property string $type I - Individual, B - Business
 * @property string $email
 * @property string $country
 * @property string $city
 * @property string $address
 * @property string $postal_code
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection<int, Invoice> $invoices
 * @property-read int|null $invoices_count
 * @method static CustomerFactory factory($count = null, $state = [])
 * @method static Builder|Customer newModelQuery()
 * @method static Builder|Customer newQuery()
 * @method static Builder|Customer query()
 * @mixin Eloquent
 */
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
