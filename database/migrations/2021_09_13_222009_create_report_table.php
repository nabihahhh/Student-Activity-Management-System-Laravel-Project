<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('programmeName')->nullable();
            $table->longText('programmeOrganizer')->nullable();
            $table->date('date');
            $table->longText('venue')->nullable();
            $table->integer('localParticipant')->nullable();
            $table->integer('internationalParticipant')->nullable();
            $table->integer('outsiderParticipant')->nullable();
            $table->longText('accompanyingOfficer')->nullable();
            $table->float('budgetSpent')->default(0);
            $table->float('outsideSponsorship')->default(0);
            $table->longText('collaborations')->nullable();
            $table->longText('vipAttended')->nullable();
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
            $table->longText('achievementsObservation')->nullable();
            $table->longText('shortcomings')->nullable();
            $table->longText('conclusion')->nullable();
            $table->longText('suggestions')->nullable();
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
        Schema::dropIfExists('reports');
    }
}
