<?php

Class Usermeta extends Eloquent{
	
	protected $table = 'users_meta';	
	public $timestamps = false;
	protected $fillable = array('meta_key', 'meta_value');

	public function user()
    {
        return $this->belongsTo('User');
    }

}


