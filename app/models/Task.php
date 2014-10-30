<?php

class Task extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'title'      => 'required',
    'member_id'  => 'required',
    'start_date' => 'required',
    'end_date'   => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [
   'title',
   'description',
   'member_id',
   'start_date',
   'end_date',
   'hours',
   'completed'
  ];

  public function member(){
    return $this->belongsTo('Member');
  }

}