<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVerifyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verify', function (Blueprint $table) {
          $table->integer('id')->nullable();
          $table->string('programmeStatus')->nullable();
          $table->string('verificationComment')->nullable();
          $table->string('applicantName')->nullable();
          $table->integer('applicantMatric')->nullable();
          $table->string('applicantPhone')->nullable();
          $table->string('applicantEmail')->nullable();
          $table->string('applicantPosition')->nullable();
          $table->string('programmeBudget')->nullable();
          $table->string('programmeName')->nullable();
          $table->string('programmeOrganizer')->nullable();
          $table->string('programmeVenue')->nullable();
          $table->date('startDate')->nullable();
          $table->date('endDate')->nullable();
          $table->string('programmeType')->nullable();
          $table->string('collaborations')->nullable();
          $table->string('in-charge')->nullable();
          $table->string('soc_club_assoc')->nullable();
          $table->string('activityType')->nullable();
          $table->string('activityLevel')->nullable();
          $table->integer('localParticipant')->nullable();
          $table->integer('internationalParticipant')->nullable();
          $table->string('activityVariation')->nullable();
          $table->string('sdgGoal')->nullable();
          $table->string('maqasidShariah')->nullable();
          $table->string('missionOfIium')->nullable();
          $table->string('PMName')->nullable();
          $table->integer('PMMatric')->nullable();
          $table->string('PMPhone')->nullable();
          $table->string('SecretaryName')->nullable();
          $table->integer('SecretaryMatric')->nullable();
          $table->string('SecretaryPhone')->nullable();
          $table->string('TreasurerName')->nullable();
          $table->integer('TreasurerMatric')->nullable();
          $table->string('TreasurerPhone')->nullable();
          $table->string('PresidentName')->nullable();
          $table->integer('PresidentMatric')->nullable();
          $table->string('PresidentPhone')->nullable();
          $table->integer('budgetBalance')->nullable();
          $table->integer('budgetReqOrg')->nullable();
          $table->integer('budgetReqMahallah')->nullable();
          $table->integer('budgetReqKull')->nullable();
          $table->integer('budgetReqSponsor')->nullable();
          $table->integer('totalBudget')->nullable();
          $table->string('transportType')->nullable();
          $table->integer('transportQty')->nullable();
          $table->string('appCommitteeDept')->nullable();
          $table->string('appCommitteePosition')->nullable();
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
        Schema::dropIfExists('verify');
    }
}