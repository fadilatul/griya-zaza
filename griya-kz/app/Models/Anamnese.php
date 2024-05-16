<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anamnese extends Model
{
    use HasFactory;
    public $table = 'anamneses';
    protected $fillable = [
        'pasien_id',
        'tanggal_masuk',
        'poli_id',
        'tekanan_darah',
        'suhu_tubuh',
        'gejala',
        'diagnosa_id',
        'terapi'
    ];

    public function pasien()
    {
        return $this->belongsTo(Pendaftaran::class, 'pasien_id', 'id');
    }

    public function poli()
    {
        return $this->belongsTo(Poli::class, 'poli_id', 'id');
    }

    public function diagnosa()
    {
        return $this->belongsTo(Diagnosa::class, 'diagnosa_id', 'id');
    }
}
