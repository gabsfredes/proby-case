<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';
    protected $fillable = ['name', 'start_date', 'status', 'description', 'created_by'];

    // quando for consultado por api, nao mostrar created_by
    protected $hidden = ['created_by'];
}
