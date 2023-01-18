<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectLeader extends Model
{
    use HasFactory;
    protected $table = 'project_leader';
    protected $fillable = [
        'name',
        'email',
        'image',
    ];

    public function projectMonitoring()
    {
        return $this->hasMany(ProjectMonitoring::class, 'id_leader');
    }
}
