<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\User;
  
class UserController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create()
    {
        $input = [
            'name' => 'Hardik',
            'email' => 'hardik2@gmail.com',
            'password' => bcrypt('123456'),
            'date_of_birth' => '07/21/1994'
        ];
  
        $user = User::create($input);
   
        dd($user);
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function show()
    {
        $user = User::first();
  
        dd($user->toArray());
    }
}