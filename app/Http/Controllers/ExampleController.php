<?php

namespace App\Http\Controllers;
use APP\User;
class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function myMethod($name){
        return response($name)
                ->header('name',$name)
                ->header('age','25')
                ->header('district','Satkhira');
    }
}
