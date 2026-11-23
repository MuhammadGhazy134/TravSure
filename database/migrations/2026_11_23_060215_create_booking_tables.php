
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
        // 1. Perjalanan
        Schema::create('perjalanan', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->bigIncrements('id_perjalanan');
            $table->unsignedBigInteger('id_jadwal');
            $table->string('status_perjalanan', 50)
                ->default('belum_dimulai');

            $table->foreign('id_jadwal', 'fk_perjalanan_jadwal')
                ->references('id_jadwal')
                ->on('jadwal_travel')
                ->onUpdate('cascade');
        });

        // 2. Pemesanan Travel
        Schema::create('pemesanan_travel', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->bigIncrements('id_pemesanan');
            $table->string('kode_booking', 50);
            $table->unsignedBigInteger('id_akun_buyer');
            $table->unsignedBigInteger('id_penumpang');
            $table->unsignedBigInteger('id_jadwal');
            $table->unsignedBigInteger('id_kursi');
            $table->unsignedBigInteger('id_perjalanan')->nullable();
            $table->text('titik_jemput')->nullable();
            $table->text('titik_antar')->nullable();
            $table->text('catatan')->nullable();
            $table->decimal('total_harga', 12, 2);
            $table->string('status_pemesanan', 50)->default('pending');
            $table->dateTime('tanggal_pemesanan')->useCurrent();

            $table->unique('kode_booking', 'kode_booking');
            $table->index('id_akun_buyer', 'fk_pemesanan_buyer');
            $table->index('id_penumpang', 'fk_pemesanan_penumpang');
            $table->index('id_jadwal', 'fk_pemesanan_jadwal');
            $table->index('id_kursi', 'fk_pemesanan_kursi');
            $table->index('id_perjalanan', 'fk_pemesanan_perjalanan');
            $table->index('status_pemesanan', 'idx_pemesanan_status');

            $table->foreign('id_akun_buyer', 'fk_pemesanan_buyer')
                ->references('id_akun_buyer')
                ->on('akun_buyer')
                ->onUpdate('cascade');

            $table->foreign('id_penumpang', 'fk_pemesanan_penumpang')
                ->references('id_penumpang')
                ->on('penumpang')
                ->onUpdate('cascade');

            $table->foreign('id_jadwal', 'fk_pemesanan_jadwal')
                ->references('id_jadwal')
                ->on('jadwal_travel')
                ->onUpdate('cascade');

            $table->foreign('id_kursi', 'fk_pemesanan_kursi')
                ->references('id_kursi')
                ->on('kursi')
                ->onUpdate('cascade');

            $table->foreign('id_perjalanan', 'fk_pemesanan_perjalanan')
                ->references('id_perjalanan')
                ->on('perjalanan')
                ->onDelete('set null')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanan_travel');
        Schema::dropIfExists('perjalanan');
    }
};
