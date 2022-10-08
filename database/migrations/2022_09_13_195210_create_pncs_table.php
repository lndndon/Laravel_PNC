<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pncs', function (Blueprint $table) {
            $table->id();
            $table->string('Firstname');
            $table->string('Middlename');
            $table->string('Lastname');
            $table->string('Prefix')->nullable(true);
            $table->integer('Age');
            $table->string('Sex');
            $table->string('Contact');
            $table->string('Email');
            $table->integer('HouseNo');
            $table->string('Street');
            $table->string('Barangay');
            $table->string('City');
            $table->string('Province');
            $table->string('Elementary');
            $table->string('Secondary');
            $table->string('Senior');
            $table->string('MotherFirstname')->nullable(true);
            $table->string('MotherMiddlename')->nullable(true);
            $table->string('MotherLastname')->nullable(true);
            $table->string('MotherContact')->nullable(true)->nullable(true);
            $table->string('MotherJob')->nullable(true);
            $table->integer('Mothersalary')->nullable(true);
            $table->string('FatherFirstname')->nullable(true);
            $table->string('FatherMiddlename')->nullable(true);
            $table->string('FatherLastname')->nullable(true);
            $table->string('FatherContact')->nullable(true);
            $table->string('FatherJob')->nullable(true);
            $table->integer('Fathersalary')->nullable(true);
            $table->string('Course');
            $table->string('TwobyTwo');
            $table->string('PSA');
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
        Schema::dropIfExists('pncs');
    }
};
