<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;

class Subject extends Model
{
    use HasFactory;
    protected $fillable=['name','department_id'];

    public function department()
    {
        return $this->hasOne(Department::class,'id','department_id');
    }
}
