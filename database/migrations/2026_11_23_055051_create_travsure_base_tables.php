
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
        // 1. Akun Buyer
        Schema::create('akun_buyer', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->bigIncrements('id_akun_buyer');
            $table->string('nama_lengkap', 150);
            $table->string('email', 150);
            $table->string('nomor_hp', 25);
            $table->string('kata_sandi', 255);
            $table->boolean('persetujuan_syarat_ketentuan')->default(false);
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent()->useCurrentOnUpdate();

            $table->unique('email', 'email');
        });

        // 2. Akun Seller
        Schema::create('akun_seller', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->bigIncrements('id_akun_seller');
            $table->string('nama_seller', 150);
            $table->string('email', 150);
            $table->string('kata_sandi', 255);
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent()->useCurrentOnUpdate();

            $table->unique('email', 'email');
        });

        // 3. Penumpang
        Schema::create('penumpang', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->bigIncrements('id_penumpang');
            $table->string('nama_penumpang', 150);
            $table->string('nomor_telepon', 25)->nullable();
            $table->string('email', 150)->nullable();
            $table->string('status_penumpang', 50)->default('aktif');
        });

        // 4. Pusat Bantuan
        Schema::create('pusat_bantuan', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->bigIncrements('id_pusat_bantuan');
            $table->string('jenis_saluran', 100);
            $table->string('detail_kontak', 255);
            $table->string('jam_operasional', 150)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pusat_bantuan');
        Schema::dropIfExists('penumpang');
        Schema::dropIfExists('akun_seller');
        Schema::dropIfExists('akun_buyer');
    }
};
