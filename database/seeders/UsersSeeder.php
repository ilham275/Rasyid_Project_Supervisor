<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Kurikulum Supervisor',
            'nip' => '0001',
            'alamat' => 'Garut',
            'role' => 'kurikulum',
            'supervisor' => 1,
            'email' => 'kurikulumsupervisor@abc.com',
            'password' => Hash::make('0001'),
        ]);
        User::create([
            'name' => 'Kepsek',
            'nip' => '0002',
            'alamat' => 'Bogor',
            'role' => 'kepsek',
            'supervisor' => 1,
            'email' => 'kepsek@abc.com',
            'password' => Hash::make('0002'),
        ]);

    }
}
