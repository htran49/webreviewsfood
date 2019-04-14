<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function Baiviet($unsigned_name){
        $baiviet='App\Post'::where ('baiviet_id',$unsigned_name)->get();
        $danhmuc=$baiviet[0]['danhmuc_id'];
        $baivietlq='App\Post'::where('danhmuc_id',$danhmuc)->limit(4)->get();
        return view('page.detail1')->with('databaiviet',$baiviet)->with('datalq',$baivietlq);
    }
    public function Baiviet1($unsigned_name){
        $baiviet='App\Post'::where ('baiviet_id',$unsigned_name)->get();
        $danhmuc=$baiviet[0]['danhmuc_id'];
        $baivietlq='App\Post'::where('danhmuc_id',$danhmuc)->limit(4)->get();
        return view('page.detail')->with('databaiviet',$baiviet)->with('datalq',$baivietlq);
    }


}
