<?php

class Member extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'name'     => 'required',
    'lastname' => 'required',
    'email'    => 'required|email'
	];

	// Don't forget to fill this array
	protected $fillable = ['name', 'lastname', 'email'];

  public function tasks(){
    return $this->hasMany('Task');
  }

  public function completedTasks() {
    return $this->tasks->filter(function($task) {
      return $task->completed;
    });
  }

}