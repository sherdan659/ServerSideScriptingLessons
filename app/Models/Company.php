<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    //enable mass assigment
    protected $fillable = ['name', 'address','website','email'];


    public function contracts()
    {
        // Establishing 1 to many relationship with contact
        return $this ->hasMany(Contact::class); // company model has many contact"s"
    }
}
