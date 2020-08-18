<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class,1)->create();
        // $user=new User;
        // $user->name='Admin';
        // $user->email='admin@mail.com';
        // $user->password=Hash::make('12345678');
        // $user->save();
        // $user->assignRole('admin');
    }
}
