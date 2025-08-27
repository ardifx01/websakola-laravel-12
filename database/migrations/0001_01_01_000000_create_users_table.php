<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });

        Schema::create('personil_sekolahs', function (Blueprint $table) {
            $table->id();
            $table->char('id_personil')->index('id_personil');
            $table->char('nip')->nullable();
            $table->string('gelardepan')->nullable();
            $table->string('namalengkap');
            $table->string('gelarbelakang')->nullable();
            $table->enum('jeniskelamin', ['Laki-laki', 'Perempuan'])->nullable();
            $table->enum('jenispersonil', ['Kepala Sekolah', 'Guru', 'Tata Usaha'])->nullable();
            $table->string('tempatlahir')->nullable();
            $table->date('tanggallahir')->nullable();
            $table->string('agama')->nullable();
            $table->string('kontak_email')->nullable();
            $table->string('kontak_hp')->nullable();
            $table->string('photo')->nullable();
            $table->enum('aktif', ['Aktif', 'Pensiun', 'Keluar', 'Pindah'])->nullable();
            $table->string('alamat_blok')->nullable();
            $table->string('alamat_nomor')->nullable();
            $table->string('alamat_rt')->nullable();
            $table->string('alamat_rw')->nullable();
            $table->string('alamat_desa')->nullable();
            $table->string('alamat_kec')->nullable();
            $table->string('alamat_kab')->nullable();
            $table->string('alamat_prov')->nullable();
            $table->string('alamat_kodepos')->nullable();
            $table->string('bg_profil')->nullable(); // Background profil
            $table->string('motto_hidup')->nullable(); // Motto hidup
            $table->timestamps();
        });

        Schema::create('peserta_didiks', function (Blueprint $table) {
            $table->id();
            $table->char('nis')->index('nis');
            $table->char('nisn', 15)->nullable();
            $table->char('thnajaran_masuk')->nullable();
            $table->char('kode_kk')->nullable();
            $table->string('nama_lengkap');
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->char('jenis_kelamin')->nullable();
            $table->string('agama')->nullable();
            $table->char('status_dalam_kel')->nullable();
            $table->integer('anak_ke')->nullable();
            $table->string('sekolah_asal')->nullable();
            $table->integer('diterima_kelas')->nullable();
            $table->date('diterima_tanggal')->nullable();
            $table->char('asalsiswa')->nullable();
            $table->string('keterangan_pindah')->nullable();
            $table->string('alamat_blok')->nullable();
            $table->char('alamat_norumah')->nullable();
            $table->char('alamat_rt')->nullable();
            $table->char('alamat_rw')->nullable();
            $table->string('alamat_desa')->nullable();
            $table->string('alamat_kec')->nullable();
            $table->string('alamat_kab')->nullable();
            $table->char('alamat_kodepos')->nullable();
            $table->char('kontak_telepon')->nullable();
            $table->char('kontak_email')->nullable();
            $table->string('foto')->nullable();
            $table->char('status')->nullable();
            $table->string('alasan_status')->nullable();
            $table->timestamps();
        });


        // Foreign key setelah tabel personil & peserta dibuat
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('personil_id')
                ->unique()
                ->nullable()
                ->constrained('personil_sekolahs')
                ->onDelete('cascade');

            $table->foreignId('peserta_id')
                ->unique()
                ->nullable()
                ->constrained('peserta_didiks')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // hapus foreign key dulu
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['personil_id']);
            $table->dropForeign(['peserta_id']);
        });

        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('personil_sekolahs');
        Schema::dropIfExists('peserta_didiks');
    }
};
