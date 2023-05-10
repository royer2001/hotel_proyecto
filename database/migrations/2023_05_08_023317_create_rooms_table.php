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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->integer('numero_habitacion');
            $table->string('tipo_habitacion');
            $table->string('description');
            $table->decimal('precio_noche');
            $table->unsignedBigInteger('room_category_id')->nullable();
            $table->foreign('room_category_id')->references('id')->on('room_categories')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
