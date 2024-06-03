<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;
    public $table = 'pendaftarans';
    protected $fillable = [
        'name',
        'tanggal_lahir',
        'usia',
        'keterangan',
        'jenis_kelamin',
        'nomer_hp',
        'alamat',
        'kategori',
        'khitan_id'
    ];

    public function anamneseMedis()
    {
        return $this->hasMany(Anamnese::class);
    }
    public function khitan()
    {
        return $this->belongsTo(Khitan::class, 'khitan_id', 'id');
    }
}
