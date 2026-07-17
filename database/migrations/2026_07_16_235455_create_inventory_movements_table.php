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
        Schema::create('inventory_movements', function (Blueprint $table) {
            /*
            |--------------------------------------------------------------------------
            | Identifiers
            |--------------------------------------------------------------------------
            */

            $table->id();
            $table->uuid('uuid')->unique();

            /*
            |--------------------------------------------------------------------------
            | Relationships
            |--------------------------------------------------------------------------
            */

            $table->foreignId('product_id')
                ->constrained('products')
                ->restrictOnDelete();

            $table->foreignId('user_id')
                ->constrained('users')
                ->restrictOnDelete();

            /*
            |--------------------------------------------------------------------------
            | Movement Information
            |--------------------------------------------------------------------------
            */

            $table->string('movement_type');
            $table->integer('quantity');

            $table->text('notes')->nullable();
            $table->string('reference_number')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Timestamp
            |--------------------------------------------------------------------------
            */

            $table->timestamp('created_at')->useCurrent();

            /*
            |--------------------------------------------------------------------------
            | Indexes
            |--------------------------------------------------------------------------
            */

            $table->index('movement_type');
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_movements');
    }
};