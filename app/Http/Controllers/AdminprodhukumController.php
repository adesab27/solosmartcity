<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdminprodhukumController extends Controller
{
    public function index()
    {
        $data = DB::table('prodhukum')->get();
        return view('admin.prodhukum.index', ['data' => $data]);
    }

    public function add()
    {
        return view('admin.prodhukum.add');
    }

    public function create(Request $request)
    {
        $title = $request->title;
        $file_url = $request->file("file_url");

        $add = DB::table('prodhukum')->insert([
            'title' => $title,
            'file_url' =>  $file_url->getClientOriginalName(),
        ]);
        if ($add) {
            $tujuan_upload = 'data_file';
            $file_url->move($tujuan_upload, $file_url->getClientOriginalName());
            return redirect()->route('indexProdHukum')
                ->with('success', 'Data berhasil ditambahkan!');
        } else {
            return redirect()->route('indexProdHukum')
                ->with('failed', 'Data gagal ditambahkan!');
        }
    }

    public function edit($id)
    {
        $data = DB::table('prodhukum')
            ->where('id', $id)
            ->first();
        return view('admin.prodhukum.edit', ['data' => $data]);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $title = $request->title;
        $file_url = $request->file("file_url");

        // Mengambil data file lama
        $old_file = DB::table('prodhukum')->where('id', $id)->first();
        $old_file_name = $old_file->file_url;


        if ($file_url == null) {
            $update = DB::table('prodhukum')->where('id', $id)->update([
                'title' => $title,
            ]);

            // Menghapus file lama jika ada
            if ($old_file_name) {
                unlink('data_file/' . $old_file_name);
            }

            return redirect()->route('staff.indexProdHukum')
                ->with('success', 'Data berhasil diupdate!');
        } else {
            $new_file_name = $file_url->getClientOriginalName();

            // Menghapus file lama jika ada
            if ($old_file_name) {
                unlink('data_file/' . $old_file_name);
            }

            // Memindahkan file baru dan menyimpan nama file baru ke dalam database
            $file_url->move('data_file', $new_file_name);

            $update = DB::table('prodhukum')->where('id', $id)->update([
                'title' => $title,
                'file_url' => $new_file_name,
            ]);
            // $tujuan_upload = 'data_file';
            // $file_url->move($tujuan_upload, $file_url->getClientOriginalName());
            return redirect()->route('staff.indexProdHukum')
                ->with('success', 'Data berhasil diupdate!');
        }
    }

    public function delete($id)
    {
        $file_url = DB::table('prodhukum')->where('id', $id)->first();
        $delete = DB::table('prodhukum')->where('id', $id)->delete();
        unlink('data_file/' . $file_url->file_url);

        return redirect()->route('staff.indexProdHukum')
            ->with('success', 'Data berhasil dihapus!');
    }
}
