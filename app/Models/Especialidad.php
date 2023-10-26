<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    use HasFactory;
    protected $table="specialties";

    protected $fillable=["name"];


    //Tiene muchos estudiantes
    public function students()
    {
        return $this->hasMany(Student::class);
    }

}
