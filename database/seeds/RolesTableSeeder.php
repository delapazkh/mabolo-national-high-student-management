<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'admin',
            'description' => 'Creates form, edit form, delete form. Create user, edit user, delete user. View forms creted by others. Insert data in anyones form. Assign roles to admin, coordinator and working student. Assign what forms the workign student can view.',
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('roles')->insert([
            'name' => 'coordinator',
            'description' => 'Creates form, edit form and delete form. Create user, edit user and delete user. View forms creted by others. Insert data in anyones form. Assign roles to coordinator and working student. Assign what forms the workign student can view.',
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('roles')->insert([
            'name' => 'working_students',
            'description' => 'Can view a form specifically assigned to him. Insert data to the forms assigned to him.',
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
