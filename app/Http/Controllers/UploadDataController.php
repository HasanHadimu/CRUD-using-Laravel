<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Personal;


class UploadDataController extends Controller
{
    public function index()
    {
        return view('uploadpage');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $data = new personal;

        if ($request->file('file')) {
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $request->file->move('storage', $filename);

            $data->file = $filename;
        }
        $data->nama = $request->nama;
        $data->email = $request->email;

        $data->save();
        return redirect(url('/'));
    }


    public function editpage($id)
    {
        $data = personal::find($id);
        return view('editpage', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = personal::find($id);

        if ($request->file('file')) {
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $request->file->move('storage', $filename);

            $data->file = $filename;
        }
        $data->nama = $request->nama;
        $data->email = $request->email;

        $data->save();
        return redirect(url('/'));
    }
}
