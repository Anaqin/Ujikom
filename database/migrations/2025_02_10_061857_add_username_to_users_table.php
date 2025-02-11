<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Menjalankan migrasi.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Menambahkan kolom username setelah kolom email.
            // Kolom ini bersifat unik dan bisa bernilai null jika belum ada nilai awal.
            $table->string('username')->unique()->nullable()->after('email');
        });
    }

    /**
     * Membalikkan migrasi.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Menghapus kolom username jika migrasi dibalik.
            $table->dropColumn('username');
        });
    }
};