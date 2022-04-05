<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perjalanan extends Model
{
    protected $table = 'perjalanan';
    protected $fillable = ['tanggal','jam','lokasi','suhu_tubuh','user_id'];

    protected $primaryKey = 'id';
    
    public function user()
    {
        return $this->belongsTo(App\User);
    }
}
