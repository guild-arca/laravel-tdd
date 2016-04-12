<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        # Create table
        Schema::create('Domain', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('url');
            $table->string('status');
            $table->timestamps();
        });

        # Insert
        DB::table('Domain')->insert(
            array(
                'id' => 1,
                'name' => 'Domain Teste',
                'url' => 'http://localhost',
                'status' => 'A'
            )
        );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Domain');
    }
}
