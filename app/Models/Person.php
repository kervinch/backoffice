<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'people';

    protected $fillable = [
        'organization_id', 'phone', 'email', 'avatar', 'created_at', 'updated_at', 'created_by', 'updated_by'
    ];

    public function organization() {
        return $this->hasOne(Organization::class, 'id', 'organization_id');
    }
}
