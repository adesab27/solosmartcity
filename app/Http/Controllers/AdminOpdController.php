<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminOpdController extends Controller
{
    public function index()
    {
        $data = DB::table('opdlink')->get();
        return view('admin.opdlink.index', ['data' => $data]);
    }

    public function add()
    {
        return view('admin.opdlink.add');
    }

    public function create(Request $request)
    {
        $title = $request->title;
        $image_url = $request->file("image_url");
        $url = $request->url;

        $add = DB::table('opdlink')->insert([
            'title' => $title,
            'image_url' =>  $image_url->getClientOriginalName(),
            'url' => $url
        ]);
        if ($add) {
            $tujuan_upload = 'data_file';
            $image_url->move($tujuan_upload, $image_url->getClientOriginalName());
            return redirect()->route('staff.indexOpdLink')
                ->with('success', 'Data berhasil ditambahkan!');
        } else {
            return redirect()->route('staff.indexOpdLink')
                ->with('failed', 'Data gagal ditambahkan!');
        }
    }

    public function edit($id)
    {
        $data = DB::table('opdlink')
            ->where('id', $id)
            ->first();
        return view('admin.opdlink.edit', ['data' => $data]);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $title = $request->title;
        $image_url = $request->file("image_url");
        $url = $request->url;
        if ($image_url == NULL) {
            $update = DB::table('opdlink')->where('id', $id)->update([
                'title' => $title,
                'url' => $url
            ]);
            return redirect()->route('staff.indexOpdLink')
                ->with('success', 'Data berhasil diupdate!');
        } else {
            $update = DB::table('opdlink')->where('id', $id)->update([
                'title' => $title,
                'image_url' =>  $image_url->getClientOriginalName(),
                'url' => $url
            ]);
            $tujuan_upload = 'data_file';
            $image_url->move($tujuan_upload, $image_url->getClientOriginalName());
            return redirect()->route('staff.indexOpdLink')
                ->with('success', 'Data berhasil diupdate!');
        }
    }

    public function delete($id)
    {
        $delete = DB::table('opdlink')->where('id', $id)->delete();
        return redirect()->route('staff.indexOpdLink')
            ->with('success', 'Data berhasil dihapus!');
    }
}
