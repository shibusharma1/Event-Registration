<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'description', 'date', 'max_participants'];

    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }

    public function registeredCount()
    {
        return $this->registrations()->count();
    }
}
