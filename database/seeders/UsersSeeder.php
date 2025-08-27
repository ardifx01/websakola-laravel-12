<?php

namespace Database\Seeders;

use App\Models\ManajemenSekolah\PersonilSekolah;
use App\Models\ManajemenSekolah\PesertaDidik;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        // === Kepala Sekolah (selalu aktif) ===
        PersonilSekolah::factory()->count(1)->state([
            'jenispersonil' => 'Kepala Sekolah',
            'aktif' => 'aktif',
        ])->create()->each(function ($personil) {
            $user = User::create([
                'name'        => $personil->namalengkap,
                'email'       => $personil->kontak_email ?? strtolower(str_replace(' ', '.', $personil->namalengkap)) . '@example.com',
                'password'    => Hash::make('password'),
                'personil_id' => $personil->id,
            ]);
            $user->assignRole('kepalasekolah');
        });

        // === Guru (88 total) ===
        $gurus = PersonilSekolah::factory()->count(88)->state([
            'jenispersonil' => 'Guru',
            'aktif' => 'aktif', // supaya master & admin bisa dipilih dari guru aktif
        ])->create();

        // Ambil 1 Guru jadi Master (aktif)
        $guruMaster = $gurus->shift();
        $guruMaster->update(['aktif' => 'aktif']);
        $userMaster = User::create([
            'name'        => $guruMaster->namalengkap,
            'email'       => $guruMaster->kontak_email ?? strtolower(str_replace(' ', '.', $guruMaster->namalengkap)) . '@example.com',
            'password'    => Hash::make('password'),
            'personil_id' => $guruMaster->id,
        ]);
        $userMaster->assignRole(['guru', 'master']);

        // Ambil 2 Guru jadi Admin (aktif)
        $guruAdmins = $gurus->splice(0, 2);
        foreach ($guruAdmins as $guru) {
            $guru->update(['aktif' => 'aktif']);
            $user = User::create([
                'name'        => $guru->namalengkap,
                'email'       => $guru->kontak_email ?? strtolower(str_replace(' ', '.', $guru->namalengkap)) . '@example.com',
                'password'    => Hash::make('password'),
                'personil_id' => $guru->id,
            ]);
            $user->assignRole(['guru', 'admin']);
        }

        // Sisanya tetap Guru
        foreach ($gurus as $guru) {
            $user = User::create([
                'name'        => $guru->namalengkap,
                'email'       => $guru->kontak_email ?? strtolower(str_replace(' ', '.', $guru->namalengkap)) . '@example.com',
                'password'    => Hash::make('password'),
                'personil_id' => $guru->id,
            ]);
            $user->assignRole('guru');
        }

        // === Tata Usaha (24 orang, status bisa random) ===
        PersonilSekolah::factory()->count(24)->state([
            'jenispersonil' => 'Tata Usaha',
        ])->create()->each(function ($personil) {
            $user = User::create([
                'name'        => $personil->namalengkap,
                'email'       => $personil->kontak_email ?? strtolower(str_replace(' ', '.', $personil->namalengkap)) . '@example.com',
                'password'    => Hash::make('password'),
                'personil_id' => $personil->id,
            ]);
            $user->assignRole('tatausaha');
        });

        // === Peserta Didik (150 siswa) ===
        PesertaDidik::factory()->count(150)->create()->each(function ($peserta) {
            $user = User::create([
                'name'        => $peserta->nama_lengkap,
                'email'       => $peserta->kontak_email ?? strtolower(str_replace(' ', '.', $peserta->nama_lengkap)) . '@example.com',
                'password'    => Hash::make('password'),
                'peserta_id'  => $peserta->id,
            ]);
            $user->assignRole('siswa');
        });
    }
}
