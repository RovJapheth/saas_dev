<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Teams;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $team = factory(Teams::class)->create([
            'name' => 'Ambongan'
        ]);


        $user = factory(User::class)->create([
                'name' => 'Klarshene',
                'last_name' => 'Aya-ay',
                'team_id' => $team->id,
                'email' => 'test@example.com'
        ]);
        $user->assignRole('team_lead');

        
        $user = factory(User::class)->create([
            'name' => 'Rov',
            'last_name' => 'Oracion',
            'team_id' => $team->id,
            'email' => 'test1@example.com'
        ]);
        $user->assignRole('user');

        $user = factory(User::class)->create([
            'name' => 'Geths Van',
            'last_name' => 'Villa',
            'team_id' => $team->id,
            'email' => 'test2@example.com'
        ]);
        $user->assignRole('user');

        $user = factory(User::class)->create([
            'name' => 'Victhor Jade',
            'last_name' => 'Racanday',
            'team_id' => $team->id,
            'email' => 'test3@example.com'
        ]);
        $user->assignRole('user');

        

    }
}
