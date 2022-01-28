<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToProposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('proposals', function (Blueprint $table) {
        //     $table->unsignedInteger('status_id')->nullable();
        //     $table->foreign('status_id', 'status_fk_1721035')->references('id')->on('statuses');
        //     $table->unsignedInteger('approvalCommittee_id')->nullable();
        //     $table->foreign('approvalCommittee_id', 'approvalCommittee_fk_1721036')->references('id')->on('users');
        //     $table->unsignedInteger('approvalCommittee2_id')->nullable();
        //     $table->foreign('approvalCommittee2_id', 'approvalCommittee2_fk_1721037')->references('id')->on('users');
        //     $table->unsignedInteger('approvalCommittee3_id')->nullable();
        //     $table->foreign('approvalCommittee3_id', 'approvalCommittee3_fk_1721036')->references('id')->on('users');
        //     $table->unsignedInteger('approvalCommittee4_id')->nullable();
        //     $table->foreign('approvalCommittee4_id', 'approvalCommittee4_fk_1721037')->references('id')->on('users');
        //     $table->unsignedInteger('created_by_id')->nullable();
        //     $table->foreign('created_by_id', 'created_by_fk_1721041')->references('id')->on('users');
        // });
    }

}
