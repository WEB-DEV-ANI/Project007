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
        Schema::create('plans', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('plan_name'); // Name of the plan
            $table->string('plan_code')->unique(); // Unique code of the plan
            $table->decimal('price', 10, 2); // Price of the plan
            $table->integer('validity'); // Validity in days (or another unit of time, as needed)
            $table->enum('status', ['active', 'inactive', 'suspended'])->default('active'); // Plan status
            $table->text('services'); // Services included in the plan (can be JSON or comma-separated list)
            $table->string('service_category'); // Category of the services
            $table->text('plan_description')->nullable(); // Description of the plan
            $table->timestamps(); // Timestamps for created_at and updated_at
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
