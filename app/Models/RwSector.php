<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RwSector extends Model
{
    use HasFactory;

    protected $table = 'rw_sectors';
    protected $primaryKey = 'sct_id';

    protected $fillable = [
        'sct_district', 'sct_name'
    ];

    public function district()
    {
        return $this->belongsTo(RwDistrict::class, 'sct_district', 'dst_id');
    }

    public function cells()
    {
        return $this->hasMany(RwCell::class, 'cel_sector', 'sct_id');
    }
}
