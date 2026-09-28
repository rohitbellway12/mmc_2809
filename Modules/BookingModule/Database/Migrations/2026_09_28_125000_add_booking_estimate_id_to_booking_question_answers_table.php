<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBookingEstimateIdToBookingQuestionAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('booking_question_answers', function (Blueprint $table) {
            $table->foreignUuid('booking_estimate_id')->nullable()->after('post_id')->constrained('booking_estimates')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('booking_question_answers', function (Blueprint $table) {
            $table->dropForeign(['booking_estimate_id']);
            $table->dropColumn('booking_estimate_id');
        });
    }
}
