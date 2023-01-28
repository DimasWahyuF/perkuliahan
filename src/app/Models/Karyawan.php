<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Karyawan;

class Karyawan extends Model
{
    protected $connection = "mysql"
    protected $fillable = ["nama_karyawan","umur","created_at","updated_at"]
}
