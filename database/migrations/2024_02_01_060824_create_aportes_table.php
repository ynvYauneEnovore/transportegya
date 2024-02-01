<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAportesTable extends Migration
{
    public function up()
    {
        Schema::create('aportes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('afiliado_id');
            $table->decimal('monto', 10, 2);
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('afiliado_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('aportes');
    }
}
