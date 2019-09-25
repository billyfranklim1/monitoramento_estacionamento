<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    protected $table = 'statusvaga';
    protected $fillable = ['vaga','bolsituacao'];
    protected $guarded = ['idStatus'];
}
