<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddApprovalCommitteesName extends Migration
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
            $table->string('approvalCommitteeName2')->nullable();
            $table->string('approvalCommitteeName3')->nullable();
            $table->string('approvalCommitteeName4')->nullable();
            $table->boolean('clarifyTick')->default(0);
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
            Schema::dropIfExists('proposals');
        });
    }
}
