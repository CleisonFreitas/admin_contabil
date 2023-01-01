<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [];
        if(!User::where('email', 'admin@admin.com.br')->first()){
            $admin = [
                "name" => "admin",
                "email" => "admin@admin.com.br",
                "email_verified_at" => NULL,
                "password" => Hash::make("4PmpffSMeB"),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
                "deleted_at" => NULL,
            ];
            $users[] = $admin;
        }

        DB::table("users")->insert($users);

        $userAdmin = User::where('email', 'admin@admin.com.br')->first();
        $userAdmin->assignRole('Super Admin');
    }
}
