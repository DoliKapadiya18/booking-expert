<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\BookingProductExport;
use Maatwebsite\Excel\Facades\Excel;

class BookingProductReportController extends Controller
{
    public function reportPage()
    {
        return view('report');
    }

    public function export() 
    {
        return Excel::download(new BookingProductExport, 'booking_product.xlsx');
    }

}
