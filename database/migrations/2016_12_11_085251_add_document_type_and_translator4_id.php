<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDocumentTypeAndTranslator4Id extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('documents', function (Blueprint $table) {
            $table->unsignedInteger('translator4_id');
            $table->foreign('translator4_id')->references('id')->on('users')->onUpdate('cascade');
            $table->unsignedInteger('document_type')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('documents', function (Blueprint $table) {
            $table->dropForeign('documents_translator4_id_foreign');
            $table->dropColumn('translator4_id');
            $table->dropColumn('document_type');
        });
    }
}
