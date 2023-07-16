<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->string('email', 100);
            $table->enum('gender', ["M", "F"])->nullable();
            $table->text('address');
            $table->date('DOB')->nullable();
            $table->string('password');
            $table->boolean('status')->default(1);
            $table->integer('points')->default(0);
            $table->unsignedBigInteger('grp_id');
            $table->foreign('grp_id')->references('grp_id')->on('group'); //foreign key constraint
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
        Schema::dropIfExists('customers');
    }
};
