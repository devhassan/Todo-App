<?php namespace l5;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {

    public function tasks()
    {
        return $this->hasMany('l5\Task');
    }
    protected $guarded = [];

}
