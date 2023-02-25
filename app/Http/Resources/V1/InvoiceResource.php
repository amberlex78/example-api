<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InvoiceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'customerId' => $this->customer_id,
            'amount' => $this->customer_id,
            'status' => $this->customer_id,
            'billedDate' => $this->billed_date,
            'paidDate' => $this->paid_date,
        ];
    }
}
