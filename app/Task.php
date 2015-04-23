<?php namespace l5;

use Illuminate\Database\Eloquent\Model;

class Task extends Model {

    public function project()
    {
        return $this->belongsTo('l5\Project');
    }
    protected $guarded = [];

}
