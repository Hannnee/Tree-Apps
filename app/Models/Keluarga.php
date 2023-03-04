<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    use HasFactory;

    protected $table    = 'Keluarga';
    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'orang_tua'
    ];

    public function getName()
    {
        return $this->belongsTo(Keluarga::class, 'orang_tua', 'id');
    }

    public function createdAt()
    {
        return Carbon::parse($this->created_at)->format('d F Y');
    }
}
