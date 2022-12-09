<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\fault;
use App\Models\User;
use App\Models\Department;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/',function(){
    $faults=User::join('faults','faults.clientId','=','users.id')->get();
                       
        return [$faults];
});
Route::get('/dpts',function(){
    $faults= Department::all();
                       
        return [$faults];
});

Route::post('/store', function (Request $request)
    {
        $Department=$request->validate([
            'name'=>'required',
            'description'=>'required',
        ]);
        
        $Department['hod']=1;

        
        Department::create($Department);
   

    });
