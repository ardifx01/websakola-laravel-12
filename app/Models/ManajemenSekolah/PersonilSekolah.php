<?php

namespace App\Models\ManajemenSekolah;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonilSekolah extends Model
{
    use HasFactory;

    protected $table = 'personil_sekolahs';

    protected $fillable = [
        'id_personil',
        'nip',
        'gelardepan',
        'namalengkap',
        'gelarbelakang',
        'jeniskelamin',
        'jenispersonil',
        'tempatlahir',
        'tanggallahir',
        'agama',
        'kontak_email',
        'kontak_hp',
        'photo',
        'aktif',
        'alamat_blok',
        'alamat_nomor',
        'alamat_rt',
        'alamat_rw',
        'alamat_desa',
        'alamat_kec',
        'alamat_kab',
        'alamat_prov',
        'alamat_kodepos',
        'bg_profil',
        'motto_hidup',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'personil_id');
    }
}
