<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaraBaseTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lara_base_test', function (Blueprint $table) {
            $table->increments('id');
            $table->string('key');
            $table->string('value');
        });

        DB::table('lara_base_test')->insert([
            'key' => 'lara_base',
            'value' => 'This is a test for Migrations'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lara_base_test');
    }
}
