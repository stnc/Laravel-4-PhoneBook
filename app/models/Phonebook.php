<?php

class Phonebook extends Eloquent
{
    protected $guarded = array();

    public static $rules = array(
		'category_id' => 'required|numeric',
        'name' => 'required',
        'lastname' => 'required',
        'email'            => 'required|email|unique:phonebooks',
        'phone' => 'required|numeric',
	
    );


    public function user()
    {

        return $this->belongsTo('User', 'user_id');

    }
}
