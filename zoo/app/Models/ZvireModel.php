<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZvireModel extends Model
{
    use HasFactory;

    protected $table = 'zvire';
    protected $primarKey = 'id';
}
