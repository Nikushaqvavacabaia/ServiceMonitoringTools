<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMonitoringTableFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('monitorings', function (Blueprint $table) {
            $table->text("problem_start");
            $table->text("problem_discover");
            $table->text("appeal");
            $table->text("duration");
            $table->text("product");
            $table->text("provider");
            $table->text("problem_desc");
            $table->text("provider_answ");
            $table->text("poblem_side");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
