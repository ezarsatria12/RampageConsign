<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Img_asset;
use App\Models\Img_asset as modelImg_Asset;
use Image;


class Img_assetController extends Controller
{   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index()
    {
        return view('home', compact('image'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    function show()
    {
     $image = modelImg_Asset::all();
     return view('home', compact('image'));
    }

}
