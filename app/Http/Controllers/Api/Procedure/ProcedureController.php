<?php

namespace App\Http\Controllers\Api\Procedure;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\Procedure\ProcedureDetailsResource;
use App\Http\Resources\Api\Procedure\ProcedureResource;
use App\Models\Procedure;
use App\Models\ProcedureDetail;
use Illuminate\Http\Request;

class ProcedureController extends Controller
{
    public function lists()
    {
        $procedures = Procedure::orderNameByAsc()->get();
        return ProcedureResource::collection($procedures);
    }

    public function listDetails(Procedure $procedure)
    {
        $procedure_details = ProcedureDetail::where('procedure_id', $procedure->id)->orderNameByAsc()->get();
        return ProcedureDetailsResource::collection($procedure_details);
    }
}
