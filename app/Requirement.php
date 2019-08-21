<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Requirement extends Model
{
    use SoftDeletes;

    protected $table = 'requirements';
    protected $primaryKey = 'id';
    protected $fillable = ['code', 'description', 'customer_dni', 'email', 'notified', 'processed', 'created_at'];
}
