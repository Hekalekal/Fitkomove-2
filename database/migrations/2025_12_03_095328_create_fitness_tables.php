<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // 1. Tabel Workouts
        Schema::create('workouts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('activity');
            $table->integer('duration'); // dalam menit
            $table->integer('calories');
            $table->date('date');
            $table->timestamps();
        });

        // 2. Tabel Nutrition
        Schema::create('nutritions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('food_name');
            $table->integer('calories');
            $table->enum('meal_type', ['Breakfast', 'Lunch', 'Dinner', 'Snack']);
            $table->date('date');
            $table->timestamps();
        });

        // 3. Tabel Progress (Berat Badan & Lingkar Tubuh)
        Schema::create('progress_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->decimal('weight', 5, 2); // Contoh: 70.50
            $table->decimal('waist', 5, 2)->nullable();
            $table->date('date');
            $table->timestamps();
        });
        
        // 4. Update Tabel Users (Menambah Target)
        Schema::table('users', function (Blueprint $table) {
            $table->string('fitness_goal')->nullable()->after('job'); // e.g., Weight Loss, Muscle Gain
            $table->integer('target_weight')->nullable()->after('fitness_goal');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('workouts');
        Schema::dropIfExists('nutritions');
        Schema::dropIfExists('progress_logs');
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['fitness_goal', 'target_weight']);
        });
    }
};