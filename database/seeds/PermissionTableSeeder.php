<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [

            [
                'name' => 'role-read',
                'display_name' => 'Display Role',
                'description' => 'Display Role'
            ],
            [
                'name' => 'role-create',
                'display_name' => 'Create Role',
                'description' => 'Create Role'
            ],
            [
                'name' => 'role-edit',
                'display_name' => 'Edit Role',
                'description' => 'Edit Role'
            ],
            [
                'name' => 'role-delete',
                'display_name' => 'Delete Role',
                'description' => 'Delete Role'
            ],
            [
                'name' => 'notebook-list',
                'display_name' => 'Display Notebook Listing',
                'description' => 'Display Notebook Listing'
            ],
            [
                'name' => 'notebook-create',
                'display_name' => 'Create Notebook',
                'description' => 'Create Notebook'
            ],
            [
                'name' => 'notebook-edit',
                'display_name' => 'Edit Notebook',
                'description' => 'Edit Notebook'
            ],
            [
                'name' => 'notebook-delete',
                'display_name' => 'Delete Notebook',
                'description' => 'Delete Notebook'
            ],
            [
                'name' => '',
                'display_name' => '',
                'description' => ''
            ],

        ];
        foreach($permission as $key => $value){
            Permission::create($value);
        }
    }
}
