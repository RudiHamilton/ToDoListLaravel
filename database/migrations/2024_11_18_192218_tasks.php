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
            $table->timestamp('task_date_assigned')->useCurrent(); 
            $table->date('task_date_due');
            $table->string('task_urgency');
            $table->boolean('task_complete')->default(false);
            $table->date('task_complete_date')->nullable();
            $table->timestamps();
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
