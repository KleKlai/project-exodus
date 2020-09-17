<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //TODO: User Model Permission
        $read_user      = Permission::create(['name' => 'read user']);
        $create_user    = Permission::create(['name' => 'create user']);
        $update_user    = Permission::create(['name' => 'update user']);
        $delete_user    = Permission::create(['name' => 'delete user']);
        $recover_user   = Permission::create(['name' => 'recover user']);


        //TODO: Artwork Model Permission
        $read_art      = Permission::create(['name' => 'read art']);
        $create_art    = Permission::create(['name' => 'create art']);
        $update_art    = Permission::create(['name' => 'update art']);
        $delete_art    = Permission::create(['name' => 'delete art']);

        //TODO: Art Utilities
        $read_util     = Permission::create(['name' => 'read util']);
        $create_util   = Permission::create(['name' => 'create util']);
        $delete_util   = Permission::create(['name' => 'delete util']);

        //TODO: FAQ Model Permission
        $read_faq      = Permission::create(['name' => 'read faq']);
        $create_faq    = Permission::create(['name' => 'create faq']);
        $update_faq    = Permission::create(['name' => 'update faq']);
        $delete_faq    = Permission::create(['name' => 'delete faq']);


        //TODO: System Log
        $read_syslog     = Permission::create(['name' => 'read syslog']);
        $delete_systlog  = Permission::create(['name' => 'delete syslog']);

        //TODO: Roles
        $super_admin    = Role::create(['name' => 'Super-admin']);
        $admin          = Role::create(['name' => 'Admin']);
        $curator        = Role::create(['name' => 'Curator']);
        $artist         = Role::create(['name' => 'Artist']);

        /**
         * Assigning Role
         * Admin
         */

        //TODO: Admin User Model
        $admin->givePermissionTo('read user', 'update user', 'delete user');

        //TODO: Admin Artwork Model
        $admin->givePermissionTo('read art', 'update art', 'delete art');

        //TODO: Admin FAQ Model
        $admin->givePermissionTo('create faq', 'update faq', 'delete faq');

        //TODO: Admin Art Utilities
        $admin->givePermissionTo('read util', 'create util', 'delete util');

        //TODO: Admin System Log
        $admin->givePermissionTo('read syslog');

        /**
         * Curator
         */

        //TODO: Artwork
        $curator->givePermissionTo('read art', 'update art');

        /**
         * Artist
         */
        //TODO: Artwork
        $artist->givePermissionTo('read art', 'create art');
        // $artist->givePermissionTo('create art');


    }
}
