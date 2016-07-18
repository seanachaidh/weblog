<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BerichtenForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('berichten', function($table) {
	  
	  DB::statement("alter table berichten modify column date DATE");
	  
	  $table->integer("next_id")->unsigned();
	  $table->integer("previous_id")->unsigned();
	  
	  $table->foreign("next_id")->references("id")->on("berichten");
	  $table->foreign("previous_id")->references("id")->on("berichten");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("berichten", function($table) {
	  $table->dropForeign(["next_id"]);
	  $table->dropForeign(["previous_id"]);
	  
	  $table->dropColumn("next_id");
	  $table->dropColumn("previous_id");
	  
	  DB::statement("alter table berichten modify column date TIMESTAMP");
	  
        });
    }
}
