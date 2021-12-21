<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authorization extends Model
{
    protected $table = 'authorizations';

    protected $fillable = [
        'user_id', 'organization_id', 'created_at', 'updated_at'
    ];
}
