<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->integer('receiver_id')->unsigned();
            $table->integer('assigned_id')->nullable();
            $table->integer('status_id');
            $table->integer('priority_id');
            $table->integer('category_id');
            $table->integer('department_id');
            $table->string('subject');
            $table->text('body');
            $table->timestamp('due_date')->nullable();
            $table->timestamp('is_read')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('tickets');
    }
}
