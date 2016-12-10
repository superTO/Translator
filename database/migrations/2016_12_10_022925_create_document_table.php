<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('document_name');
            $table->string('text_name');
            $table->dateTime('due_date');
            $table->string('original_language');
            $table->string('translated_language');
            $table->unsignedInteger('upload_user_id');
            $table->unsignedInteger('translator1_id');
            $table->foreign('upload_user_id')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('translator1_id')->references('id')->on('users')->onUpdate('cascade');
            $table->unsignedInteger('translation_type')->index();
            $table->unsignedInteger('payment_type')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('documents');
    }
}
