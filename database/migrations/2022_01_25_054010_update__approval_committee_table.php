<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateApprovalCommitteeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('_approval_committee', function (Blueprint $table) {
            // $table->renameColumn('id', 'approvalCommittee_id');
            $table->dropColumn('approvalCommitteeStaffID');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('_approval_committee', function (Blueprint $table) {
            $table->string('approvalCommitteeStaffID');
        });
    }
}
