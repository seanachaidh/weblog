<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bericht extends Model
{
    protected $table = "berichten";
    public $timestamps = false;
    
    protected $fillable = ['title', 'text', 'date', 'next_id', 'previous_id'];
    protected $guarded = ['id'];
}
