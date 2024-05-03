<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $booking = [
            [
                'user_id'=>'1',
                'paid_amount'=>'45',
                'discount_amount'=>'5',
                'total_amount'=>'50',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>'1',
                'paid_amount'=>'28.5',
                'discount_amount'=>'1.5',
                'total_amount'=>'30',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id'=>'1',
                'paid_amount'=>'23.75',
                'discount_amount'=>'1.25',
                'total_amount'=>'25',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];

        DB::table('bookings')->insert($booking);
    }
}
