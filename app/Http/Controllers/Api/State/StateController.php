<?php

namespace App\Http\Controllers\Api\State;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\State\StoreRequest;
use App\Http\Requests\Api\State\UpdateRequest;
use App\Http\Resources\Api\State\CityResource;
use App\Http\Resources\Api\State\LocalityResource;
use App\Http\Resources\Api\State\StateResource;
use App\Models\City;
use App\Models\Country;
use App\Models\Locality;
use App\Models\State;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class StateController extends Controller
{
    const PROTECTED_ACTIONS = ['store', 'update', 'delete'];

    public function __construct()
    {
        $this->middleware('auth:api')->only(self::PROTECTED_ACTIONS);
        $this->middleware('role:Admin')->only(self::PROTECTED_ACTIONS);
    }

    /**
     * @param Country $country
     * @return AnonymousResourceCollection
     */
    public function lists(Country $country): AnonymousResourceCollection
    {
        $states = State::where('country_id', $country->id)->orderNameByAsc()->get();
        return StateResource::collection($states);
    }

    /**
     * @param StoreRequest $request
     * @param Country $country
     * @return StateResource
     */
    public function store(StoreRequest $request, Country $country): StateResource
    {
        $state = new State();
        $state->country_id = $country->id;
        $state->name = $request->name;
        $state->save();
        return new StateResource($state);
    }

    /**
     * @param UpdateRequest $request
     * @param Country $country
     * @param State $state
     * @return StateResource
     */
    public function update(UpdateRequest $request, Country $country, State $state): StateResource
    {
        $state->name = $request->name;
        $state->save();
        return new StateResource($state);
    }

    /**
     * @param Country $country
     * @param State $state
     * @return JsonResponse
     */
    public function delete(Country $country, State $state): JsonResponse
    {
        $state->delete();
        return $this->resourceDeleted();
    }
}
