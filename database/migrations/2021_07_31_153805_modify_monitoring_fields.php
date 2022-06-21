<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyMonitoringFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('monitorings', function ($table) {
            $table->text("problem_start", 20)->default("00:00")->change();
            $table->text("problem_discover", 20)->default("00:00")->change();
            $table->text("appeal", 20)->default("00:00")->change();
            $table->text("duration", 20)->default("00:00")->change();
            $table->text("product", 300)->default("Product")->change();
            $table->text("provider", 300)->default("provider")->change();
            $table->text("problem_desc", 3000)->default("...")->change();
            $table->text("provider_answ", 3000)->default("...")->change();
            $table->text("poblem_side", 100)->default("*")->change();
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
