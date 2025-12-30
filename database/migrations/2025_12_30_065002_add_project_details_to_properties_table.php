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
        Schema::table('properties', function (Blueprint $table) {
            $table->string('project_type')->nullable()->after('country'); // Loại dự án
            $table->integer('total_products')->nullable()->after('project_type'); // Tổng số sản phẩm
            $table->string('delivery_time')->nullable()->after('total_products'); // Thời gian bàn giao
            $table->string('ownership_duration')->nullable()->after('delivery_time'); // Thời gian sở hữu
            $table->text('facilities')->nullable()->after('description'); // Tiện ích
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->dropColumn([
                'project_type',
                'total_products',
                'delivery_time',
                'ownership_duration',
                'facilities'
            ]);
        });
    }
};
