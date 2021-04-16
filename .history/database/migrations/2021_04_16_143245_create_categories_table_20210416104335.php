<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('icon')->nullable();
            $table->string('description');
            $table->boolean('state')->default(true);
            $table->unsignedBigInteger('category_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });

        DB::table('categories')->insert([
            ['description'=>'Teléfonos - Tablets'],
            ['description'=>'Electrónicos - Video'],
            ['description'=>'Moda - Belleza'],
            ['description'=>'Hobbies - Arte - Deporte'],
            ['description'=>'Empleos - Servicios'],
            ['description'=>'Vehículos'],
            ['description'=>'Propiedades - inmuebles'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
