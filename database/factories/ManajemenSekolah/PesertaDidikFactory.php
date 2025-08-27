<?php

namespace Database\Factories\ManajemenSekolah;

use App\Models\ManajemenSekolah\PesertaDidik;
use Illuminate\Database\Eloquent\Factories\Factory;

class PesertaDidikFactory extends Factory
{
    protected $model = PesertaDidik::class;

    private static int $counter = 1; // counter untuk NIS berurutan

    private function generateEmailFromName($name, $counter)
    {
        $email = strtolower($name);
        $email = preg_replace('/[^a-z0-9\s]/', '', $email);
        $email = preg_replace('/\s+/', '_', $email);

        return $email . $counter . '@websakola.com';
    }

    public function definition(): array
    {
        // Jenis kelamin
        $gender = $this->faker->randomElement(['Laki-laki', 'Perempuan']);

        // Nama lengkap
        $namaLengkap = $this->faker->firstName($gender === 'Laki-laki' ? 'male' : 'female')
             . ' '
             . $this->faker->lastName();

        // Tanggal lahir siswa (7–18 tahun)
        $tanggalLahir = $this->faker->dateTimeBetween('-18 years', '-7 years');

        // Simpan counter dulu, baru increment
        $counterNow = self::$counter++;

        return [
            'nis'              => '2425' . str_pad($counterNow, 4, '0', STR_PAD_LEFT),
            'nisn'             => null,
            'thnajaran_masuk'  => '2025-2026',
            'kode_kk'          => null,
            'nama_lengkap'     => $namaLengkap,
            'tempat_lahir'     => $this->faker->city(),
            'tanggal_lahir'    => $tanggalLahir->format('Y-m-d'),
            'jenis_kelamin'    => $gender,
            'agama'            => $this->faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha']),
            'status_dalam_kel' => $this->faker->optional()->randomElement(['Anak Kandung', 'Anak Angkat']),
            'anak_ke'          => $this->faker->numberBetween(1, 5),
            'sekolah_asal'     => $this->faker->optional()->company(),
            'diterima_kelas'   => $this->faker->numberBetween(3, 10),
            'diterima_tanggal' => $this->faker->optional()->date(),
            'asalsiswa'        => $this->faker->optional()->city(),
            'keterangan_pindah' => $this->faker->optional()->sentence() ?? "-",
            'alamat_blok'      => $this->faker->streetName(),
            'alamat_norumah'   => $this->faker->buildingNumber(),
            'alamat_rt'        => $this->faker->numberBetween(1, 10),
            'alamat_rw'        => $this->faker->numberBetween(1, 10),
            'alamat_desa'      => $this->faker->citySuffix(),
            'alamat_kec'       => $this->faker->city(),
            'alamat_kab'       => $this->faker->city(),
            'alamat_kodepos'   => $this->faker->postcode(),
            'kontak_telepon'   => $this->faker->phoneNumber(),
            'kontak_email'     => $this->generateEmailFromName($namaLengkap, $counterNow),
            'foto'             => null,
            'status'           => 'Aktif',
            'alasan_status'    => null,
        ];
    }
}
