<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'email', 'address'];

    //Establish a one to many relationship to company
    public function contacts()
    {
        return $this->belongsTo(Contact::class); // multiple contacts can be in 1 company
    }

}
