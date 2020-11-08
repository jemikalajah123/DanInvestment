<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    protected $table = 'investments';
    public $primaryKey = 'id';

    protected $fillable = [
        'amount',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
