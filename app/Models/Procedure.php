<?php

namespace App\Models;

class Procedure extends BaseModel
{
    public function procedure_details()
    {
        return $this->hasMany(ProcedureDetail::class);
    }
}
