<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminInovasiController extends Controller
{
    public function index()
    {
        $datainovasi = DB::table('inovasi')
        ->orderBy('created_at', 'desc') // Menyortir berdasarkan waktu terbaru
        ->get();
        return view('admin.inovasi.index', ['datainovasi' => $datainovasi]);
    }

    public function add()
    {
        return view('admin.inovasi.add');
    }
    public function create(Request $request)
    {
        $inovasi_name = $request->inovasi_name;
        $image_url = $request->file("image_url");
        $add = DB::table('inovasi')->insert([
            'inovasi_name' => $inovasi_name,
            'image_url' =>  $image_url->getClientOriginalName(),
        ]);
        if ($add) {
            $tujuan_upload = 'data_file';
            $image_url->move($tujuan_upload, $image_url->getClientOriginalName());
            return redirect()->route('indexInovasi')
                ->with('success', 'Data berhasil ditambahkan!');
        } else {
            return redirect()->route('indexInovasi')
                ->with('failed', 'Data gagal ditambahkan!');
        }
    }

    public function edit($id)
    {
        $datainovasi = DB::table('inovasi')
            ->where('id_inovasi', $id)
            ->first();
        return view('admin.inovasi.edit', ['datainovasi' => $datainovasi]);
    }
    public function update(Request $request)
    {
        $id = $request->id_inovasi;
        $inovasi_name = $request->inovasi_name;
        $image_url = $request->file("image_url");

        // Mengambil data file lama
        $old_image = DB::table('inovasi')->where('id_inovasi', $id)->first();
        $old_image_name = $old_image->image_url;

        if ($image_url == NULL) {
            $update = DB::table('inovasi')->where('id_inovasi', $id)->update([
                'inovasi_name' => $inovasi_name,
            ]);

            // Menghapus file lama jika ada
            if ($old_image_name) {
                unlink('data_file/' . $old_image_name);
            }

            return redirect()->route('indexInovasi')
                ->with('success', 'Data berhasil diupdate!');
        } else {
            $new_image_name = $image_url->getClientOriginalName();

            // Menghapus file lama jika ada
            if ($old_image_name) {
                unlink('data_file/' . $old_image_name);
            }

            // Memindahkan file baru dan menyimpan nama file baru ke dalam database
            $image_url->move('data_file', $new_image_name);

            $update = DB::table('inovasi')->where('id', $id)->update([
                'inovasi_name' => $inovasi_name,
                'image_url' =>  $image_url->getClientOriginalName(),
            ]);
            return redirect()->route('indexInovasi')
                ->with('success', 'Data berhasil diupdate!');
        }
    }

    public function delete($id)
    {
        $image_url = DB::table('inovasi')->where('id_inovasi', $id)->first();
        $delete = DB::table('inovasi')->where('id_inovasi', $id)->delete();
        unlink('data_file/' . $image_url->image_url);

        return redirect()->route('indexInovasi')
            ->with('success', 'Data berhasil dihapus!');
    }
}
