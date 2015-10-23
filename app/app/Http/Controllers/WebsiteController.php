<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;


class WebsiteController extends Controller{

    /**
     * Create a new controller instance.
     *
     * @return \App\Http\Controllers\WebsiteController
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
        return view('vendor/website/homepage')->with([

        ]);
    }

}