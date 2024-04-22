<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storage;
use Validator;

class tentangController extends Controller
{
    public function index()
    {
        $data = DB::table('prodhukum')->get();
        return view('content/about',['data' => $data]);
    }
}
