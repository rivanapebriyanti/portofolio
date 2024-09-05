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
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama',20);
            // $table->string('kategori');
            $table->integer('jumlah');
            $table->integer('harga');
            $table->unsignedBigInteger('categories_id');
            $table->foreign('categories_id')->references('id')->on('categories')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('gambar')->nullable();
            
            $table->unsignedBigInteger('id_user');
            $table->string('nama_product');
            $table->integer('harga');
            $table->integer('stok');
            $table->text('deskripsi');
            $table->text('foto_product');
            $table->string('kategori');
            $table->foreign('id_user')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
