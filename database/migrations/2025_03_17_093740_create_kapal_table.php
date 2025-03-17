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
            $table->foreignId('id_fasilitas')->references('id')->on('fasilitas')->onDelete('cascade');
            $table->string('nama_kapal');
            $table->integer('kapasitas');
            $table->decimal('harga_per_hari');
            $table->text('deskripsi');
            $table->enum('status_kapal', ['tersedia', 'sudah dipesan', 'dalam pemeliharaan']);
            $table->timestamp('created_at');
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
