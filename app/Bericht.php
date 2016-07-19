<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bericht extends Model
{
    protected $table = "berichten";
    public $timestamps = false;
    
    protected $fillable = ['title', 'text', 'date', 'next_id', 'previous_id'];
    protected $guarded = ['id'];
    
    /*
     * Foreign key relations
     */
    public function next() {
      return $this->hasOne('App\Bericht', 'next_id');
    }
    
    public function previous() {
      return $this->hasOne('App\Bericht', 'previous_id');
    }
    
}
