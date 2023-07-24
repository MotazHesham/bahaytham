<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('name_ar');
            $table->string('address')->nullable();
            $table->string('owner');
            $table->string('client');
            $table->string('duration');
            $table->string('working_area');
            $table->longText('description');
            $table->boolean('published')->default(0)->nullable();
            $table->string('meta_title')->nullable();
            $table->longText('meta_description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
