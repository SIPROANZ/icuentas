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
        Schema::create('sociopagos', function (Blueprint $table) {
            $table->id();
            
            $table->double('monto', 25, 2);
            
            $table->string('concepto', 100);

            $table->bigInteger('socio_id')->unsigned();

            $table->foreign('socio_id')->references('id')->on('socios')->onDelete('cascade');
                
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
        Schema::dropIfExists('sociopagos');
    }
};
