<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use \App\feedback as feedbackEloquent;
use projectEloquent;

class feedback extends Model
{
    //

    protected $table ='feedback';
    public $timestamps = true;
    protected $fillable =[
        'projectNo',
        'feedbackName',
        'icon',
        'des',
        'price',
        'sentDate',
        'sentMethod'
        //'upperLimit'
        ];
    
    protected $visible =[
        'projectNo',
        'feedbackName',
        'icon',
        'des',
        'price',
        'sentDate',
        'sentMethod'
        //'upperLimit'
        ];
    public function project(){
        return $this->belongTo(projectEloquent::class);
    }
}
