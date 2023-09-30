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
        Schema::create('project_module_phase_tasks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('project_id')->nullable();
            $table->bigInteger('project_module_id')->nullable();
            $table->bigInteger('project_module_phase_id')->nullable();
            $table->bigInteger('project_module_phase_plan_id')->nullable();

            $table->date("task_start_date");
            $table->enum("stage",["pending","working","testing","bug_fix","error_fix","end"]);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_module_phase_tasks');
    }
};
