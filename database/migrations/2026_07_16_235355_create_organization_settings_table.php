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
        Schema::create('organization_settings', function (Blueprint $table) {
            $table->id();

            $table->string('organization_name');
            $table->string('business_type');

            $table->string('workspace_email');

            $table->string('phone')->nullable();
            $table->text('address')->nullable();

            $table->string('country')->nullable();
            $table->string('timezone')->default('Asia/Jakarta');
            $table->string('language')->default('id');

            $table->string('logo')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organization_settings');
    }
};