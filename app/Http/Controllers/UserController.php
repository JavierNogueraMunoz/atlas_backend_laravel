<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Users\UserGetUidOrEmailRequest;
use App\Http\Requests\Users\UserSaveRequest;
use App\Models\User;

class UserController extends Controller
{
    public function getUserUidOrEmail(Request $request){
        $param = explode("=",$request->uid);
        if($param[0] === 'dni'){
            return User::where('dni',$param[1])->get(); 
        }
        return User::where('email',$param[1])->get(); 
    }
    public function saveUser(Request $request){
        $user = User::where('dni',$request->dni)->get();
        if(sizeof($user)>0){
            $user = $this->dataUpdateUser($request);
           return User::where('dni',$request->dni)->update($user);
        }
        $user = $this->dataSaveUser($request);
        return User::create($user);
    }
    private function dataSaveUser($request){
        return [
            'dni' => $request->dni,
            'email' => $request->email,
            'name' => $request->name,
            'newsletter' => $request->newsletter,
            'captation' => $request->captation ,
            'address' => $request->address ,
            'postal_code' => $request->postal_code,
            'city' => $request->city,
            'region' => $request->region ,
            'country' => $request->country ,
            'observation' => $request->observation ,
        ];
    }
    private function dataUpdateUser($request){
        return [
            'dni' => $request->dni,
            'email' => $request->email,
            'name' => $request->name,
            'newsletter' => $request->newsletter,
            'captation' => $request->captation,
            'address' => $request->address,
            'postal_code' => $request->postal_code,
            'city' => $request->city,
            'region' => $request->region,
            'country' => $request->country,
            'observation' => $request->observation,
        ];
    }
}
