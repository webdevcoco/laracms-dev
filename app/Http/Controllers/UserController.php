<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // RAW DATABASE with Fixed Value
        // ---
        // DB::insert('insert into users(name,email,password) values (?,?,?)', [
        //     'jon',
        //     'jonathan.entila@oxygendigital.co.nz',
        //     'password'
        // ]);

        // $users = DB::select('select * from users');
        // return $users;

        // DB::update('update users set name = ? where id = 1', ['jonathan']);
        // DB::delete('delete from users where id=1');
        // ----

        // {raw database} with ELOQUENT db relations ORM object relations model
        // $user = new User(); // create an OBJECT
        // //dd($user); die dump clean view of details App\User Model
        // $user->name = 'jonie';
        // $user->email = 'jonathan.entila@oxygendigital.co.nz';
        // $user->password = bcrypt('password');
        // $user->save();

        //$user = User::all(); //no need to define new User() or use object new;
        // all() function is a static method
        // to display the User Details in DB.
        // If there is $hidden field in User.php it will not fetch in all() part.
        //return $user;
        // Delete part
        // User::where('id', 2)->delete();

        // User::where('id',3)->update(['name' => 'jon']);
        // update always use where with data =>

        // another way of inserting the data 
        $data = [
            'name' => 'Coco',
            'email' => 'jon@co.com',
            'password' => 'password', // this is automatically bcrypt by setPasswordAttribute in User.php this is call Accessor & Mutator
        ];
        User::create($data);
        
        

        return view('home');
    }
}
