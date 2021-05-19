<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawans', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->nullable();
            $table->string('name', 50)->nullable();
            $table->string('gender', 15)->nullable();
            $table->integer('phone_number')->nullable();
            $table->string('address')->nullable();
            $table->string('religion', 50)->nullable();
            $table->string('status', 50)->nullable();
            $table->date('birthday')->nullable();
            $table->date('dateIn')->nullable();
            $table->date('dateOut')->nullable();
            $table->timestamps();

            //soft delete
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
        Schema::dropIfExists('karyawans');
    }
}
