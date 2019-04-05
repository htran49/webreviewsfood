<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //
    public function showhome(){
        $slide='App\Slide':: get();
        $postanuong='App\Post':: where('danhmuc_id','danhmuc_anuong')-> get();
        $postdulich='App\Post':: where('danhmuc_id','danhmuc_dulich')-> get();
        $postgiaitri='App\Post':: where('danhmuc_id','danhmuc_giaitri')-> get();
        return view('page.home')->with('dataslide',$slide)->with('datapostanuong',$postanuong)->with('datapostdulich',$postdulich)->with('datapostgiaitri',$postgiaitri);
    }

}