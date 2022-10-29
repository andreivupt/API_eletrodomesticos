<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('DS_NAME');
            $table->string('DS_DESCRIPTION');
            $table->string('DS_BRAND');
            $table->integer('NM_BAR_CODE');
            $table->integer('NM_TENSION')->nullable()->default(220);
            $table->double('NM_VALUE')->nullable()->default(0);
            $table->enum('FL_STATUS',['Y','N'])->nullable()->default('Y');
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
        Schema::dropIfExists('products');
    }
};
