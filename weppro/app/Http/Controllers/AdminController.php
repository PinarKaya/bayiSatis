<?php

namespace App\Http\Controllers;
use App\Models\Firmalar;
use App\Models\Musteriler;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function get_index(){
    	return view('admin.index');
    }

    public function get_admin_firmalar(){
    	$data['firmalar_liste']=Firmalar::get();
    	return view('admin.admin_firmalar',$data);


    }



      public function get_firma_ekle(){
    	return view('admin.firma_ekle');
    }

    public function post_firma_ekle(Request $request){
    	Firmalar::create($request->all());
    }


    public function get_admin_musteriler(){
    	$data['musteriler_liste']=Musteriler::get();
    	return view('admin.admin_musteriler',$data);

    }
}

