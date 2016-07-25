<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BerichtNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::table('berichten', function($table) {
			$table->integer('next_id')->length(10)->nullable()->unsigned()->change();
			$table->integer('previous_id')->length(10)->nullable()->unsigned()->change();
		});
		
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::table('berichten', function($table) {
			$table->integer('next_id')->length(10)->unsigned()->change();
			$table->integer('previous_id')->length(10)->unsigned()->change();
		});
    }
}
