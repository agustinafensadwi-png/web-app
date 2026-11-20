<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    // Definisikan nama tabel jika namanya tidak sesuai konvensi jamak Laravel (misal: tb_employe)
    protected $table = 'employes';

    // Definisikan primary key jika nama kolomnya bukan 'id'
    protected $primaryKey = 'id';

    // Definisikan tipe primary key jika bukan integer (misal: 'string')
    protected $keyType = 'int';
}