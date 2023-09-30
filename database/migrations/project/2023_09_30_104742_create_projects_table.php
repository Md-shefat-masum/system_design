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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();

            $table->string('name', 200)->nullable();
            $table->date("start_date")->nullable();
            $table->date("end_date")->nullable();
            $table->text('overview')->nullable();
            $table->text('poroposal_intro')->nullable();
            $table->longText('excutive_summery')->nullable();

            $table->bigInteger('creator')->unsigned()->nullable();
            $table->string('slug',50)->nullable();
            $table->enum('status',['active','inactive'])->default('active');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
