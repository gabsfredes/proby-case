<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $fillable = ['name', 'start_date', 'status', 'description', 'created_by'];
}
