<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProposalsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('proposals_users', function (Blueprint $table) {
            //
            Schema::create('proposal_user', function (Blueprint $table) {
                $table->foreignId('proposal_id')->constrained();
                $table->foreignId('user_id')->constrained();
               
               
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('proposals_users', function (Blueprint $table) {
            //
            Schema::dropIfExists('proposals_users');
        });
    }
}
