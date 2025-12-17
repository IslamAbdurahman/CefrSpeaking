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
        Schema::create('attempt_parts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('attempt_id');
            $table->unsignedBigInteger('part_id');

            $table->dateTime('started_at');
            $table->dateTime('finished_at')->nullable();
            $table->integer('score')->nullable();


            $table->foreign('attempt_id')
                ->references('id')
                ->on('attempts')
                ->onDelete('cascade');

            $table->foreign('part_id')
                ->references('id')
                ->on('parts')
                ->onDelete('cascade');

            // Bitta attempt ichida bir part faqat bir marta
            $table->unique(['attempt_id', 'part_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attempt_parts');
    }
};
