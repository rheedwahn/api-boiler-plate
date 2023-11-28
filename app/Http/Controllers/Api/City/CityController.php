<?php

namespace App\Http\Controllers\Api\City;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\City\StoreRequest;
use App\Http\Requests\Api\City\UpdateRequest;
use App\Http\Resources\Api\State\CityResource;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CityController extends Controller
{
    const PROTECTED_ACTIONS = ['store', 'update', 'delete'];

    public function __construct()
    {
        $this->middleware('auth:api')->only(self::PROTECTED_ACTIONS);
        $this->middleware('role:Admin')->only(self::PROTECTED_ACTIONS);
    }

    /**
     * @param Country $country
     * @param State $state
     * @return AnonymousResourceCollection
     */
    public function lists(Country $country, State $state): AnonymousResourceCollection
    {
        $cities = City::where('state_id', $state->id)->orderNameByAsc()->get();
        return CityResource::collection($cities);
    }

    /**
     * @param StoreRequest $request
     * @param Country $country
     * @param State $state
     * @return CityResource
     */
    public function store(StoreRequest $request, Country $country, State $state): CityResource
    {
        $city = new City();
        $city->name = $request->name;
        $city->state_id = $state->id;
        $city->save();
        return new CityResource($city);
    }

    /**
     * @param UpdateRequest $request
     * @param Country $country
     * @param State $state
     * @param City $city
     * @return CityResource
     */
    public function update(UpdateRequest $request, Country $country, State $state, City $city): CityResource
    {
        $city->name = $request->name;
        $city->save();
        return new CityResource($city);
    }

    /**
     * @param Country $country
     * @param State $state
     * @param City $city
     * @return JsonResponse
     */
    public function delete(Country $country, State $state, City $city): JsonResponse
    {
        $city->delete();
        return $this->resourceDeleted();
    }
}
