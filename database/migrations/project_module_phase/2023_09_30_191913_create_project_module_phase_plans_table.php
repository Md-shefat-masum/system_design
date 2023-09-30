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
        Schema::create('project_module_phase_plans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('project_id')->nullable();
            $table->bigInteger('project_module_id')->nullable();
            $table->bigInteger('project_module_phase_id')->nullable();

            $table->string('title',150)->nullable();
            $table->date('plan_start_date')->nullable();
            $table->date('plan_end_date')->nullable();
            $table->date('work_start_date')->nullable();
            $table->date('work_end_date')->nullable();
            $table->date('deadline')->nullable();
            $table->integer('estimatted_hours')->nullable();
            $table->boolean('is_complete')->default(0);
            $table->enum("priority",["instant","heigh","medium","low","optional","next update"]);
            $table->date('date')->nullable();
            $table->text('details')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_module_phase_plans');
    }
};
