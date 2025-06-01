<?php

namespace App\Http\Controllers;

use App\Models\member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
   public function showUsers()
   {
     $users = DB::table('members')->paginate(6);
     return view('users', ['users' => $users]);
    
   }

   public function ShowUser($id)
   {
    $user = DB::table('members')->find($id);
        if (!$user) {
        // User nahi mila, fallback ya 404 page dikhayein
        return abort(404); // Laravel ka 404 page ya apna custom page
    }
    $info = DB::table('information')->where('s_id',$id)->first();
    return view('user',["user"=>$user,'information'=>$info]);
   }

   public function create()
   {
      return view('register');
   }

   public function store(Request $request)
   {    

    $messages = [
    'phone.unique' => 'The phone number has already been taken.',
    // other custom messages...
];
        $request->validate([
          'name' => 'required|string|max:100',
          'email' => 'required|email|unique:members,email',
          'age' => 'required|integer|min:1|max:120',
          'city' => 'nullable|string|max:100',
          'phone_number' => 'required|digits:10|unique:members,phone_no',
          'photo' => 'nullable|image|max:2048',
        ]);

        $photoPath = null;

        if($request->hasFile('photo'))
        {
          $photoPath = $request->file('photo')->store('images/profiles','public');
        }

        //save user

        member::create([
          'name' => $request->name,
          'email' => $request->email,
          'age' =>$request->age,
          'city' => $request->city ?? 'No City',
          'phone_no' => $request->phone_number,
          'photo' => $photoPath,
        ]);

        return redirect()->route('users')->with('success','User registered successfully!');

   }
}
