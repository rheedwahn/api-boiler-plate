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
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class LocalityController extends Controller
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
     * @param City $city
     * @return AnonymousResourceCollection
     */
    public function lists(Country $country, State $state, City $city): AnonymousResourceCollection
    {
        $localities = Locality::where('city_id', $city->id)->orderNameByAsc()->get();
        return LocalityResource::collection($localities);
    }

    /**
     * @param StoreRequest $request
     * @param Country $country
     * @param State $state
     * @param City $city
     * @return LocalityResource
     */
    public function store(StoreRequest $request, Country $country, State $state, City $city): LocalityResource
    {
        $locality = new Locality();
        $locality->city_id = $city->id;
        $locality->name = $request->name;
        $locality->save();
        return new LocalityResource($locality);
    }

    /**
     * @param UpdateRequest $request
     * @param Country $country
     * @param State $state
     * @param City $city
     * @param Locality $locality
     * @return LocalityResource
     */
    public function update(UpdateRequest $request, Country $country, State $state, City $city, Locality $locality): LocalityResource
    {
        $locality->name = $request->name;
        $locality->save();
        return new LocalityResource($locality);
    }

    /**
     * @param Country $country
     * @param State $state
     * @param City $city
     * @param Locality $locality
     * @return JsonResponse
     */
    public function delete(Country $country, State $state, City $city, Locality $locality): JsonResponse
    {
        $locality->delete();
        return $this->resourceDeleted();
    }
}
