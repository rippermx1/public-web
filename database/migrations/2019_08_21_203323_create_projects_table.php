<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->nullable()->default(null);
            $table->integer('customer_id')->nullable()->default(null);
            $table->integer('requirement_confirmed_id')->nullable()->default(null);
            $table->integer('team_id')->nullable()->default(null);
            $table->integer('progress')->nullable()->default(0);
            $table->integer('type_id')->nullable()->default(null);
            $table->string('name')->nullable()->default(null);
            $table->string('description')->nullable()->default(null);
            $table->string('customer_key')->nullable()->default(null);
            $table->string('live_url')->nullable()->default(null);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
