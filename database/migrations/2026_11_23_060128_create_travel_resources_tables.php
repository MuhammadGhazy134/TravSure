
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
        // 1. Armada
        Schema::create('armada', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->bigIncrements('id_armada');
            $table->unsignedBigInteger('id_akun_seller');
            $table->string('nama_kendaraan', 150);
            $table->string('jenis_kendaraan', 100)->nullable();
            $table->string('plat_nomor', 20);
            $table->unsignedSmallInteger('kapasitas');
            $table->text('fasilitas')->nullable();

            $table->unique('plat_nomor', 'plat_nomor');

            $table->foreign('id_akun_seller', 'fk_armada_seller')
                ->references('id_akun_seller')
                ->on('akun_seller')
                ->onUpdate('cascade');
        });

        // 2. Driver
        Schema::create('driver', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->bigIncrements('id_driver');
            $table->unsignedBigInteger('id_akun_seller');
            $table->string('kode_driver', 50);
            $table->string('nama_driver', 150);
            $table->string('nomor_telepon', 25)->nullable();
            $table->decimal('rating', 3, 2)->unsigned()->nullable();
            $table->string('status_ketersediaan', 50)->default('tersedia');
            $table->string('lokasi_terkini', 255)->nullable();
            $table->string('masa_kerja', 100)->nullable();

            $table->unique('kode_driver', 'uq_driver_kode');

            $table->foreign('id_akun_seller', 'fk_driver_seller')
                ->references('id_akun_seller')
                ->on('akun_seller')
                ->onUpdate('cascade');
        });

        // 3. Jadwal Travel
        Schema::create('jadwal_travel', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->bigIncrements('id_jadwal');
            $table->unsignedBigInteger('id_akun_seller');
            $table->unsignedBigInteger('id_armada');
            $table->string('kota_asal', 100);
            $table->string('kota_tujuan', 100);
            $table->text('titik_keberangkatan')->nullable();
            $table->date('tanggal_berangkat');
            $table->time('jam_berangkat');
            $table->time('jam_tiba')->nullable();

            $table->index(
                ['tanggal_berangkat', 'kota_asal', 'kota_tujuan'],
                'idx_jadwal_tanggal_rute'
            );

            $table->foreign('id_akun_seller', 'fk_jadwal_seller')
                ->references('id_akun_seller')
                ->on('akun_seller')
                ->onUpdate('cascade');

            $table->foreign('id_armada', 'fk_jadwal_armada')
                ->references('id_armada')
                ->on('armada')
                ->onUpdate('cascade');
        });

        // 4. Kursi
        Schema::create('kursi', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->bigIncrements('id_kursi');
            $table->unsignedBigInteger('id_jadwal');
            $table->string('nomor_kursi', 10);
            $table->string('status_kursi', 40)->default('tersedia');

            $table->unique(
                ['id_jadwal', 'nomor_kursi'],
                'uq_kursi_per_jadwal'
            );

            $table->foreign('id_jadwal', 'fk_kursi_jadwal')
                ->references('id_jadwal')
                ->on('jadwal_travel')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kursi');
        Schema::dropIfExists('jadwal_travel');
        Schema::dropIfExists('driver');
        Schema::dropIfExists('armada');
    }
};
