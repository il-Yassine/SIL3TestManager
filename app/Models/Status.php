<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'couleur'
    ];

    public function tasks()
    {
        return $this->belongsToMany(Task::class, 'status_task');
        // return $this->belongsToMany(Task::class, StatusTask::class);

    }


}
