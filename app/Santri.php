<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Santri extends Model
{
	use SoftDeletes;

    protected $table = 'santri';

    protected $fillable = ['nama','alamat','tgl_lahir','jenis_kelamin'];

    public $timestamps = false;

    protected $dates = ['deleted_at'];
}