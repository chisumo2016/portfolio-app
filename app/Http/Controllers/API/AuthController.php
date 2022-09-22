<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public  function  register(Request $request)
    {
        /**Validation*/
        $validator = Validator::make($request->all(),[
            'name'              => 'required',
            'email'             => 'required|email',
            'password'          => 'required',
            'confirm_password'  => 'required|same:password'
        ]);

        /** If Validator fail*/
        if ($validator->fails()){
            $response = [
                ' success' =>   false,
                 'message' =>   $validator->errors()
            ];

            return  response()->json($response, 400);
        }

        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);

        /**Success Token*/
        $success['token']  = $user->createToken('MyApp')->plainTextToken;
        $success['name']  = $user->name;

        $response = [
            'success' => true,
            'data'    => $success,
            'message'  => "User has been registered successfully"
        ];

        return  response()->json($response, 200);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse|void
     */
    public  function login(Request $request)
    {

        if (Auth::attempt(['email' => $request->email,'password' => $request->password])){
            //$user = Auth::user();
            $user = $request->user();


            /**Success Token*/
            $success['token']  = $user->createToken('MyApp')->plainTextToken;
            $success['name']  = $user->name;

            $response = [
                'success' => true,
                'data'    => $success,
                'message'  => "User has been login successfully"
            ];

            return  response()->json($response, 201);
        }

    }
}


