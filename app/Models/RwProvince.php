<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RwProvince extends Model
{
    use HasFactory;
    protected $primaryKey = 'prv_id';

    protected $fillable = [
        'prv_name'
    ];

    public function districts()
    {
        return $this->hasMany(RwDistrict::class, 'dst_province', 'prv_id');
    }
}
