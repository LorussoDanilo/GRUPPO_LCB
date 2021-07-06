<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfiloDatoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Profilo_Datore_Lavoro', function (Blueprint $table) {
            $table->integer('ID_Datore')->unique();
            $table->timestamps();
            $table->rememberToken();
            $table->string('Mail')->unique();
            $table->string('Codice_Fiscale',16)->unique();
            $table->string('Password',20);
            $table->string('Partita_IVA',11);
            $table->string('Ruolo_Aziendale',40);
            $table->string('Nazione_Azienda',40);
            $table->string('Citta_Azienda',40);
            $table->string('Provincia_Azienda',3);
            $table->string('Cognome',40);
            $table->string('Nome',40);
            $table->string('Telefono',15);
            $table->string('Luogo_Nascita',40);
            $table->date('Data_Nascita');
            $table->string('Nazione_Nascita',40);
            $table->string('Citta',40);
            $table->string('Provincia',3);
            $table->string('CAP',5);
            $table->string('Domicilio',40)->nullable();
            $table->primary(array('ID_Datore','Mail','Codice_Fiscale'));

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Profilo_Datore_Lavoro');
    }
}
