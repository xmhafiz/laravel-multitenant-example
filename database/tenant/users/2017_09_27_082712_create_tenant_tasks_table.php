<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up($id, Model $model)
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('task_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down($id, Model $model)
    {
        Schema::drop("tasks");
    }
}
