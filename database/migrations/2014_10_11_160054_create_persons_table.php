<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\ForeignKeyDefinition;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name',20);
            $table->string('fName',30);
            $table->string('lName',30);
            $table->date('birthdate');
            $table->enum('gender',['M','F','Otro'])->default('M');
            $table->enum('document_type',['CI','Passport','CIE'])->default('CI');
            $table->string('document_number',20);
            $table->string('address',100);
            $table->string('phone',15);
            $table->string('email',50);
            $table->date('dAdmission');
            $table->date('dDeparture');
            $table->decimal('salary', 8,2);            
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persons');
    }
};
