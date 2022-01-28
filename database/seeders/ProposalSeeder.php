<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProposalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Proposal::class, 10)->create();

        foreach (Proposal::all() as $proposal){
            $user_id = \App\User::inRandomOrder()->pluck('id');
            $proposal->users()->attach($user_id);
        }
    }
}
