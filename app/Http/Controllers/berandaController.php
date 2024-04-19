<?php

namespace App\Http\Controllers;

use App\Models\Dimensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Storage;

class berandaController extends Controller
{
    public function index(){
        $data = DB::table('opdlink')->get();
        return view('content/beranda', ['data' => $data]);
    }    
}
