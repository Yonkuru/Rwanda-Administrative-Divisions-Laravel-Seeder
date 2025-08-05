<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RwCell extends Model
{
    use HasFactory;

    protected $table = 'rw_cells';
    protected $primaryKey = 'cel_id';

    protected $fillable = [
        'cel_sector', 'cel_name'
    ];

    public function sector()
    {
        return $this->belongsTo(RwSector::class, 'cel_sector', 'sct_id');
    }

    public function villages()
    {
        return $this->hasMany(RwCell::class, 'vlg_cell', 'cel_id');
    }
}
