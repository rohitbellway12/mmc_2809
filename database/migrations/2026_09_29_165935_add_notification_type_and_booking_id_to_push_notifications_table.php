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
        Schema::table('push_notifications', function (Blueprint $table) {
            $table->string('notification_type', 50)->nullable()->default('general')->after('to_users');
            $table->string('booking_id', 50)->nullable()->after('notification_type');
            $table->string('booking_status', 50)->nullable()->after('booking_id');
            $table->string('reference_id', 50)->nullable()->after('booking_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('push_notifications', function (Blueprint $table) {
            $table->dropColumn(['notification_type', 'booking_id', 'booking_status', 'reference_id']);
        });
    }
};
