<?php

namespace App\Models;

class ProcedureDetail extends BaseModel
{
    public function procedure()
    {
        return $this->belongsTo(Procedure::class);
    }
}
