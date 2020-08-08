<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerminationPDFSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terminationpdfs', function (Blueprint $table) {
            $table->id();
            $table->string('companyName');
            $table->string('companyAddress');
            $table->string('fname');
            $table->text('regAddress');
            $table->text('corrAddress');
            $table->string('pesel_contract');
            $table->string('typeContract');
            $table->date('dateContract');
            $table->string('fnameCompany');
            $table->date('terminationdata');
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
        Schema::dropIfExists('terminationpdfs');
    }
}
