<?php

Class PersonalInfo extends Eloquent{
	
	protected $table = 'personal_information';	
	public $timestamps = false;
	protected $fillable = array('cv');

	public function user()
    {
        return $this->belongsTo('User');
    }

}


