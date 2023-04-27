<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestWebsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request__webs', function (Blueprint $table) {
            

            $table->id();
            $table->string('Request_Name');
            $table->string('Creative_Type');
            $table->string('Design_Type');
            $table->string('Date');
            $table->string('Domain_Name');
            $table->string('Hosting_Services');
            $table->string('Brand_Logo');
            $table->string('Content');
            $table->string('Priority');
            $table->string('Campaign_Objective')->nullable();
            $table->string('Assets_For_Designer')->nullable();
            $table->string('Add_Collaborators')->nullable();
            $table->string('Status')->nullable();
            $table->string('user_id')->nullable();
            $table->string('description');
            $table->string('file');
           
            $table->string('Role');
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
        Schema::dropIfExists('request__webs');
    }
}
