
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
        // 1. Profil
        Schema::create('profil', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->bigIncrements('id_profil');
            $table->unsignedBigInteger('id_akun_buyer');
            $table->string('nama_lengkap', 150);
            $table->string('email', 150);
            $table->string('nomor_telepon', 25)->nullable();
            $table->text('alamat')->nullable();
            $table->string('foto_profil', 255)->nullable();

            $table->foreign('id_akun_buyer', 'fk_profil_buyer')
                ->references('id_akun_buyer')
                ->on('akun_buyer')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        // 2. FAQ
        Schema::create('faq', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->bigIncrements('id_faq');
            $table->unsignedBigInteger('id_pusat_bantuan');
            $table->string('kategori', 100);
            $table->string('judul', 200);
            $table->text('deskripsi')->nullable();
            $table->text('langkah_langkah')->nullable();

            $table->foreign('id_pusat_bantuan', 'fk_faq_pusat_bantuan')
                ->references('id_pusat_bantuan')
                ->on('pusat_bantuan')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        // 3. Notifikasi
        Schema::create('notifikasi', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->bigIncrements('id_notifikasi');
            $table->unsignedBigInteger('id_akun_buyer')->nullable();
            $table->unsignedBigInteger('id_akun_seller')->nullable();
            $table->unsignedBigInteger('id_pemesanan')->nullable();
            $table->string('judul', 200);
            $table->text('isi_pesan');
            $table->string('estimasi_kedatangan', 100)->nullable();

            $table->index('id_akun_buyer', 'idx_notifikasi_buyer');

            $table->foreign('id_akun_buyer', 'fk_notifikasi_buyer')
                ->references('id_akun_buyer')
                ->on('akun_buyer')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_akun_seller', 'fk_notifikasi_seller')
                ->references('id_akun_seller')
                ->on('akun_seller')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_pemesanan', 'fk_notifikasi_pemesanan')
                ->references('id_pemesanan')
                ->on('pemesanan_travel')
                ->onDelete('set null')
                ->onUpdate('cascade');
        });

        // 4. Testimoni
        Schema::create('testimoni', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->bigIncrements('id_testimoni');
            $table->unsignedBigInteger('id_pemesanan');
            $table->unsignedBigInteger('id_akun_buyer');
            $table->unsignedTinyInteger('rating');
            $table->text('teks_testimoni')->nullable();
            $table->string('foto_perjalanan', 255)->nullable();
            $table->dateTime('tanggal_testimoni')->useCurrent();

            $table->foreign('id_pemesanan', 'fk_testimoni_pemesanan')
                ->references('id_pemesanan')
                ->on('pemesanan_travel')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_akun_buyer', 'fk_testimoni_buyer')
                ->references('id_akun_buyer')
                ->on('akun_buyer')
                ->onUpdate('cascade');
        });

        // 5. Testimoni Pelanggan
        Schema::create('testimoni_pelanggan', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->bigIncrements('id_testimoni_pelanggan');
            $table->unsignedBigInteger('id_testimoni');
            $table->string('nama_pelanggan', 150);
            $table->string('status_verifikasi', 50)->default('menunggu');
            $table->string('rute_perjalanan', 200)->nullable();
            $table->date('tanggal_perjalanan')->nullable();

            $table->foreign(
                'id_testimoni',
                'fk_testimoni_pelanggan_testimoni'
            )
                ->references('id_testimoni')
                ->on('testimoni')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        // 6. Feedback Seller
        Schema::create('feedback_seller', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->bigIncrements('id_feedback');
            $table->unsignedBigInteger('id_testimoni');
            $table->unsignedBigInteger('id_akun_seller');
            $table->text('isi_feedback');
            $table->string('status_feedback', 50)->default('aktif');
            $table->dateTime('waktu_feedback')->useCurrent();

            $table->foreign('id_testimoni', 'fk_feedback_testimoni')
                ->references('id_testimoni')
                ->on('testimoni')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_akun_seller', 'fk_feedback_seller')
                ->references('id_akun_seller')
                ->on('akun_seller')
                ->onUpdate('cascade');
        });

        // 7. Trip Tracking
        Schema::create('trip_tracking', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->bigIncrements('id_tracking');
            $table->unsignedBigInteger('id_perjalanan');
            $table->unsignedBigInteger('id_driver');
            $table->string('lokasi', 255);
            $table->dateTime('waktu_update')->useCurrent();

            $table->index(
                ['id_perjalanan', 'waktu_update'],
                'idx_tracking_waktu'
            );

            $table->foreign('id_perjalanan', 'fk_tracking_perjalanan')
                ->references('id_perjalanan')
                ->on('perjalanan')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_driver', 'fk_tracking_driver')
                ->references('id_driver')
                ->on('driver')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trip_tracking');
        Schema::dropIfExists('feedback_seller');
        Schema::dropIfExists('testimoni_pelanggan');
        Schema::dropIfExists('testimoni');
        Schema::dropIfExists('notifikasi');
        Schema::dropIfExists('faq');
        Schema::dropIfExists('profil');
    }
};
