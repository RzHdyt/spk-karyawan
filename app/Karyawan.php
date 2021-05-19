<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Karyawan extends Model
{
    use SoftDeletes;

    protected $table = 'karyawans';
    protected $fillable = [
        'nik',
        'name',
        'gender',
        'phone_number',
        'address',
        'religion',
        'status',
        'birthday',
        'dateIn',
        'dateOut',
    ];

    public function nilai()
    {
        return $this->hasMany('App\Penilaian', 'karyawan_id');
    }
}
