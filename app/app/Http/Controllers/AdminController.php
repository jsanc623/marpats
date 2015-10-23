<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;


class AdminController extends Controller{

    /**
     * Create a new controller instance.
     *
     * @return \App\Http\Controllers\AdminController
     */
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Show the admin control panel main page
     *
     * @return Response
     */
    public function index(){
        return view('vendor/admin/homepage')->with([

        ]);
    }

}