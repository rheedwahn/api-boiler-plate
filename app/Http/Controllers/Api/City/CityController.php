<?php

namespace App\Http\Controllers\Api\City;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\City\StoreRequest;
use App\Http\Requests\Api\City\UpdateRequest;
use App\Http\Resources\Api\State\CityResource;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;

class CityController extends Controller
{
    const PROTECTED_ACTIONS = ['store', 'update', 'delete'];

    public function __construct()
    {
        $this->middleware('auth:api')->only(self::PROTECTED_ACTIONS);
        $this->middleware('role:Admin')->only(self::PROTECTED_ACTIONS);
    }

    public function lists(Country $country, State $state)
    {
        $cities = City::where('state_id', $state->id)->orderBy('name', 'asc')->get();
        return CityResource::collection($cities);
    }

    public function store(StoreRequest $request, Country $country, State $state)
    {
        $city = new City();
        $city->name = $request->name;
        $city->state_id = $state->id;
        $city->save();
        return new CityResource($city);
    }

    public function update(UpdateRequest $request, Country $country, State $state, City $city)
    {
        $city->name = $request->name;
        $city->save();
        return new CityResource($city);
    }

    public function delete(Country $country, State $state, City $city)
    {
        $city->delete();
        return $this->resourceDeleted();
    }
}
