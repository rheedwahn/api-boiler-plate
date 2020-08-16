<?php

namespace App\Http\Controllers\Api\Country;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Country\StoreRequest;
use App\Http\Requests\Api\Country\UpdateRequest;
use App\Http\Resources\Api\Country\CountryResource;
use App\Models\Country;

class CountryController extends Controller
{
    const PROTECTED_ACTIONS = ['store', 'update', 'delete'];

    public function __construct()
    {
        $this->middleware('auth:api')->only(self::PROTECTED_ACTIONS);
        $this->middleware('role:Admin')->only(self::PROTECTED_ACTIONS);
    }

    public function lists()
    {
        $countries = Country::orderNameByAsc()->get();
        return CountryResource::collection($countries);
    }

    public function store(StoreRequest $request)
    {
        $country = new Country();
        $country->name = $request->name;
        $country->save();
        return new CountryResource($country);
    }

    public function update(UpdateRequest $request, Country $country)
    {
        $country->name = $request->name;
        $country->save();
        return new CountryResource($country);
    }

    public function delete(Country $country)
    {
        $country->delete();
        return $this->resourceDeleted();
    }
}
