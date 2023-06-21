<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class helpGuide extends Model
{
    use HasFactory;
    protected $table='help_guides';
    protected $fillable=[
       'link',
       'description',

    ];
}
