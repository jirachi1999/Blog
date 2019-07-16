<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User([
            'name' => 'jirachi',
            'email'=> 'daigiachantran01@gmail.com',
            'password' => '$2y$10$nfbuev6WhnMgJYkr4iro.OwJpMikV5bC69ezubcl3IocYzukI4Isy',
            'remember_token' => null
        ]);
        $user->save();
        for ($i = 0; $i < 100; $i++) {
            $user = new \App\User([
                'name' => 'jirachi' . $i,
                'email'=> 'daigiachantran'. $i . '@gmail.com',
                'password' => '$2y$10$nfbuev6WhnMgJYkr4iro.OwJpMikV5bC69ezubcl3IocYzukI4Isy',
                'remember_token' => null
            ]);
            $user->save();
        }
    }
}
