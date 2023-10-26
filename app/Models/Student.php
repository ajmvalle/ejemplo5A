<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable= [
        'no_control',
        'name',
        'lastname',
        'group',
        'specialty_id'
    ];

    protected $appends = ['full_name'];


    public function especialidad()
    {
        return $this->belongsTo(Especialidad::class, 'specialty_id');
    }

    //Nombre completo
    public function getFullNameAttribute()
    {
        return "{$this->lastname} {$this->name}";
    }

}
