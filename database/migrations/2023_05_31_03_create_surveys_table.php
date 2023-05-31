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
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();
            $table->integer('active');
            $table->integer('default');
            $table->string('name');
            $table->date('from');
            $table->date('to');
            $table->integer('total_questions');
            $table->integer('with_coupon');
            $table->integer('point_app');
            $table->integer('number_point_app');
            $table->string('user_insert');
            $table->string('user_update');
            $table->timestamps();
        });

        Schema::table('questions', function ( Blueprint $table){
            $table->unsignedBigInteger('survey_id')->nullable();
            $table->foreign('survey_id')->references('id')->on('surveys')
                ->onDelete('set null')
                ->onUpdate('cascade');
        });

        Schema::table('answers', function ( Blueprint $table){
            $table->unsignedBigInteger('survey_id')->nullable();
            $table->foreign('survey_id')->references('id')->on('surveys')
                ->onDelete('set null')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surveys');
    }
};
