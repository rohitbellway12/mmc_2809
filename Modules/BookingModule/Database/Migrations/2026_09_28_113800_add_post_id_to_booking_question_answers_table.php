<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPostIdToBookingQuestionAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('booking_question_answers', function (Blueprint $table) {
            $table->uuid('booking_id')->nullable()->change();
            $table->foreignUuid('post_id')->nullable()->after('booking_id')->constrained('posts')->onDelete('cascade');
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
            $table->dropForeign(['post_id']);
            $table->dropColumn('post_id');
            $table->uuid('booking_id')->nullable(false)->change();
        });
    }
}
