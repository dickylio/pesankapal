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
        Schema::create('pemesanankapal', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pelanggan')->references('id')->on('pelanggan')->onDelete('cascade');
            $table->foreignId('id_kapal')->references('id')->on('kapal')->onDelete('cascade');
            $table->date('tanggal_check_in');
            $table->date('tanggal_check_out');
            $table->enum('status_pemesanan', ['dipesan', 'dibatalkan', 'selesai']);
            $table->decimal('total_harga');
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanankapal');
    }
};
