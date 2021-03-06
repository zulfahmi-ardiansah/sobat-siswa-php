<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmSubject extends Model
{
    use HasFactory;

    protected $table = "adm_subject";
    
    public function admClassGroup ()
    {
        return AdmClassGroup::find($this->group_id);
    }
}
