<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('chile_geo_regions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('chile_geo_country_id')->default(config('chile-geo.chile_geo_country_id'));
            $table->string('name');
            $table->timestamps();
        });
    }
};
