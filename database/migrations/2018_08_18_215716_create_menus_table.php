<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('tipo_plato')->unsigned();
            $table->text('item');
            $table->text('descripcion_item');
            $table->decimal('precio_item');

            $table->timestamps();

            /*$table->foreign('tipo_plato')->references('tp_codigo')->on('tplatos')
                ->onDelete('cascade')
                ->onUpdate('cascade');*/


        });

    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
