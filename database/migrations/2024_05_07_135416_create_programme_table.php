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
        Schema::create('programmes', function (Blueprint $table) {
            $table->id('programme_id');
            $table->string('title');
            $table->string('description');
            $table->string('goals');
            $table->string('period_of_time');
            $table->unsignedInteger('teacher_id');
            $table->date('start_date')->nullable();
            $table->date('finish_date')->nullable();
            $table->string('status');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programmes');
    }
};
