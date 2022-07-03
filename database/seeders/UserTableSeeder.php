<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'document'        =>'123456789',
            'names'           =>'Super Admin',
            'lastnames'     =>'Super Admin',
            'email'           =>'superadmin@gmail.com',
            'password'        => Hash::make('12345678'),
            'rol'            =>'super-admin',
            'state'           =>'Activo',
        ]);

        DB::table('users')->insert([
            'document'        =>'788757',
            'names'           =>'Felipe',
            'lastnames'     =>'Suarez',
            'email'           =>'Felipe@gmail.com',
            'password'        => Hash::make('12345678'),
            'rol'            =>'super-admin',
            'state'           =>'Activo',
        ]);
        DB::table('users')->insert([
            'document'        =>'985445',
            'names'           =>'fulano',
            'lastnames'     =>' Admin',
            'email'           =>'fulanon@gmail.com',
            'password'        => Hash::make('12345678'),
            'rol'            =>'super-admin',
            'state'           =>'Activo',
        ]);

    }
}
