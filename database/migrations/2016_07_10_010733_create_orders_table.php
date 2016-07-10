<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->date('ship_date');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->reference('id')->on('users');
            $table->integer('consecutive')->unsigned();
            $table->integer('order_state_id')->unsigned();
            $table->foreign('order_state_id')->reference('id')->on('order_states');
            $table->string('way_to_pay', 45);
            $table->boolean('verified')->default(0);
            $table->boolean('canceled')->default(0);
            $table->string('seller', 45);
            $table->boolean('status')->default(1);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}
