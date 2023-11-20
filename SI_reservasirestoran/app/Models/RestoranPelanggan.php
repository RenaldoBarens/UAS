<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RestoranPelanggan extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'restoran_pelanggans';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nama_Cafe', 'Alamat', 'Rating', 'Tipe_Restoran', 'Jarak'];

    
}
