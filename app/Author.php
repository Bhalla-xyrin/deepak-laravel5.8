<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Author extends Authenticatable
{
    use Notifiable;

    protected $guard = 'author';

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];


    //Mutator
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public static function store($request)
    {
        //save author
        $record = new Author();
        $record->fill($request->all());
        $record->type = "Author";
        $record->save();
    }
}
