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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('document_number')->unique();
            $table->string('asset_number');
            $table->string('name');
            $table->unsignedBigInteger('device_id');
            $table->unsignedBigInteger('software_id');
            $table->unsignedBigInteger('category_statuses_id');
            $table->unsignedBigInteger('conditions_id');
            $table->unsignedBigInteger('locations_id')->nullable();
            $table->integer('create_user_id');
            $table->integer('approval_user_id');
            $table->text('explanation');
            $table->string('pic')->nullable();
            $table->timestamps();

            // Menambahkan kondisi untuk memeriksa keberadaan tabel assets
            if (Schema::hasTable('assets')) {
                $table->foreign('asset_number')->references('id')->on('assets');
                $table->foreign('name')->references('id')->on('assets');
                $table->foreign('device_id')->references('id')->on('assets');
                $table->foreign('software_id')->references('id')->on('assets');
                $table->foreign('category_statuses_id')->references('id')->on('assets');
                $table->foreign('conditions_id')->references('id')->on('assets');
                $table->foreign('locations_id')->references('id')->on('locations');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
