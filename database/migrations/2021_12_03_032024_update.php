<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Update extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bateaux', function(Blueprint $table)
        {
            $table->string('nom',50);
            $table->string('description');
        });

        Schema::table('decorations', function(Blueprint $table)
        {
            $table->dropColumn('date');
            $table->string('nom',150);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table::table('bateaux', function(Blueprint $table){
            $table->dropColumn('nom',50);
            $table->dropColumn('description');
        });

        Schema::table('decorations', function(Blueprint $table)
        {
            $table->date('date');
            $table->dropColumn('nom',150);
        });
    }
}
