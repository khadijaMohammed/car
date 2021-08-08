<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('licences_number')->unique();
            $table->date('end_licences_date');
            $table->string('color');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->unsignedBigInteger('car_number')->unique();
            $table->enum('status', ['Available', 'Unavailable']);
            $table->foreignId('parent_id')->nullable() ->constrained('cars', 'id')->nullOnDelete();
// لا يتم حذف الابناء فقط الاب اللي تم حذفه
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
        Schema::dropIfExists('cars');
    }
}
