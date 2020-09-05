<?php

namespace App\Http\Controllers\Api\Locality;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Locality\StoreRequest;
use App\Http\Requests\Api\Locality\UpdateRequest;
use App\Http\Resources\Api\State\LocalityResource;
use App\Models\City;
use App\Models\Country;
use App\Models\Locality;
use App\Models\State;
use Illuminate\Http\Request;

class LocalityController extends Controller
{
    const PROTECTED_ACTIONS = ['store', 'update', 'delete'];

    public function __construct()
    {
        $this->middleware('auth:api')->only(self::PROTECTED_ACTIONS);
        $this->middleware('role:Admin')->only(self::PROTECTED_ACTIONS);
    }

    public function lists(Country $country, State $state, City $city)
    {
        $localities = Locality::where('city_id', $city->id)->orderNameByAsc()->get();
        return LocalityResource::collection($localities);
    }

    public function store(StoreRequest $request, Country $country, State $state, City $city)
    {
        $locality = new Locality();
        $locality->city_id = $city->id;
        $locality->name = $request->name;
        $locality->save();
        return new LocalityResource($locality);
    }

    public function update(UpdateRequest $request, Country $country, State $state, City $city, Locality $locality)
    {
        $locality->name = $request->name;
        $locality->save();
        return new LocalityResource($locality);
    }

    public function delete(Country $country, State $state, City $city, Locality $locality)
    {
        $locality->delete();
        return $this->resourceDeleted();
    }
}
