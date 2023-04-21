<?php

namespace App\Http\Controllers;

use App\Models\Userregister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserRegisterController extends Controller
{
    /**
     * Show the registration form.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('register.userregister');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // dd($request);
        // $validator = Validator::make($request->all(), [
        //     'ID_User' => 'required|string|max:15|unique:users',
        //     'password' => 'required|string|min:8|confirmed',
        //     'fullname' => 'required|string|max:100',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'phone' => 'required|string|max:20',
        // ]);
    
        // if ($validator->fails()) {
        //     return redirect()
        //         ->route('userregister')
        //         ->withErrors($validator)
        //         ->withInput();
        // }
    
        $user = new Userregister();
        $user->password = Hash::make($request->password);
        $user->fullname = $request->fullname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        if($user->save()){
            print('save');
        }else{
            print('not');
        }
    
        return redirect()->route('userregister');
    }
    
}
