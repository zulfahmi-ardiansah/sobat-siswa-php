<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmTeacher extends Model
{
    use HasFactory;

    protected $table = "adm_teacher";
    
    public function admSchool ()
    {
        return AdmSchool::find($this->school_id);
    }
    
}
