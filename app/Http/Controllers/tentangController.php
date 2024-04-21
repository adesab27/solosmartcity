<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Storage;

class tentangController extends Controller
{
    public function index()
    {
        return view('content/about');
    }
    public function linkFile()
    {
        $data = Produk::get();

        return view('admin/pages-tentang/d-tentang', compact('data'));
    }
    public function createFile()
    {
        return view('admin/pages-tentang/c-tentang');
    }

    public function storeFile(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'link' => 'required|mimes:pdf',
        ]);

        if ($validator->fails())
            return redirect()->back()->withInput()->withErrors($validator);

        

        $LinkTentang = $request->file('link');
        $filename = $LinkTentang->getClientOriginalName();
        $path = 'link-produk/' . $filename;

        Storage::disk('public')->put($path, file_get_contents($LinkTentang));
        $data['link'] = $filename;
        $data['nama'] = $request->Nama;

        Produk::create($data);

        return redirect()->route('staff.produk-tentang');
    }
    public function edit(Request $request,$id){
        $data = Produk::find($id);

        return view('admin/pages-tentang/e-tentang', compact('data'));
    }
    public function update(Request $request,$id){
        $data['nama'] = $request->Nama;

        Produk::whereId($id)->update($data);

        return redirect()->route('staff.produk-tentang');
    }
    public function deleteFile(Request $request,$id){
        $data = Produk::find($id);

        if($data){
            $data->delete();
        }

        return redirect()->route('staff.produk-tentang');
    }
}
