<?php

namespace App\Http\Controllers\Api\MedicalInsurance;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\MedicalInsurance\MedicalInsuranceResource;
use App\Models\MedicalInsurance;
use Illuminate\Http\Request;

class MedicalInsuranceController extends Controller
{
    public function lists()
    {
        $medical_insurances = MedicalInsurance::orderNameByAsc()->get();
        return MedicalInsuranceResource::collection($medical_insurances);
    }
}
