<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSauveteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grade', function(Blueprint $table) {
            
        });

        Schema::create('sauveteurs', function (Blueprint $table) {
            $table->id();
            $table->string('prenom', 50);
            $table->string('nom', 50);
            $table->date('date_naissaince');
            $table->date('date_mort');
            $table->timestamps();

            $table->foreignId('id_grade')->constrained('grade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sauveteurs');
    }
}
