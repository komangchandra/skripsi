<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKedelaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kedelais', function (Blueprint $table) {
            $table->id();
            $table->string('kelas');
            $table->foreignId('kecamatan_id');
            $table->string('warna');
            $table->string('geojson');
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
        Schema::dropIfExists('kedelais');
    }
}
