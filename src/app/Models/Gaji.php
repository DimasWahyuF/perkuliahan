<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Gaji;

class Gaji extends Model
{
    protected $connection = "mysql"
    protected $fillable = ["jumlah_gaji","created_at","updated_at"]
}
