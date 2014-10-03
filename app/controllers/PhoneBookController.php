<?php

class PhoneBookController extends BaseController
{


    public function index()
    {
        $adress = phonebook::where('published', '=', 1)
            ->paginate(5);
        $adressCat = categoryadress::all();

        return View::make('phonebook.index')->with(array('adress' => $adress, 'AdressCat' => $adressCat));
    }

    //category list

    public function cat($id)
    {
        $adress = phonebook::where('published', '=', 1)
            ->where('category_id', '=', $id)
            ->paginate(5);

        $adressCat = categoryadress::all();
        if (is_null($adress)) {
            return Redirect::route('phonebook.index');
        }

        //     $queries = DB::getQueryLog(); var_dump($queries);    die;

        return View::make('phonebook.index')->with(array('adress' => $adress, 'AdressCat' => $adressCat));

    }

    public function search()
    {

        $input = Input::get('search');
        $adress = phonebook::paginate(5);
        $adress = phonebook::where('published', '=', 1)
            ->where('name', 'LIKE', '%' . $input . '%')
            ->paginate(5);

        $adressCat = categoryadress::all();
        /*  $results = DB::table('phonebooks')
              ->where('name', 'LIKE', '%' . $input . '%')
              ->where('published', '=', 1)
              ->skip(5)
              ->take(5)
              ->get();
        */
        //  $queries = DB::getQueryLog(); var_dump($queries);die;
        return View::make('phonebook.index')->with(array('adress' => $adress, 'AdressCat' => $adressCat));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
	
		$adressCat = categoryadress::all();
        return View::make('phonebook.create')->with(array( 'AdressCat' => $adressCat));
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::all();
        $messages = array(
            'required' => 'The :attribute is really really really important.',
            'same' => 'The :others must match.'
        );

        $v = Validator::make($input, phonebook::$rules, $messages);

        // check if the validator failed -----------------------
        if ($v->fails()) {
            Input::flash(); //for -- input old message

            // get the error messages from the validator
            $messages = $v->messages();

            // redirect our user back to the form with the errors from the validator
            return Redirect::to('phonebook/create')
                ->withErrors($v);


        } else {
            // validation successful ---------------------------

            //  passed all tests!
            // let him enter the database

            // create the
            $phone = new Phonebook();
            $phone->name = Input::get('name');
            $phone->lastname = Input::get('lastname');
            $phone->phone = Input::get('phone');
            $phone->email = Input::get('email');
            $phone->notes = Input::get('notes');
			$phone->category_id = Input::get('category_id');
            $phone->user_id = Auth::user()->id;
            $phone->save();

            return Redirect::route('phonebook.index');

            // redirect ----------------------------------------
            // redirect our user back to the form so they can do it all over again
            return Redirect::back()->withErrors($v);

        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
		Input::flash(); //for -- input old message
        $phonebook = Phonebook::find($id);
		
       /* $queries = DB::getQueryLog();
        var_dump($queries);
        die;*/
        if (is_null($phonebook)) {
            return Redirect::route('phonebook.index');
        }

		$adressCat = categoryadress::all();
        return View::make('phonebook.edit')->with(array('phonebook'=> $phonebook, 'AdressCat' => $adressCat));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {

        Input::flash(); //for -- input old message
        $input = array_except(Input::all(), '_method');

        $messages = array(
            'required' => 'The :attribute is really really really important.',
            'same' => 'The :others must match.'
        );


        $v = Validator::make($input, phonebook::$rules, $messages);

        // check if the validator failed -----------------------
        if ($v->fails()) {

            // get the error messages from the validator
            $messages = $v->messages();

            // redirect our user back to the form with the errors from the validator
            return Redirect::to('phonebook/' . $id . '/edit')
                ->withErrors($v);
        } else {
            Phonebook::find($id)->update($input);
            return Redirect::route('phonebook.index');
        }

        return Redirect::back()->withErrors($v);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        Phonebook::find($id)->delete();
        return Redirect::route('phonebook.index');
    }


}