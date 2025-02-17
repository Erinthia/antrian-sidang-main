<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;

    protected $table = 'customers';
    protected $primaryKey = 'customer_id';
    protected $fillable = [
        'nama',
        'email',
        'notlp',
        'jenis_sidang_id',
        'ktp',
        'kk',
        'user_id',
        'jadwal_sidang'
    ];

    public function jenis_sidang()
    {
        return $this->belongsTo(JenisSidang::class, 'jenis_sidang_id');
    }

    public function users()
    {
        return $this->belongsTo(JenisSidang::class, 'user_id');
    }
}
