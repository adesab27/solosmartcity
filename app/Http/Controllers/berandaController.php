<?php

namespace App\Http\Controllers;

use App\Models\Opd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class berandaController extends Controller
{
    public function index(){
        return view('content/beranda');
    }

    public function WebOpd(){
        $data = Opd::get();

        return view('admin/pages-web/d-web', compact('data'));
    }
    public function create()
    {
        return view('admin/pages-web/c-web');
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'Nama'           => 'required',
            'Website'        => 'required',
        ]);

        if($validator->fails())
        return redirect() -> back()-> withInput() -> withErrors($validator);
        
        $data['nama']          = $request->Nama;
        $data['website']       = $request->Website;

        Opd::create($data);

        return redirect()->route('staff.website-dashboard');
    }
    public function edit(Request $request,$id){
        $data = Opd::find($id);

        return view('admin/pages-web/e-web', compact('data'));
    }
    public function update(Request $request,$id){
        $data['nama'] = $request->Nama;
        $data['website']       = $request->Website;

        Opd::whereId($id)->update($data);

        return redirect()->route('staff.website-dashboard');
    }
    public function delete(Request $request,$id){
        $data = Opd::find($id);

        if($data){
            $data->delete();
        }

        return redirect()->route('staff.website-dashboard');
    }
}
