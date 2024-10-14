<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //toto se spusti kdzy provadite migraci z projektu do DB
        Schema::create("zvire", function(Blueprint $tabulka) {
            $tabulka->id(); //INT UNSIGNED PRIMARY KEY AUTO_INCREMENT
            $tabulka->string("jmeno"); //VARCHAR(255) NOT NULL
            $tabulka->text("popis")->nullable(true); //TEXT
            $tabulka->boolean("je_zdrave")->default(true); //TYNYINT DEFAULT 1
            $tabulka->float("hmotnost")->nullable(true); //FLOAT
            //toto nam vytvori 2 sloupecky DATETIME
            //CREATED_AT, UPDATED_AT
            $tabulka->timestamps();
        });
    }
     
      /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //toto se sputi pokud chcete migraic vzit zpetphp artisan migrate:rollback
        Schema::dropIfExists("zvire");
    }
};
