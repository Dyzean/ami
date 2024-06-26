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
        Schema::create('gaps', function (Blueprint $table) {
            $table->id();   
            $table->string('kategori');
            $table->string('subdimensi');
            $table->text('indikator');
            $table->string('satuan');
            $table->string('eksisting');
            $table->string('target');
            $table->string('gap');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gaps');
    }
};
