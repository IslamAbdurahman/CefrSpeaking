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
        Schema::create('mock_tests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mock_id');
            $table->unsignedBigInteger('test_id');
            $table->timestamps();

            $table->foreign('mock_id')
                ->references('id')
                ->on('mocks')
                ->onDelete('cascade');

            $table->foreign('test_id')
                ->references('id')
                ->on('tests')
                ->onDelete('cascade');

            $table->unique(['mock_id', 'test_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mock_tests');
    }
};
