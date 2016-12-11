<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyTranslatorsInDocuments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('documents', function (Blueprint $table) {
            $table->unsignedInteger('translator1_id')->nullable()->change();
            $table->unsignedInteger('translator2_id')->nullable()->change();
            $table->unsignedInteger('translator3_id')->nullable()->change();
            $table->unsignedInteger('translator4_id')->nullable()->change();
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
            $table->unsignedInteger('translator1_id')->nullable(false)->change();
            $table->unsignedInteger('translator2_id')->nullable(false)->change();
            $table->unsignedInteger('translator3_id')->nullable(false)->change();
            $table->unsignedInteger('translator4_id')->nullable(false)->change();
        });
    }
}
