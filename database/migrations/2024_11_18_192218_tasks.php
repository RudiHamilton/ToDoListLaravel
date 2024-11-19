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
        Schema::create('Tasks', function(Blueprint $table){
            $table->id('task_id');
            $table->string('task_name');
            $table->longText('task_description');
            $table->date('task_date_assigned');
            $table->date('task_date_due');
            $table->string('task_urgency');
            $table->boolean('task_complete');
            $table->date('task_complete_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Tasks');
    }
};
