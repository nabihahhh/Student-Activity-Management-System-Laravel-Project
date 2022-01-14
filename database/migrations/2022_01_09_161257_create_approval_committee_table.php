<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprovalCommitteeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_approval_committee', function (Blueprint $table) {
            $table->increments('id');
            $table->string('approvalCommitteeStaffID');
            $table->string('approvalCommitteeName')->nullable();
            $table->string('approvalCommitteeUsername')->nullable();
            $table->string('approvalCommitteePhoneNo')->nullable();
            $table->string('approvalCommitteeOrg')->nullable();
            $table->string('approvalCommitteePosition')->nullable();
            $table->timestamps();
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
            Schema::dropIfExists('_approval_committee');
        });
    }
}
