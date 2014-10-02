<?php

class CategoryController extends BaseController
{


    public function index()
    {

        $adressCat = categoryadress::paginate(5);

        if (is_null($adressCat)) {
            return Redirect::route('category.index');
        }
      //    $queries = DB::getQueryLog(); var_dump($queries);    die;

        return View::make('category.index')->with(array( 'AdressCat' => $adressCat));
    }


  

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('category.create');
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

        $v = Validator::make($input, categoryadress::$rules, $messages);

        // check if the validator failed -----------------------
        if ($v->fails()) {
            Input::flash(); //for -- input old message

            // get the error messages from the validator
            $messages = $v->messages();

            // redirect our user back to the form with the errors from the validator
            return Redirect::to('category/create')
                ->withErrors($v);


        } else {
            // validation successful ---------------------------

            //  passed all tests!
            // let him enter the database

            // create the
            $post = new categoryadress();
            $post->name = Input::get('name');

            $post->save();

            return Redirect::route('category.index');

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
        $category = categoryadress::find($id);
       /* $queries = DB::getQueryLog();
        var_dump($queries);
        die;*/
        if (is_null($category)) {
            return Redirect::route('category.index');
        }

        return View::make('category.edit')->with('category', $category);
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


        $v = Validator::make($input, categoryadress::$rules, $messages);

        // check if the validator failed -----------------------
        if ($v->fails()) {

            // get the error messages from the validator
            $messages = $v->messages();

            // redirect our user back to the form with the errors from the validator
            return Redirect::to('category/' . $id . '/edit')
                ->withErrors($v);
        } else {
            categoryadress::find($id)->update($input);
            return Redirect::route('category.index');
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
        categoryadress::find($id)->delete();
        return Redirect::route('category.index');
    }


}