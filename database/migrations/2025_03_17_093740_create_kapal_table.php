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
        Schema::create('kapal', function (Blueprint $table) {
            $table->id();
            $table->string('gambar');
            $table->string('nama_kapal');
            $table->text('deskripsi');
            $table->integer('kapasitas');
            $table->decimal('harga_tiket');
            $table->enum('status_kapal', ['tersedia', 'sudah dipesan', 'dalam pemeliharaan']);
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kapal');
    }
};
