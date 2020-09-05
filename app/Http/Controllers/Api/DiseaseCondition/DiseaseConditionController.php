<?php

namespace App\Http\Controllers\Api\DiseaseCondition;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\DiseaseCondition\DiseaseConditionResource;
use App\Models\DiseaseCondition;
use Illuminate\Http\Request;

class DiseaseConditionController extends Controller
{
    public function lists()
    {
        $disease_conditions = DiseaseCondition::orderNameByAsc()->get();
        return DiseaseConditionResource::collection($disease_conditions);
    }
}
