<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permit extends Model
{
    protected $table = 'permits';
    protected $fillable = [
        "CNT",
        "DST",
        "EMP",
        "FCH",
        "INI",
        "FIN",
        "OBS",
        "STA",
        "TPO",
        "FECADI1",
        "ID_DET",
        "TXTADI1",
        "TXTADI2",
        "TXTADI3",
        "TXTADI4"
    ];
}
