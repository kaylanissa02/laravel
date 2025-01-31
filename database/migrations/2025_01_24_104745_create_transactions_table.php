<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->text('name');
            $table->text('address');
            $table->text('phone');
            $table->date('date');
            $table->unsignedBigInteger('court_id');
            $table->foreign('court_id')->references('id')->on('courts');
            $table->time('starttime');
            $table->time('endtime');
            $table->integer('costume');
            $table->integer('shoes');
            $table->integer('grandtotal');
            $table->integer('paytotal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
