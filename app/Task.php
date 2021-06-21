<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['name', 'description', 'priority', 'scheduled_date', 'duration_estimate', 'start_date', 'end_date'];
}
