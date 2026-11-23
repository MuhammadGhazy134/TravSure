
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
        // 1. Pembayaran
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->bigIncrements('id_pembayaran');
            $table->unsignedBigInteger('id_pemesanan');
            $table->string('metode_pembayaran', 100);
            $table->decimal('harga_tiket', 12, 2);
            $table->decimal('biaya_layanan', 12, 2)->default(0.00);
            $table->decimal('total_pembayaran', 12, 2);
            $table->string('status_pembayaran', 50)->default('pending');
            $table->dateTime('waktu_pembayaran')->nullable();

            $table->foreign('id_pemesanan', 'fk_pembayaran_pemesanan')
                ->references('id_pemesanan')
                ->on('pemesanan_travel')
                ->onUpdate('cascade');
        });

        // 2. Pengajuan Reschedule
        Schema::create('pengajuan_reschedule', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->bigIncrements('id_reschedule');
            $table->unsignedBigInteger('id_akun_buyer');
            $table->unsignedBigInteger('id_pemesanan');
            $table->unsignedBigInteger('id_jadwal_baru');
            $table->date('tanggal_baru');
            $table->time('jam_baru');
            $table->text('alasan');
            $table->decimal('biaya_tambahan', 12, 2)->default(0.00);

            $table->foreign('id_akun_buyer', 'fk_reschedule_buyer')
                ->references('id_akun_buyer')
                ->on('akun_buyer')
                ->onUpdate('cascade');

            $table->foreign('id_pemesanan', 'fk_reschedule_pemesanan')
                ->references('id_pemesanan')
                ->on('pemesanan_travel')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_jadwal_baru', 'fk_reschedule_jadwal_baru')
                ->references('id_jadwal')
                ->on('jadwal_travel')
                ->onUpdate('cascade');
        });

        // 3. Assignment Pesanan
        Schema::create('assignment_pesanan', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->bigIncrements('id_assignment');
            $table->unsignedBigInteger('id_pemesanan');
            $table->unsignedBigInteger('id_driver');
            $table->string('status_assignment', 50)->default('ditugaskan');
            $table->dateTime('tanggal_assignment')->useCurrent();

            $table->foreign('id_pemesanan', 'fk_assignment_pemesanan')
                ->references('id_pemesanan')
                ->on('pemesanan_travel')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_driver', 'fk_assignment_driver')
                ->references('id_driver')
                ->on('driver')
                ->onUpdate('cascade');
        });

        // 4. Penugasan Driver
        Schema::create('penugasan_driver', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->bigIncrements('id_penugasan');
            $table->unsignedBigInteger('id_akun_seller');
            $table->unsignedBigInteger('id_jadwal');
            $table->unsignedBigInteger('id_pemesanan');
            $table->unsignedBigInteger('id_driver');
            $table->unsignedBigInteger('id_armada');
            $table->string('status_penugasan', 50)->default('ditugaskan');

            $table->foreign('id_akun_seller', 'fk_penugasan_seller')
                ->references('id_akun_seller')
                ->on('akun_seller')
                ->onUpdate('cascade');

            $table->foreign('id_jadwal', 'fk_penugasan_jadwal')
                ->references('id_jadwal')
                ->on('jadwal_travel')
                ->onUpdate('cascade');

            $table->foreign('id_pemesanan', 'fk_penugasan_pemesanan')
                ->references('id_pemesanan')
                ->on('pemesanan_travel')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_driver', 'fk_penugasan_driver')
                ->references('id_driver')
                ->on('driver')
                ->onUpdate('cascade');

            $table->foreign('id_armada', 'fk_penugasan_armada')
                ->references('id_armada')
                ->on('armada')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penugasan_driver');
        Schema::dropIfExists('assignment_pesanan');
        Schema::dropIfExists('pengajuan_reschedule');
        Schema::dropIfExists('pembayaran');
    }
};
