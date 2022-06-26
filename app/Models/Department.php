<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subject;

class Department extends Model
{
    use HasFactory;
    protected $fillable=['name'];

    public function department_has_subjects()
    {
        return $this->hasMany(Subject::class,'department_id','id');
    }

}
