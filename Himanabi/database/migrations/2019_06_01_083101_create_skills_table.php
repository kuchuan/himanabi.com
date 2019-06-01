<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->bigIncrements('skills_id');
            $table->bigInteger('skills_users');
            $table->boolean('toggle_user');
            $table->string('skills_category', 60);
            $table->string('skills_name', 60);
            $table->float('skills_experience');
            $table->float('skills_get');
            $table->string('skills_explanation', 255);
            $table->string('skills_enthusiasm', 255);
            $table->string('skills_area', 60);
            $table->timestampsTz();

            $table->string('skills_picture', 255);
            $table->boolean('Interest01');
            $table->boolean('Interest02');
            $table->boolean('Interest03');
            $table->boolean('Interest04');
            $table->boolean('Interest05');
            $table->boolean('Interest06');
            $table->boolean('Interest07');
            $table->boolean('Interest08');
            $table->boolean('Interest09');
            $table->boolean('Interest10');
            $table->boolean('Interest11');
            $table->boolean('Interest12');
            $table->boolean('Interest13');
            $table->boolean('Interest14');
            $table->boolean('Interest15');
            $table->boolean('Interest16');
            $table->boolean('Interest17');
            $table->boolean('Interest18');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skills');
    }
}
