<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musteriler extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table='musteriler';
    protected $fillable=['musteri_adi, musteri_adres, musteri_tel, musteri_aciklama, musteri_mail, musteri_sifre'];
}
