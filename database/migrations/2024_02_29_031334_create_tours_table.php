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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('ma_tour')->unique();
            $table->string('ngay_khoi_hanh');
            $table->string('thoi_gian');
            $table->string('xuat_phat');
            $table->string('diem_du_lich');
            $table->decimal('price',8,2)->nullable();
            $table->decimal('sale_price',8,2)->nullable();
            $table->string('image',255)->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('destination_id');
            $table->foreign('destination_id')->references('id')->on('destinations');
            $table->tinyInteger('stock');
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
        Schema::dropIfExists('tours');
    }
};
