<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacher2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher2s', function (Blueprint $table) {
            $table->id();
            $table->string('Nama', 100);
            $table->string('Jenis_kelamin', 20);
            $table->string('Alamat', 100);
            $table->string('Mapel', 100);
            $table->string('Foto', 100);
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
        Schema::dropIfExists('teacher2s');
    }
}
