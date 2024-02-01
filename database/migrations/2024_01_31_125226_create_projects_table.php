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
            $table->string('projectID'); 
            $table->string('projectTitle'); 
            $table->foreignId('staffId')->constrained('lead_developers');
            $table->string('developer'); 
            $table->date('startDate'); 
            $table->date('endDate'); 
            $table->string('pic'); 
            $table->string('methodology'); 
            $table->string('platform'); 
            $table->string('deployment'); 
            $table->string('Description'); 
            $table->string('status');
            $table->softDeletes(); 
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
