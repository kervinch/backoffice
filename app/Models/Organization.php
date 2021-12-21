<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $table = 'organizations';

    protected $fillable = [
        'name', 'phone', 'email', 'website', 'logo', 'created_at', 'updated_at', 'created_by', 'updated_by'
    ];

    public function person() {
        return $this->hasMany(Person::class, 'organization_id');
    }
}
