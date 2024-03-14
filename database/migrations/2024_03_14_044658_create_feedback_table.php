<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbacksTable extends Migration
{
    public function up()
    {
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('hotel_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->text('description');
            $table->integer('rating');
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('feedbacks');
    }
}
