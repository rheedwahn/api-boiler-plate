<?php

namespace App\Http\Middleware;

use App\Models\ApiLog;
use Closure;
use Illuminate\Support\Facades\Auth;
use DB;

class ApiLogger
{
     /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request);
    }

    public function terminate($request, $response)
    {

        try {
            DB::transaction(function() {
                $log = new ApiLog();
                $log->api_reference = uniqid().uniqid().uniqid();
                $log->request_method = request()->method();
                $log->request_url = request()->url();
                $log->request_header = json_encode(request()->header());
                $log->request_data = json_encode($request->getContent());
                $log->response_data = json_encode($response->getContent());
                $log->response_code = $response->status();
                $log->ip_address = $request->ip();
                $log->user_agent = $request->header('User-Agent');
                $log->user_id = Auth::user() ? Auth::user()->id : null;
                $log->save();
            }, env('DB_TRANSACTION_RETRIES') ?? 1); // Retries based on specified number of more times before failing completely  
        } catch (\Exception $e) {
            return 'Oops, something went wrong. '.$e->getMessage()
        }
        
    }
}
