<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('website_name', function (Blueprint $table) {
            $table->string('logo_name');
            $table->string('country');
            $table->string('job');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('website_name', function (Blueprint $table) {
            $table->dropColumn('logo_name');
            $table->dropColumn('country');
            $table->dropColumn('job');
        });
    }
};