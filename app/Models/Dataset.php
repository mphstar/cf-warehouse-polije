<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dataset extends Model
{
    use HasFactory;
    protected $table = 'ts_data'; // mendevinisikan nama table
    protected $primaryKey = 'id_data'; // mendevinisikan primary key
    public $incrementing = true; // auto pada primaryKey incremment true
    public $timestamps = true; // create_at dan update_at false

    // fillable mendevinisikan field mana saja yang dapat kita isikan
    protected $guarded = [];

    public function paper(){
        return $this->hasMany(Paper::class, 'id_data', 'id_data');
    }

    public function user(){
        return $this->hasOne(User::class, 'id_user', 'id_user');
    }
}
