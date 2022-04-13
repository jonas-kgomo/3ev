<?php

    namespace App\Http\Controllers;
    
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;

    class Users extends Controller
    {
       
      public function index()
        {
            // return DB::table('users')->get(); 
            // $data = DB::table('star_wars')->get();
            // pagination 
            $data = DB::table('star_wars')->paginate(4);
            return view('welcome', ['data' => $data]);
          
        }
      public function show()
        {
            return DB::table('users')->get();
            // return ("Hi there");
        }

        public function inventory()
        {
            return DB::table('star_wars')->get();
            // return ("Hi there");
        } 
    }
