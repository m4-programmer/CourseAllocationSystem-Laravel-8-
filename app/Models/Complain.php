<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    use HasFactory;
    protected $fillable = [
    	'message',
    	'reciever_id'
    ];

     public function user()
    {
        return $this->belongsTo(User::class);
    }
}
