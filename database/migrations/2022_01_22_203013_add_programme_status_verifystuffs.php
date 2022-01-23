<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProgrammeStatusVerifystuffs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('proposals', function (Blueprint $table) {
            //
            $table->string('programmeStatus')->default("Pending approvals");
            $table->string('verificationComment')->nullable();
            $table->date('startDate');
            $table->date('endDate');
            $table->dropColumn('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('proposals', function (Blueprint $table) {
            //
            $table->dropColumn('programmeStatus');
            $table->dropColumn('verificationComment');
            $table->dropColumn('startDate');
            $table->dropColumn('endDate');

            $table->string('date');
        });
    }
}
