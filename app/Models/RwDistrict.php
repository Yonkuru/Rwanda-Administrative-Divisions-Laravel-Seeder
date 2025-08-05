<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RwDistrict extends Model
{
    use HasFactory;

    protected $primaryKey = 'dst_id';

    protected $fillable = [
        'dst_province',
        'dst_name'
    ];

    public function province()
    {
        return $this->belongsTo(RwProvince::class, 'dst_province', 'prv_id');
    }

    public function sectors()
    {
        return $this->hasMany(RwSector::class, 'sct_district', 'dst_id');
    }
}
