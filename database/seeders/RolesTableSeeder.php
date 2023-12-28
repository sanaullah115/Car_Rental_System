<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Roles;
use Carbon\Carbon;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles=[
            ['role_name'=>'Admin','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['role_name'=>'User','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ];
        Roles::insert($roles);
    }
}
