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
        Schema::create('tbl_sp', function (Blueprint $table) {
            $table->id('product_id');
            $table->id('category_id');
            $table->id('manu_id');
            $table->string('sp_image');
            $table->string('sp_name',200);
            $table->string('sp_price',200);
            $table->integer('sp_status');
            $table->text('sp_desc');
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
        Schema::dropIfExists('tbl_sp');
    }
};
