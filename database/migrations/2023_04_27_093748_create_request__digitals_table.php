<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestDigitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request__digitals', function (Blueprint $table) {
            
            $table->id();
            $table->string('Request_Name');
            $table->string('Marketing_Type');
            $table->string('Creative_Type');
            $table->string('Date');
            $table->string('Company_Goals');
            $table->string('Add_Platforms');
            $table->string('Target_Audience');
            $table->string('Competitors');
            $table->string('Age_Group');
            $table->string('Campaign_Objective')->nullable();
            $table->string('Assets_For_Designer')->nullable();
            $table->string('Add_Collaborators')->nullable();
            $table->string('Status')->nullable();
            $table->string('user_id')->nullable();
            $table->string('description');
            $table->string('file');
            $table->string('Role')->nullable();
            
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
        Schema::dropIfExists('request__digitals');
    }
}
