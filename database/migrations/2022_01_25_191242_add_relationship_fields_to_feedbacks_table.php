<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToFeedbacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('feedbacks', function (Blueprint $table) {
            // $table->bigInteger('proposal_id');
            $table->foreign('proposal_id', 'proposal_fk_1721043')->references('id')->on('proposals');
            // $table->bigInteger('user_id');
            $table->foreign('user_id', 'user_fk_1721044')->references('id')->on('users');
        });
    }

}
