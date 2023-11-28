<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show()
    {
        $data = personal::all();
        return view('home', compact('data'));
    }

    public function delete($id)
    {
        $data = personal::find($id);
        $data->delete();
        return redirect(url('/'));
    }
}
