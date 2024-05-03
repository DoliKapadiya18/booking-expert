<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BookingProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bookingProduct = [
            [
                'booking_id'=>'1',
                'product_id'=>'1',
                'price'=>'50',
                'discount'=>'45',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'booking_id'=>'2',
                'product_id'=>'2',
                'price'=>'30',
                'discount'=>'28.5',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'booking_id'=>'3',
                'product_id'=>'3',
                'price'=>'25',
                'discount'=>'23.75',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        DB::table('booking_products')->insert($bookingProduct);
    }
}
