<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Invoice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // Use magic methods
        Customer::factory(30)->hasInvoices(35)->create();
        Customer::factory(80)->hasInvoices(10)->create();
        Customer::factory(50)->hasInvoices(15)->create();
        Customer::factory(8)->create();

//        OR
//        Customer::factory(30)->has(
//            Invoice::factory(35)
//        )->create();
//
//        Customer::factory(80)->has(
//            Invoice::factory(10)
//        )->create();
//
//        Customer::factory(50)->has(
//            Invoice::factory(15)
//        )->create();
//
//        Customer::factory(8)->create();
    }
}
