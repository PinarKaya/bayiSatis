<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Firmalar extends Model
{
	public $timestamps = false;
    use HasFactory;
    protected $table='firmalar';
    protected $fillable=['firma_adi, firma_adres, firma_tel, firma_aciklama, firma_mail, firma_sifre'];
    

}
