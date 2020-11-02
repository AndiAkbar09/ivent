<?php

namespace App;

use Alfa6661\AutoNumber\AutoNumberTrait;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use AutoNumberTrait;

    protected $table = 'kegiatans';
    protected $guarded = [];

    public function getAutoNumberOptions()
    {
        return [
            'kode_kegiatan' => [
                'format' => function () {
                    return date('Y.m.d') . '/AB-EV/?'; 
                },
                'length' => 5 
            ]
        ];
    }
}
