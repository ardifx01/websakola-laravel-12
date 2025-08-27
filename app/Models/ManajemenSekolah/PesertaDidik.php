<?php

namespace App\Models\ManajemenSekolah;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesertaDidik extends Model
{
    use HasFactory;

    protected $table = 'peserta_didiks';

    protected $fillable = [
        'nis',
        'nisn',
        'thnajaran_masuk',
        'kode_kk',
        'nama_lengkap',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'agama',
        'status_dalam_kel',
        'anak_ke',
        'sekolah_asal',
        'diterima_kelas',
        'diterima_tanggal',
        'asalsiswa',
        'keterangan_pindah',
        'alamat_blok',
        'alamat_norumah',
        'alamat_rt',
        'alamat_rw',
        'alamat_desa',
        'alamat_kec',
        'alamat_kab',
        'alamat_kodepos',
        'kontak_telepon',
        'kontak_email',
        'foto',
        'status',
        'alasan_status',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'peserta_id');
    }
}
