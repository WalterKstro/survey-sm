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
        Schema::create('type_answers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type_data');
            $table->timestamps();
        });

        Schema::table('questions', function ( Blueprint $table){
            $table->unsignedBigInteger('type_answer_id')->nullable();
            $table->foreign('type_answer_id')->references('id')->on('type_answers')
                ->onDelete('set null')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_answers');
    }
};
