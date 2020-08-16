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
use Illuminate\Http\Request;

class StateController extends Controller
{
    const PROTECTED_ACTIONS = ['store', 'update', 'delete'];

    public function __construct()
    {
        $this->middleware('auth:api')->only(self::PROTECTED_ACTIONS);
        $this->middleware('role:Admin')->only(self::PROTECTED_ACTIONS);
    }

    public function lists(Country $country)
    {
        $states = State::where('country_id', $country->id)->orderBy('name', 'asc')->get();
        return StateResource::collection($states);
    }

    public function store(StoreRequest $request, Country $country)
    {
        $state = new State();
        $state->country_id = $country->id;
        $state->name = $request->name;
        $state->save();
        return new StateResource($state);
    }

    public function update(UpdateRequest $request, Country $country, State $state)
    {
        $state->name = $request->name;
        $state->save();
        return new StateResource($state);
    }

    public function delete(Country $country, State $state)
    {
        $state->delete();
        return $this->resourceDeleted();
    }
}
