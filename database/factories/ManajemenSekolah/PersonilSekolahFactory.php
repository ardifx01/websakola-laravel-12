<?php

namespace Database\Factories\ManajemenSekolah;

use App\Models\ManajemenSekolah\PersonilSekolah;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonilSekolahFactory extends Factory
{
    protected $model = PersonilSekolah::class;

    private static int $counter = 1; // counter untuk id_personil berurutan

    private function generateEmailFromName($name, $counter)
    {
        $email = strtolower($name);
        $email = preg_replace('/[^a-z0-9\s]/', '', $email);
        $email = preg_replace('/\s+/', '_', $email);

        // gunakan counter untuk jaga-jaga agar unik
        return $email . $counter . '@websakola.com';
    }

    public function definition(): array
    {
        // Jenis kelamin
        $gender = $this->faker->randomElement(['Laki-laki', 'Perempuan']);

        // Tanggal lahir
        $tanggalLahir = $this->faker->dateTimeBetween('-60 years', '-25 years');
        $tglLahirStr = $tanggalLahir->format('Ymd');

        // Tahun masuk kerja
        $tahunMasuk = ((int)$tanggalLahir->format('Y')) + rand(20, 25);
        $bulanMasuk = str_pad((string)rand(1, 12), 2, '0', STR_PAD_LEFT);
        $thnBulanMasuk = $tahunMasuk . $bulanMasuk;

        // Kode gender
        $kodeGender = $gender === 'Laki-laki' ? '1' : '2';

        // Nomor urut 3 digit random
        $nomorUrut = str_pad(rand(1, 999), 3, '0', STR_PAD_LEFT);

        // Format NIP
        $nip = $tglLahirStr . ' ' . $thnBulanMasuk . ' ' . $kodeGender . ' ' . $nomorUrut;

        // Nama lengkap
        $namaLengkap = $this->faker->name($gender === 'Laki-laki' ? 'male' : 'female');

        return [
            'id_personil'   => 'pgw_' . str_pad(self::$counter, 4, '0', STR_PAD_LEFT), // pgw_0001 dst
            'nip'           => $nip,
            'gelardepan'    => $this->faker->optional()->title(),
            'namalengkap'   => $namaLengkap,
            'gelarbelakang' => $this->faker->optional()->suffix(),
            'jeniskelamin'  => $gender,
            'jenispersonil' => $this->faker->randomElement(['Guru', 'Tata Usaha']),
            'tempatlahir'   => $this->faker->city(),
            'tanggallahir'  => $tanggalLahir->format('Y-m-d'),
            'agama'         => $this->faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha']),
            'kontak_email'  => $this->generateEmailFromName($namaLengkap, self::$counter),
            'kontak_hp'     => $this->faker->phoneNumber(),
            'photo'         => null,
            'aktif'         => $this->faker->randomElement(['Aktif', 'Pensiun']),
            'alamat_blok'   => $this->faker->streetName(),
            'alamat_nomor'  => $this->faker->buildingNumber(),
            'alamat_rt'     => $this->faker->numberBetween(1, 10),
            'alamat_rw'     => $this->faker->numberBetween(1, 10),
            'alamat_desa'   => $this->faker->citySuffix(),
            'alamat_kec'    => $this->faker->city(),
            'alamat_kab'    => $this->faker->city(),
            'alamat_prov'   => $this->faker->state(),
            'alamat_kodepos' => $this->faker->postcode(),
            'bg_profil'     => null,
            'motto_hidup'   => $this->faker->sentence(),
        ];

        // increment setelah return
        self::$counter++;
    }
}
