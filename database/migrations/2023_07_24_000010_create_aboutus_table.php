<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutusTable extends Migration
{
    public function up()
    {
        Schema::create('aboutus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('site_name');
            $table->string('description')->nullable();
            $table->string('mission')->nullable();
            $table->string('vision')->nullable();
            $table->longText('president_description')->nullable();
            $table->string('address')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable();
            $table->string('author_seo')->nullable();
            $table->string('sitemap_link_seo')->nullable();
            $table->longText('keywords_seo')->nullable();
            $table->longText('description_seo')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
