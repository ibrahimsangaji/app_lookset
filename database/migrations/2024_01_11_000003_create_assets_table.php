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
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('asset_number');
            $table->string('sto_number')->nullable();
            $table->string('name');
            $table->unsignedBigInteger('device_id');
            $table->unsignedBigInteger('software_id')->nullable();
            $table->unsignedBigInteger('category_statuses_id');
<<<<<<< HEAD:database/migrations/2024_01_11_000003_create_assets_table.php
            $table->text('explanation');
=======
            $table->unsignedBigInteger('conditions_id');
            $table->text('explanation')->nullable();
            $table->string('approval_status')->default('Pending');
            $table->unsignedBigInteger('create_user_id');
            $table->unsignedBigInteger('approval_user_id')->nullable();
>>>>>>> b1e0aae16abcedcd620b668dd20bd0ce8843d646:database/migrations/2024_01_16_053734_create_assets_table.php
            $table->timestamps();

            $table->foreign('asset_number')->references('asset_number')->on('inbounds');
            $table->foreign('sto_number')->references('sto_number')->on('outbounds')->nullable();
            $table->foreign('device_id')->references('id')->on('devices');
            $table->foreign('software_id')->references('id')->on('softwares')->nullable();
            $table->foreign('category_statuses_id')->references('id')->on('category_statuses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assets');
    }
};
