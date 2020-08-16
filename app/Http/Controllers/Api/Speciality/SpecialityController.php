<?php

namespace App\Http\Controllers\Api\Speciality;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\Speciality\SpecialityResource;
use App\Models\Speciality;
use Illuminate\Http\Request;

class SpecialityController extends Controller
{
    public function lists()
    {
        $specialities = Speciality::orderNameByAsc()->get();
        return SpecialityResource::collection($specialities);
    }
}
