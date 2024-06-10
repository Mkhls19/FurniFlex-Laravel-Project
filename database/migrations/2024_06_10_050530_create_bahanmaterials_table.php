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
        Schema::create('bahanmaterial', function (Blueprint $table) {
            $table->id();
            $table->string('Id_Material',50);
            $table->string('Kategori', 50);
            $table->string('Harga', 50);
            $table->string('Jumlah', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bahanmaterial');
    }
};
