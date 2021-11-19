<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('programmeBudget')->nullable();
            $table->string('programmeName')->nullable();
            $table->longText('programmeOrganizer')->nullable();
            $table->longText('venue')->nullable();
            $table->date('date');

            $table->boolean('studentDrivenProgramme')->default(0);
            $table->boolean('departmentDrivenProgramme')->default(0);
            $table->boolean('invitationalProgramme')->default(0);
            $table->boolean('jointProgramme')->default(0);
            $table->boolean('creditedProgramme')->default(0);
            $table->string('othersProgramme')->nullable();

            $table->longText('collaborations')->nullable();
            $table->longText('kullDeptUnitInCharge')->nullable();
            $table->longText('societyClubAssociation')->nullable();

            $table->boolean('participationActivity')->default(0);
            $table->boolean('competitionActivity')->default(0);

            $table->boolean('universityLevel')->default(0);
            $table->boolean('nationalLevel')->default(0);
            $table->boolean('InternationalLevel')->default(0);
            $table->boolean('societyDepartmentLevel')->default(0);
            $table->boolean('compulsoryProgrammeLevel')->default(0);

            $table->integer('localParticipant')->default(0);
            $table->integer('InternationalParticipant')->default(0);

            $table->boolean('attendingCeremonyActivity')->default(0);
            $table->boolean('bullettinNewsletterActivity')->default(0);
            $table->boolean('communityServiceActivity')->default(0);
            $table->boolean('counselingActivity')->default(0);
            $table->boolean('promotionBoothActivity')->default(0);
            $table->boolean('culturalActivity')->default(0);
            $table->boolean('debateActivity')->default(0);
            $table->boolean('educationalTripActivity')->default(0);
            $table->boolean('entrepreneurshipActivity')->default(0);
            $table->boolean('annualGrandMeetingActivity')->default(0);
            $table->boolean('intellectualActivity')->default(0);
            $table->boolean('leadershipActivity')->default(0);
            $table->boolean('recreationalActivity')->default(0);
            $table->boolean('socialGatheringActivity')->default(0);
            $table->boolean('seminarConferenceActivity')->default(0);
            $table->boolean('spiritualActivity')->default(0);
            $table->boolean('sportActivity')->default(0);
            $table->boolean('trainingActivity')->default(0);
            $table->boolean('uniformBodiesActivity')->default(0);

            $table->boolean('sdgGoal1')->default(0);
            $table->boolean('sdgGoal2')->default(0);
            $table->boolean('sdgGoal3')->default(0);
            $table->boolean('sdgGoal4')->default(0);
            $table->boolean('sdgGoal5')->default(0);
            $table->boolean('sdgGoal6')->default(0);
            $table->boolean('sdgGoal7')->default(0);
            $table->boolean('sdgGoal8')->default(0);
            $table->boolean('sdgGoal9')->default(0);
            $table->boolean('sdgGoal10')->default(0);
            $table->boolean('sdgGoal11')->default(0);
            $table->boolean('sdgGoal12')->default(0);
            $table->boolean('sdgGoal13')->default(0);
            $table->boolean('sdgGoal14')->default(0);
            $table->boolean('sdgGoal15')->default(0);
            $table->boolean('sdgGoal16')->default(0);
            $table->boolean('sdgGoal17')->default(0);

            $table->boolean('maqasidShariahFaith')->default(0);
            $table->boolean('maqasidShariahLife')->default(0);
            $table->boolean('maqasidShariahIntellect')->default(0);
            $table->boolean('maqasidShariahLineage')->default(0);
            $table->boolean('maqasidShariahWealth')->default(0);

            $table->boolean('missionOfIiumIslamization')->default(0);
            $table->boolean('missionOfIiumInternationalization')->default(0);
            $table->boolean('missionOfIiumIntegration')->default(0);
            
            $table->string('programmeManagerName')->nullable();
            $table->string('programmeManagerMatricNo')->nullable();
            $table->string('programmeManagerPhoneNo')->nullable();

            $table->string('programmeSecretaryName')->nullable();
            $table->string('programmeSecretaryMatricNo')->nullable();
            $table->string('programmeSecretaryPhoneNo')->nullable();

            $table->string('programmeTreasurerName')->nullable();
            $table->string('programmeTreasurerMatricNo')->nullable();
            $table->string('programmeTreasurerPhoneNo')->nullable();

            $table->string('presidentClubSocietyName')->nullable();
            $table->string('presidentClubSocietyMatricNo')->nullable();
            $table->string('presidentClubSocietyPhoneNo')->nullable();

            $table->integer('balanceBudget')->nullable();
            $table->integer('budgetRequestedFromSTADDToCitra')->nullable();
            $table->integer('budgetRequestedFromKuliyyah')->nullable();
            $table->integer('budgetRequestedFromMahallah')->nullable();
            $table->integer('budgetRequestedFromSponsors')->nullable();

            $table->string('typeTransportation')->nullable();
            $table->string('quantityTransportation')->nullable();

            $table->string('approvalCommittee')->nullable();
            $table->string('approvalCommitteePosition')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proposals');
    }
}
