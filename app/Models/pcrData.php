<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pcrData extends Model
{
    use HasFactory;
    protected $table='pcr_datas';
    protected $fillable=[
        'date',
        'pcr_count',
    ];
}
