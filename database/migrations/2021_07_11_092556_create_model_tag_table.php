<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_tag', function (Blueprint $table) {
            $table->foreignId('modell_id')->constrained('modells', 'id')->cascadeOnDelete();
            $table->foreignId('tag_id')->constrained('tags', 'id')->cascadeOnDelete();

            $table->primary(['modell_id', 'tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('model_tag');
    }
}
