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
        Schema::create('project_module_phase_releases', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('project_id')->nullable();
            $table->bigInteger('project_module_id')->nullable();
            $table->bigInteger('project_module_phase_id')->nullable();

            $table->string('title',150)->nullable();
            $table->date("date")->nullable();
            $table->text('description')->nullable();
            $table->text('issue')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_module_phase_releases');
    }
};
