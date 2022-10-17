<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
        protected $table = 'home';
    protected $primaryKey = 'Id';
        public $timestamps = false;
}
