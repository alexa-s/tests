<?php
 
class UserTableSeeder extends Seeder {
 
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vader = DB::table('users')->insert([
                'firstname' => 'Darth',
                'lastname'  => 'Vader',
                'email'      => 'darthv@deathstar.com',
                'password'   => Hash::make('thedarkside'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]);
 
        DB::table('users')->insert([
                'firstname' => 'Luke',
                'lastname'  => 'Skywalker',
                'email'      => 'lightwalker@rebels.com',
                'password'   => Hash::make('hesnotmydad'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]);
 
        DB::table('users')->insert([
                'firstname' => 'Yoda',
                'lastname'  => 'Unknown',
                'email'      => 'dancingsmallman@rebels.com',
                'password'   => Hash::make('yodaIam'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]);
    }
 
}