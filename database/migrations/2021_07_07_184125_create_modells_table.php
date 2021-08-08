<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modells', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->date('release_year');
            $table->unsignedInteger('seats');
            $table->enum('fuel_type', ['solar', 'petrol','diesel']);
            $table->string('motor_type');
            $table->text('Specifications')->nullable();
            $table->foreignId('brand_id')->constrained('brands', 'id')->cascadeOnDelete();
            $table->foreignId('car_id')->nullable()->constrained('cars', 'id')->nullOnDelete();
            $table->string('image')->nullable();
            $table->unsignedFloat('price')->default(0);
            $table->unsignedFloat('sale_price')->default(0);
            $table->unsignedInteger('quantity')->default(0);
            $table->enum('status', ['in-stock', 'sold-out', 'draft']);

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
        Schema::dropIfExists('models');
    }
}
