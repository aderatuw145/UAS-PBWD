<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;


    protected $fillable = [
        'room_id', 'name', 'admission_date', 'discharge_date'
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
