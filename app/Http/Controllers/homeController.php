<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //
    public function showhome(){
        $slide='App\Slide':: get();
        $postanuong='App\Post':: where('danhmuc_id','danhmuc_anuong')->limit(4)-> get();
        $postdulich='App\Post':: where('danhmuc_id','danhmuc_dulich')->limit(4)-> get();
        $postgiaitri='App\Post':: where('danhmuc_id','danhmuc_giaitri')-> limit(4)->get();
        $blog='App\Blog'::limit(4)->get();
        return view('page.home')->with('dataslide',$slide)->with('datapostanuong',$postanuong)->with('datapostdulich',$postdulich)->with('datapostgiaitri',$postgiaitri)->with('datablog',$blog);
    }
    public function Baiviet($unsigned_name){
        $baiviet='App\Post'::where ('baiviet_id',$unsigned_name)->get();
        $danhmuc=$baiviet[0]['danhmuc_id'];
        $baivietlq='App\Post'::where('danhmuc_id',$danhmuc)->limit(5)->get();
        return view('page.detail')->with('databaiviet',$baiviet)->with('datalq',$baivietlq);
    }

}