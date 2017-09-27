<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Orchestra\Tenanti\Migration;

class UserTenantCreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @param  string|int  $id
     * @param  \Illuminate\Database\Eloquent\Model  $model
     *
     * @return void
     */
    public function up($id, Model $model)
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('log_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @param  string|int  $id
     * @param  \Illuminate\Database\Eloquent\Model  $model
     *
     * @return void
     */
    public function down($id, Model $model)
    {
        Schema::drop('logs');
    }
}
