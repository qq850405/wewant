<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use \App\project as projectEloquent;
use feedbackEloquent;

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
        'pic_path',
        'goals',
        'status',
        'begin_time',
        'end_time',
        'owner',
        'phone',
        'identity'
        ];

    protected $visible =[
        'projectNo',
        'projectName',
        'category',
        'title',
        'id',
        'introduction',
        'detail',
        'pic_path',
        'goals',
        'status',
        'begin_time',
        'end_time',
        'owner',
        'phone',
        'identity'
        ];
    public function feedback(){
        return $this->hasMany('feedback');
    }





}
