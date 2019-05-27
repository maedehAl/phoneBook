<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ["fn","ln","mobile","phone","national_code","address","email"];
}
