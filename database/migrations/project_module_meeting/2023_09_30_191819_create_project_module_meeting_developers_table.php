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
        Schema::create('project_module_meeting_developers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('project_id')->nullable();
            $table->bigInteger('project_module_id')->nullable();
            $table->bigInteger('project_module_meeting_id')->nullable();
            $table->bigInteger('project_module_meeting_discussion_id')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->string('name',100)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_module_meeting_developers');
    }
};
