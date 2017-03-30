<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(User::class)->times(50)->make();
        User::insert($users->toArray());

        $user = User::find(1);
        $user->name = 'Rokhans';
        $user->email = 'youyunchuxiu@163.com';
        $user->password = bcrypt('hellomuzi');
        $user->is_admin = true;
        $user->save();
    }
}
