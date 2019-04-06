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
        $blogdulich='App\Blog'::where('nhomblog_id','blog_dulich') ->get();
        $blogmeovat='App\Blog'::where('nhomblog_id','blog_meovat') ->get();
        $blogthoitrang='App\Blog'::where('nhomblog_id','blog_thoitrang') ->get();
        return view('page.home')->with('dataslide',$slide)->with('datapostanuong',$postanuong)->with('datapostdulich',$postdulich)->with('datapostgiaitri',$postgiaitri)->with('datablogdl',$blogdulich)->with('datablogmv',$blogmeovat)->with('datablogtt',$blogthoitrang);
    }

}