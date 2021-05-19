<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel_packages', function (Blueprint $table) {
            $table->id();
            $table->char('location', 30);
            $table->char('location_type', 15);
            $table->char('accomodation', 30);
            $table->char('accomodation_type', 15);
            $table->tinyInteger('nights');
            $table->tinyInteger('transfer_included');
            $table->tinyInteger('peolpe_maximum');
            $table->decimal('cost_per_person', 5, 2);
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
        Schema::dropIfExists('travel_packages');
    }
}
