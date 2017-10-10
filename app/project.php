<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use \App\project as projectEloquent;


class project extends Model
{
    protected $table ='project';
    public $timestamps = true;
    protected $fillable =[
        'projectName',
        'category',
        'title',
        'id',
        'introduction',
        'detail',
        'goals',
        'status',
        'begin_time',
        'end_time',
        'owner',
        'phone',
        'identity'
        ];

    public function project(){
        return $this->belongsTo(project::class);       
    }







}
