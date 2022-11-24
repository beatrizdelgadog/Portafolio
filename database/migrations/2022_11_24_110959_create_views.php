<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::dropIfExists('views');

        Schema::create('views', function (Blueprint $table) {
            $table->id();
            $table->string('ip_address', 500);
            $table->string('mode', 50)->default('web');
            $table->smallInteger('no_accesible')->default(0);
            $table->text('route_name' )->nullable()->default(null);
            $table->string('browser', 500 )->nullable()->default(null);
            $table->string('user_agent', 500 )->nullable()->default(null);
            $table->string('operative_system', 500 )->nullable()->default(null);
            $table->text('city' )->nullable()->default(null);
            $table->text('region_code' )->nullable()->default(null);
            $table->text('region' )->nullable()->default(null);
            $table->text('region_name' )->nullable()->default(null);
            $table->text('country_code' )->nullable()->default(null);
            $table->text('country_name' )->nullable()->default(null);
            $table->text('continent_code' )->nullable()->default(null);
            $table->text('latitude' )->nullable()->default(null);
            $table->text('longitude' )->nullable()->default(null);
            $table->text('timezone' )->nullable()->default(null);
            $table->text('location_accuracy_radius' )->nullable()->default(null);
            $table->text('continent_name' )->nullable()->default(null);
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
        Schema::dropIfExists('views');
    }
}
