<?php

namespace App\Http\Controllers\Auth;
use App\Models\UsersTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;



class AuthController extends Controller
{
    public function registration(){
        return view('registration');
    }

    public function login(){
        return view('login');
    }
    function registerPost(Request $request)
    {
        $this->validate($request, [
            'user_name' => 'required|unique:users',
            'password' => 'required|min:6',
        ]);

       
        
       
        $data['user_name'] = $request->user_name;
        $data['password'] = Hash::make($request->password);
        $user = UsersTable::create($data);
        $user->save();

if ($user) {
            // Redirect to the login page if user was created successfully
            return redirect()->route('login')->with('success', 'User registered successfully! Please log in.');
        } else {
            // User creation failed, return with error message
            return back()->with('error', 'User registration failed. Please try again.');
        }

        
        
      
    }

    function loginPost(Request $request){

        $request->validate([
            'user_name' => 'required',
            'password' => 'required'
        
            ]);
        
            $credentials = $request->only('user_name', 'password');
            
            if (Auth::attempt($credentials)) {
                // Authentication was successful
                return redirect()->route('home');} 
                        else {
                // Authentication failed
                return back()->with('error', 'Invalid credentials. Please try again.');
            }
        }

        function logout(){
            Session::flush();
            Auth::logout();
        
        return redirect(route('login'));
        }
        
        
        
        
        
        
        

    

   
    


    

}