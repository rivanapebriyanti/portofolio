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
            // $table->string('kategori')->nullable();
            $table->integer('stok')->nullable();
            $table->integer('harga')->nullable();
            $table->unsignedBigInteger('categories_id');
            $table->foreign('categories_id')->references('id')->on('categories')->cascadeOnDelete()->cascadeOnUpdate()->nullable();
            $table->string('gambar')->nullable();
            
            // $table->unsignedBigInteger('id_user');
            // // $table->string('nama');
            // // $table->integer('harga');
            // $table->integer('stok')->nullable();
            // $table->text('deskripsi')->nullable();
            // // $table->text('gambar');
            // // $table->string('categorie');
            // $table->foreign('id_user')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate()->nullable();


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
