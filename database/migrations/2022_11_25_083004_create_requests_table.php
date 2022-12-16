<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('request_id');
            $table->string('requester_id');
            $table->string('project_id');
            $table->string('material_id');
            $table->string('drum_no');
            $table->string('date_requested');
            $table->boolean('M_approval');
            $table->string('M_approval_date');
            $table->boolean('SK_approval');
            $table->string('SK_approval_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requests');
    }
}
