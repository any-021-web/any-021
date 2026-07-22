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
    Schema::create('pemesanans', function (Blueprint $table) {

        $table->id();

        $table->string('nama');
        $table->string('no_hp');
        $table->date('tanggal');
        $table->text('alamat');
        $table->string('produk');
        $table->string('ukuran');
        $table->integer('jumlah');
        $table->string('pembayaran');
        $table->text('catatan')->nullable();

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanans');
    }
};
