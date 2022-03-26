<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subject extends Model
{

    protected $fillable = ['id', 'name'];

    public $timestamps = false;

    public function hours(): HasMany
    {
        return $this->hasMany(Hour::class);
    }
}