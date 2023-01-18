<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectMonitoring extends Model
{
    use HasFactory;

    protected $table = 'project_monitoring';
    protected $fillable = [
        'id_leader',
        'name',
        'client',
        'start_date',
        'end_date',
        'progress',
    ];

    protected $dates = [
        'start_date',
        'end_date',
        'created_at',
        'updated_at',
    ];

    public function projectLeader()
    {
        return $this->belongsTo(ProjectLeader::class, 'id_leader');
    }
}
