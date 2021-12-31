<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    public function mod()
    {
        return $this->belongsTo(Mod::class);
    }
}
