<?php

namespace App;

#use Illuminate\Database\Eloquent\Model;
use \Esensi\Model\Model;

class Member extends Model
{
    protected $rules = [
        'first_name' => ['required'],
        'last_name' => ['required'],
        'address_1' => ['required'],
        'city' => ['required'],
        'state' => ['required', 'size:2'],
        'zip' => ['required',  'size:5','numeric'],
        'phone' => ['required','numeric','size:10'],
        'email' => ['required','email'],
        'member_type' => ['required','numeric','max:1'],
    ];
}
