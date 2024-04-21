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

        // Mengambil data file lama
        $old_image = DB::table('opdlink')->where('id', $id)->first();
        $old_image_name = $old_image->image_url;

        if ($image_url == NULL) {
            $update = DB::table('opdlink')->where('id', $id)->update([
                'title' => $title,
                'url' => $url
            ]);
<<<<<<< HEAD
            return redirect()->route('staff.indexOpdLink')
=======

            // Menghapus file lama jika ada
            if ($old_image_name) {
                unlink('data_file/' . $old_image_name);
            }

            return redirect()->route('indexOpdLink')
>>>>>>> c2e203e32842ec8ab14e5a993d61a9a901b358f2
                ->with('success', 'Data berhasil diupdate!');
        } else {
            $new_image_name = $image_url->getClientOriginalName();

            // Menghapus file lama jika ada
            if ($old_image_name) {
                unlink('data_file/' . $old_image_name);
            }

            // Memindahkan file baru dan menyimpan nama file baru ke dalam database
            $image_url->move('data_file', $new_image_name);

            $update = DB::table('opdlink')->where('id', $id)->update([
                'title' => $title,
                'image_url' =>  $image_url->getClientOriginalName(),
                'url' => $url
            ]);
<<<<<<< HEAD
            $tujuan_upload = 'data_file';
            $image_url->move($tujuan_upload, $image_url->getClientOriginalName());
            return redirect()->route('staff.indexOpdLink')
=======
            // $tujuan_upload = 'data_file';
            // $image_url->move($tujuan_upload, $image_url->getClientOriginalName());
            return redirect()->route('indexOpdLink')
>>>>>>> c2e203e32842ec8ab14e5a993d61a9a901b358f2
                ->with('success', 'Data berhasil diupdate!');
        }
    }

    public function delete($id)
    {
        $image_url = DB::table('opdlink')->where('id', $id)->first();
        $delete = DB::table('opdlink')->where('id', $id)->delete();
<<<<<<< HEAD
        return redirect()->route('staff.indexOpdLink')
=======
        unlink('data_file/' . $image_url->image_url);

        return redirect()->route('indexOpdLink')
>>>>>>> c2e203e32842ec8ab14e5a993d61a9a901b358f2
            ->with('success', 'Data berhasil dihapus!');
    }
}
