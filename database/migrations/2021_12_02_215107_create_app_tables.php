<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function(Blueprint $table) {
            $table->id();
            $table->string('Nom',50);            
        });

        Schema::create('decorations',function(Blueprint $table)
        {
            $table->id();
            $table->date('date');
            $table->string('url_image',256);  
        });

        Schema::create('type_bateaux',function(Blueprint $table)
        {
            $table->id();
            $table->string('nom',100);
        });

        Schema::create('bateaux', function(Blueprint $table)
        {
            $table->id();
            $table->string('url_image',256);
            $table->foreignId('id_type')->constrained('type_bateaux');
        });
                
        Schema::create('sauvetages', function(Blueprint $table)
        {
            $table->id();
            $table->date('date');
            $table->bigInteger('nb_sauve');
            $table->foreignId('id_bateaux')->constrained('bateaux');
        });


        Schema::create('sauves', function(Blueprint $table)
        {
            $table->id();
            $table->foreignId('id_sauvetages')->constrained('sauvetages');
            $table->string('nom',50);
            $table->string('prenom',50);
        });

        Schema::create('sauveteurs', function(Blueprint $table) 
        {
            $table->id();
            $table->string('prenom', 50);
            $table->string('nom', 50);
            $table->date('date_naissaince');
            $table->date('date_mort');
            $table->timestamps();

            $table->foreignId('id_grade')->constrained('grades');
        });

        

        Schema::create('sauveteurs_sauves', function(Blueprint $table)
        {
            $table->foreignId('id_sauveteurs')->constrained('sauveteurs');
            $table->foreignId('id_sauves')->constrained('sauves');
            $table->primary(['id_sauveteurs','id_sauves']);
        });

        Schema::create('sauveteurs_sauvetages', function(Blueprint $table)
        {
            $table->foreignId('id_sauveteurs')->constrained('sauveteurs');
            $table->foreignId('id_sauvetages')->constrained('sauvetages');
            $table->primary(['id_sauveteurs','id_sauvetages']);
        });

        Schema::create('sauveteurs_decorations', function(Blueprint $table)
        {
            $table->foreignId('id_sauveteurs')->constrained('sauveteurs');
            $table->foreignId('id_decorations')->constrained('decorations');
            $table->primary(['id_sauveteurs','id_decorations']);
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
        Schema::dropIfExists('sauves');
        Schema::dropIfExists('grades');
        Schema::dropIfExists('sauvetages');
        Schema::dropIfExists('bateaux');
        Schema::dropIfExists('sauveteurs_sauves');
        Schema::dropIfExists('sauveteurs_sauvetages');
        Schema::dropIfExists('type_bateaux');
        Schema::dropIfExists('decorations');  
    }
}
