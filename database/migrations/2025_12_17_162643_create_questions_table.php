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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('part_id');

            $table->text('textarea');
            $table->string('audio_path')->nullable();

            $table->double('audio_second')->nullable();
            $table->integer('ready_second')->default(0);
            $table->integer('answer_second')->default(0);

            $table->timestamps();

            $table->foreign('part_id')
                ->references('id')
                ->on('parts')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
