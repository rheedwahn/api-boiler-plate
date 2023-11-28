<?php

namespace App\Http\Controllers\Api\Country;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Country\StoreRequest;
use App\Http\Requests\Api\Country\UpdateRequest;
use App\Http\Resources\Api\Country\CountryResource;
use App\Models\Country;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CountryController extends Controller
{
    const PROTECTED_ACTIONS = ['store', 'update', 'delete'];

    public function __construct()
    {
        $this->middleware('auth:api')->only(self::PROTECTED_ACTIONS);
        $this->middleware('role:Admin')->only(self::PROTECTED_ACTIONS);
    }

    /**
     * @return AnonymousResourceCollection
     */
    public function lists(): AnonymousResourceCollection
    {
        $countries = Country::orderNameByAsc()->get();
        return CountryResource::collection($countries);
    }

    /**
     * @param StoreRequest $request
     * @return CountryResource
     */
    public function store(StoreRequest $request): CountryResource
    {
        $country = new Country();
        $country->name = $request->name;
        $country->save();
        return new CountryResource($country);
    }

    /**
     * @param UpdateRequest $request
     * @param Country $country
     * @return CountryResource
     */
    public function update(UpdateRequest $request, Country $country): CountryResource
    {
        $country->name = $request->name;
        $country->save();
        return new CountryResource($country);
    }

    /**
     * @param Country $country
     * @return JsonResponse
     */
    public function delete(Country $country): JsonResponse
    {
        $country->delete();
        return $this->resourceDeleted();
    }
}
