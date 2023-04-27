<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestGraphicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request__graphics', function (Blueprint $table) {
            $table->id();
            
            $table->string('Request_Name');
            $table->string('Design_Information');
            $table->string('Purpose');
            $table->string('Sizes');
            $table->string('Target_Platform');
            $table->string('Other_Info');
            $table->string('Date');
            $table->string('Color_Type');
            $table->string('Priority');
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
        Schema::dropIfExists('request__graphics');
    }
}
