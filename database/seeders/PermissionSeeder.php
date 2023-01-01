<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            'permission-list',
            'permission-create',
            'permission-edit',
            'permission-delete',
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'role-permission',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'profile-update',
            'file-manager',
            'general-setting',
            'slider-list',
            'slider-edit',
            'opening-edit',
            'headmaster-edit',
            'testimonial-list',
            'testimonial-create',
            'testimonial-edit',
            'testimonial-delete',
            'profile-edit',
            'history-edit',
            'vision-edit',
            'mission-list',
            'mission-create',
            'mission-edit',
            'mission-delete',
            'value-proposition-list',
            'value-proposition-create',
            'value-proposition-edit',
            'value-proposition-delete',
            'serviam-description-edit',
            'serviam-value-list',
            'serviam-value-create',
            'serviam-value-edit',
            'serviam-value-delete',
            'entrepreneurship-edit',
            'facility-list',
            'facility-create',
            'facility-edit',
            'facility-delete',
            'post-category-list',
            'post-category-create',
            'post-category-edit',
            'post-category-delete',
            'post-list',
            'post-create',
            'post-edit',
            'post-delete',
            'post-deleted',
            'post-publish',
            'gallery-category-list',
            'gallery-category-create',
            'gallery-category-edit',
            'gallery-category-delete',
            'gallery-list',
            'gallery-create',
            'gallery-edit',
            'gallery-delete',
            'gallery-deleted',
            'gallery-publish',
            'gallery-image',
            'school-activity-list',
            'school-activity-create',
            'school-activity-edit',
            'school-activity-delete',
            'school-activity-posted',
            'contact-edit'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}