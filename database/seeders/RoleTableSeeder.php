<?php

namespace Database\Seeders;

use App\Models\RoleCategory;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Post
        $post_create = Permission::create([
            'name' => Permission::post_create,
            'display_name' => 'author_create',
        ]);

        $post_edit = Permission::create([
            'name' => Permission::post_edit,
            'display_name' => 'author_create',
        ]);

        $post_index = Permission::create([
            'name' => Permission::post_index,
            'display_name' => 'post_index',
        ]);

        //Author
        $author_create = Permission::create([
            'name' => Permission::author_create,
            'display_name' => 'author_create',
        ]);


        $author_edit = Permission::create([
            'name' => Permission::author_edit,
            'display_name' => 'author_edit',
        ]);


        $author_index = Permission::create([
            'name' => Permission::author_index,
            'display_name' => 'author_index',
        ]);


        //SA
        $saRole =   Role::create([
            'name' => Role::sa,
            'display_name' => 'Super Admin',
        ]);


        $saRole->attachPermission($author_create);
        $saRole->attachPermission($author_edit);
        $saRole->attachPermission($author_index);

        $saRole->attachPermission($post_create);
        $saRole->attachPermission($post_edit);
        $saRole->attachPermission($post_index);

        $gaRole =   Role::create([
            'name' => Role::ga,
            'display_name' => 'General Admin',
        ]);


        $gaRole->attachPermission($author_create);
        $gaRole->attachPermission($author_edit);
        $gaRole->attachPermission($author_index);




        Role::create([
            'name' => Role::author,
            'display_name' => 'Author',
        ]);
    }
}