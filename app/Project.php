<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;

    protected $table = 'projects';

    protected $fillable = [
        'uuid',
        'customer_id',
        'requirement_confirmed_id',
        'team_id',
        'progress',
        'type_id',
        'name',
        'description',
        'customer_key',
        'live_url'
    ];
}
