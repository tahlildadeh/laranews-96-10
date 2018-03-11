<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->morphs('commentable');
            $table->integer('commentator_id')->unsigned()->nullable();
            $table->foreign('commentator_id')->references('id')->on('users');
            $table->string('name', 80)->nullable();
            $table->string('email', 80)->nullable();
            $table->text('message');
            $table->boolean('is_approved')->default(false);
            $table->integer('likes')->default(0)->unsigned();
            $table->integer('dislikes')->default(0)->unsigned();
            $table->text('address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
