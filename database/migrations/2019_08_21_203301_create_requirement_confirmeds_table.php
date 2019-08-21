<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequirementsConfirmedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requirements_confirmed', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('agreement_id')->nullable()->default(null);
            $table->integer('requirement_id')->nullable()->default(null);

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
        Schema::dropIfExists('requirements_confirmed');
    }
}
