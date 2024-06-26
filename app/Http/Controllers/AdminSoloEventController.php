<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminSoloEventController extends Controller
{
    public function index()
    {
        $data = DB::table('soloevent')->get();
        return view('admin.soloevent.index', ['data' => $data]);
    }


    public function add()
    {
        return view('admin.soloevent.add');
    }

    public function create(Request $request)
    {
        $title = $request->title;
        $start_periode = $request->start_periode;
        $end_periode = $request->end_periode;
        $location = $request->location;
        $description = $request->description;
        $image_url = $request->file("image_url");
        $is_galerysoloevent = $request->is_galerysoloevent ? 1 : 0;

        $add = DB::table('soloevent')->insert([
            'title' => $title,
            'start_periode' => $start_periode,
            'end_periode' => $end_periode,
            'location' => $location,
            'description' => $description,
            'image_url' =>  'eling_830' . date('Y-m-dH-i-s') . "." . $image_url->getClientOriginalExtension(),
            'is_galerysoloevent' => $is_galerysoloevent
        ]);

        if ($add) {
            $tujuan_upload = 'data_file';
            $image_url->move($tujuan_upload, 'eling_830' . date('Y-m-dH-i-s') . "." . $image_url->getClientOriginalExtension());
            return redirect()->route('staff.indexSoloEvent')
                ->with('success', 'Data berhasil ditambahkan!');
        } else {
            return redirect()->route('staff.indexSoloEvent')
                ->with('failed', 'Data gagal ditambahkan!');
        }
    }

    public function edit($id)
    {
        $data = DB::table('soloevent')
            ->where('id', $id)
            ->first();
        return view('admin.soloevent.edit', ['data' => $data]);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $title = $request->title;
        $start_periode = $request->start_periode;
        $end_periode = $request->end_periode;
        $location = $request->location;
        $description = $request->description;
        $image_url = $request->file("image_url");
        $is_galerysoloevent = $request->is_galerysoloevent ? 1 : 0;

        // Mengambil data file lama
        $old_image = DB::table('soloevent')->where('id', $id)->first();
        $old_image_name = $old_image->image_url;


        if ($image_url == NULL) {
            $update = DB::table('soloevent')->where('id', $id)->update([
                'title' => $title,
                'start_periode' => $start_periode,
                'end_periode' => $end_periode,
                'location' => $location,
                'description' => $description,
                'is_galerysoloevent' => $is_galerysoloevent
            ]);

            // Menghapus file lama jika ada
            if ($old_image_name) {
                unlink('data_file/' . $old_image_name);
            }

            return redirect()->route('indexSoloEvent')
                ->with('success', 'Data berhasil diupdate!');
        } else {
            $new_image_name = $image_url->getClientOriginalName();

            // Menghapus file lama jika ada
            if ($old_image_name) {
                unlink('data_file/' . $old_image_name);
            }

            // Memindahkan file baru dan menyimpan nama file baru ke dalam database
            $image_url->move('data_file', $new_image_name);

            $update = DB::table('soloevent')->where('id', $id)->update([
                'title' => $title,
                'start_periode' => $start_periode,
                'end_periode' => $end_periode,
                'location' => $location,
                'description' => $description,
                'image_url' =>  $image_url->getClientOriginalName(),
                'is_galerysoloevent' => $is_galerysoloevent
            ]);
            // $tujuan_upload = 'data_file';
            // $image_url->move($tujuan_upload, $image_url->getClientOriginalName());
            return redirect()->route('indexSoloEvent')
                ->with('success', 'Data berhasil diupdate!');
        }
    }
    public function delete($id)
    {
        $image_url = DB::table('soloevent')->where('id', $id)->first();
        $delete = DB::table('soloevent')->where('id', $id)->delete();
        unlink('data_file/' . $image_url->image_url);

        return redirect()->route('staff.indexSoloEvent')
            ->with('success', 'Data berhasil dihapus!');
    }
}
