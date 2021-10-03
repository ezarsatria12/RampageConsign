<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\img_aset;
class imgController extends Controller
{
    public function show()
    {
        $data= img_aset::all();
        return view('home',['imgs'=>$data]);
    }
}
