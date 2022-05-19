<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users =[
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin'),
                'tgl_lahir' => null,
                'kelas'=>null,
                'level' => 'admin',
            ],
            [
                'name' => 'siswa',
                'email' => 'siswa@gmail.com',
                'password' => bcrypt('siswa'),
                'tgl_lahir' => null,
                'kelas' => '1',
                'level' => 'siswa',
            ],
        ];
        \DB::table('users')->insert($users);
    }
}
