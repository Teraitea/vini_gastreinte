<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Astreinte extends Model
{
    protected $fillable = ['date_debut','date_fin','user_id','type_astreinte_id', 'durée', 'etat_id'];


    public function username() {
        return $this->belongsTo(User::class);
    }
}
