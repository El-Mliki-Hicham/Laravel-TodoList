<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $table = 'contacts';
    protected $fillable =  [ 'Nom', 'Prenom', 'Tele', 'Email'];
    public $timestamps = false;
}
