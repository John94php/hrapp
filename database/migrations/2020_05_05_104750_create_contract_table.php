<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract', function (Blueprint $table) {
            $table->id('id_contract');
            $table->string('name_contract');
            $table->string('surname_contract');
            $table->string('pesel_contract');
            $table->string('email_contract');
            $table->string('document_contract');
            $table->string('telephone_contract');
            $table->string('corrCode');
            $table->string('corrCountry');
            $table->string('corrCity');
            $table->string('corrStreet');
            $table->string('corrHouse');
            $table->string('corrFlat');

            $table->string('regCode');
            $table->string('regCountry');
            $table->string('regCity');
            $table->string('regStreet');
            $table->string('regHouse');
            $table->string('regFlat');

            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contract');
    }
}
