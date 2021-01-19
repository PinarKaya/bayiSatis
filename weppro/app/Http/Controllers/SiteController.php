<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
      public function get_index(){
    	return view('site.index');
    }
     public function get_musteri_kayit(){
    	return view('site.musteri_kayit');
    }

}
