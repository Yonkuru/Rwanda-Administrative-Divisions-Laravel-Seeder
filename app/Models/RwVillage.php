<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RwVillage extends Model
{
    use HasFactory;

    protected $table = 'rw_villages';
    protected $primaryKey = 'vlg_id';

    protected $fillable = [
        'vlg_cell', 'vlg_name'
    ];

    public function cell()
    {
        return $this->belongsTo(RwCell::class, 'vlg_cell', 'cel_id');
    }
}
