<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    public $timestamps = false;



    public function user()
    {
        return $this->belongsTo(User::class, 'useId');
    }

    public function project()
    {
        return $this->belongsTo(Project::class, 'projectId');
    }
}
