<?php

namespace App\Exports;

use App\Models\BookingProduct;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BookingProductExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return BookingProduct::query()->with(['product' => function ($query) {
            $query->select('product_name');
        }])->select('price','discount')->get();
    }

    public function headings(): array
    {
        return [
            'Product Name',
            'Price',
            'Discount'
        ];
    }
}
