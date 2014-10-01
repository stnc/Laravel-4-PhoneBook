<?php

class HomeController extends BaseController
{

    /*
     |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |	Route::get('/', 'HomeController@showWelcome');
    |
    */




    public function index()
    {
        $adress = phonebook::orderBy('created_at', 'DESC')->paginate(4);
		$adressCat = categoryadress::all();
       /*
        $queries = DB::getQueryLog();
        var_dump($queries);
        die;
       */

      /*  return View::make('home.index',  array('adress' => $adress,'hakan'=>'veli' ));
        return View::make('home.index')->with('adress', $adress);*/
        // return View::make('home.index',  array('adress' => $adress,'hakan'=>'veli' ));
        return View::make('home.index')->with( array('adress' => $adress,'AdressCat' => $adressCat  ));
    }



}