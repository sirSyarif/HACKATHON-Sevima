<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListRs extends Model
{
    protected $table = "rumah_sakit";

    protected $fillable = ['nama', 'alamat', 'provinsi'];
}
