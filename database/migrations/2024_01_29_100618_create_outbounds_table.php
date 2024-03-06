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
        Schema::create('outbounds', function (Blueprint $table) {
            $table->id();
            $table->string('location_number');
            $table->string('asset_number');
            $table->string('name');
            $table->unsignedBigInteger('device_id');
            $table->unsignedBigInteger('category_statuses_id');
            $table->unsignedBigInteger('conditions_id');
            $table->unsignedBigInteger('locations_id');
            $table->integer('create_user_id');
            $table->integer('approval_user_id');
            $table->text('explanation');
            $table->string('pic');
            $table->timestamps();

            $table->foreign('asset_number')->references('asset_number')->on('assets');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('outbounds');
    }
};
