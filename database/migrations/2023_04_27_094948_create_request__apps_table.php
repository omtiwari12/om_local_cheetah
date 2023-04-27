<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request__apps', function (Blueprint $table) {
            $table->id();
            $table->string('Request_Name');
            $table->string('Creative_Type');
            $table->string('Database_Type');
            $table->string('color_theme');
            $table->string('Target_Audience');
            $table->string('Date');
            $table->string('Protection');
            $table->string('Services');
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
        Schema::dropIfExists('request__apps');
    }
}
