<?php

namespace Daydevelops\Vote\Models;

use Illuminate\Database\Eloquent\Model;
use Daydevelops\Vote\Events\VoterWeightChanged;

class Voter extends Model
{

    protected $table = "dd_voters";

    protected $fillable = ['user_id'];
    
}
