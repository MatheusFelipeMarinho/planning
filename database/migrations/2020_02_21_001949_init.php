<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Init extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_user', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->string('name');

            $table->timestamps();
        });

        Schema::create('person', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->string('name');

            $table->string('cpf');

            $table->string('function');

            $table->timestamps();
        });

        Schema::create('company', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->string('name');

            $table->string('cnpj');

            $table->string('category_id');

            $table->timestamps();
        });

        Schema::create('project', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->string('name');

            $table->string('description');

            $table->dateTime('date_begin');

            $table->dateTime('date_end');

            $table->timestamps();
        });

        Schema::create('resource', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->string('name');

            $table->string('description');

            $table->timestamps();
        });

        Schema::create('task', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->string('name');

            $table->string('description');

            $table->dateTime('date_begin_planning');

            $table->dateTime('date_end_planning');

            $table->dateTime('date_begin_real');

            $table->dateTime('date_end_real');

            $table->string('progress');

            $table->enum('status', ['n', 'a', 'p', 'c'])->comment('n = Não iniciado a = em andamento  p = parado c = concluido');

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
        Schema::drop('task');

        Schema::drop('resource');

        Schema::drop('project');

        Schema::drop('company');

        Schema::drop('person');

        Schema::drop('master_user');
    }
}
