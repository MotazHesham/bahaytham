<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 18,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 19,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 20,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 21,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 22,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 23,
                'title' => 'partner_create',
            ],
            [
                'id'    => 24,
                'title' => 'partner_edit',
            ],
            [
                'id'    => 25,
                'title' => 'partner_show',
            ],
            [
                'id'    => 26,
                'title' => 'partner_delete',
            ],
            [
                'id'    => 27,
                'title' => 'partner_access',
            ],
            [
                'id'    => 28,
                'title' => 'project_create',
            ],
            [
                'id'    => 29,
                'title' => 'project_edit',
            ],
            [
                'id'    => 30,
                'title' => 'project_show',
            ],
            [
                'id'    => 31,
                'title' => 'project_delete',
            ],
            [
                'id'    => 32,
                'title' => 'project_access',
            ],
            [
                'id'    => 33,
                'title' => 'general_setting_access',
            ],
            [
                'id'    => 34,
                'title' => 'slider_create',
            ],
            [
                'id'    => 35,
                'title' => 'slider_edit',
            ],
            [
                'id'    => 36,
                'title' => 'slider_show',
            ],
            [
                'id'    => 37,
                'title' => 'slider_delete',
            ],
            [
                'id'    => 38,
                'title' => 'slider_access',
            ],
            [
                'id'    => 39,
                'title' => 'aboutu_create',
            ],
            [
                'id'    => 40,
                'title' => 'aboutu_edit',
            ],
            [
                'id'    => 41,
                'title' => 'aboutu_show',
            ],
            [
                'id'    => 42,
                'title' => 'aboutu_delete',
            ],
            [
                'id'    => 43,
                'title' => 'aboutu_access',
            ],
            [
                'id'    => 44,
                'title' => 'contact_create',
            ],
            [
                'id'    => 45,
                'title' => 'contact_edit',
            ],
            [
                'id'    => 46,
                'title' => 'contact_show',
            ],
            [
                'id'    => 47,
                'title' => 'contact_delete',
            ],
            [
                'id'    => 48,
                'title' => 'contact_access',
            ],
            [
                'id'    => 49,
                'title' => 'said_about_us_create',
            ],
            [
                'id'    => 50,
                'title' => 'said_about_us_edit',
            ],
            [
                'id'    => 51,
                'title' => 'said_about_us_show',
            ],
            [
                'id'    => 52,
                'title' => 'said_about_us_delete',
            ],
            [
                'id'    => 53,
                'title' => 'said_about_us_access',
            ],
            [
                'id'    => 54,
                'title' => 'client_managment_access',
            ],
            [
                'id'    => 55,
                'title' => 'client_create',
            ],
            [
                'id'    => 56,
                'title' => 'client_edit',
            ],
            [
                'id'    => 57,
                'title' => 'client_show',
            ],
            [
                'id'    => 58,
                'title' => 'client_delete',
            ],
            [
                'id'    => 59,
                'title' => 'client_access',
            ],
            [
                'id'    => 60,
                'title' => 'service_create',
            ],
            [
                'id'    => 61,
                'title' => 'service_edit',
            ],
            [
                'id'    => 62,
                'title' => 'service_show',
            ],
            [
                'id'    => 63,
                'title' => 'service_delete',
            ],
            [
                'id'    => 64,
                'title' => 'service_access',
            ],
            [
                'id'    => 65,
                'title' => 'request_service_create',
            ],
            [
                'id'    => 66,
                'title' => 'request_service_edit',
            ],
            [
                'id'    => 67,
                'title' => 'request_service_show',
            ],
            [
                'id'    => 68,
                'title' => 'request_service_delete',
            ],
            [
                'id'    => 69,
                'title' => 'request_service_access',
            ],
            [
                'id'    => 70,
                'title' => 'consultant_create',
            ],
            [
                'id'    => 71,
                'title' => 'consultant_edit',
            ],
            [
                'id'    => 72,
                'title' => 'consultant_show',
            ],
            [
                'id'    => 73,
                'title' => 'consultant_delete',
            ],
            [
                'id'    => 74,
                'title' => 'consultant_access',
            ],
            [
                'id'    => 75,
                'title' => 'faq_management_access',
            ],
            [
                'id'    => 76,
                'title' => 'faq_category_create',
            ],
            [
                'id'    => 77,
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => 78,
                'title' => 'faq_category_show',
            ],
            [
                'id'    => 79,
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => 80,
                'title' => 'faq_category_access',
            ],
            [
                'id'    => 81,
                'title' => 'faq_question_create',
            ],
            [
                'id'    => 82,
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => 83,
                'title' => 'faq_question_show',
            ],
            [
                'id'    => 84,
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => 85,
                'title' => 'faq_question_access',
            ],
            [
                'id'    => 86,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
