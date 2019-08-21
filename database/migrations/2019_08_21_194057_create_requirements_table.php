<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requirements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('code')->nullable()->default(null);
            $table->longText('description')->nullable()->default(null);
            $table->string('customer_dni')->nullable()->default(null);
            $table->string('email')->nullable()->default(null);
            $table->string('notified')->nullable()->default(null);
            $table->integer('processed')->nullable()->default(0);
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
        Schema::dropIfExists('requirements');
    }
}
