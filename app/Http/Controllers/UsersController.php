<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\UserStoreRequest;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function store(UserStoreRequest $request)
    {
     	$validatorFails = $request->validator ?? false;
        if($validatorFails){

            return response()->json($validatorFails->errors(), 400);
        }

        $user = $this->create($request->all());
        $credentials = $request->only('email', 'password');
        return response()->json($user, 201);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');	
        if(Auth::attempt($credentials)) {
          return  response()->json(['User Login Sucessful'], 200);
        }

        return response()->json(['Please make sure your login credentials are correct'], 401);


    }

    protected function create(array $data)
    {
        
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);


    }


}
