<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'phone_number'                    => 'Phone Number',
            'phone_number_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
            'approved'                 => 'Approved',
            'approved_helper'          => ' ',
            'user_type'                => 'User Type',
            'user_type_helper'         => ' ',
        ],
    ],
    'auditLog' => [
        'title'          => 'Audit Logs',
        'title_singular' => 'Audit Log',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'description'         => 'Description',
            'description_helper'  => ' ',
            'subject_id'          => 'Subject ID',
            'subject_id_helper'   => ' ',
            'subject_type'        => 'Subject Type',
            'subject_type_helper' => ' ',
            'user_id'             => 'User ID',
            'user_id_helper'      => ' ',
            'properties'          => 'Properties',
            'properties_helper'   => ' ',
            'host'                => 'Host',
            'host_helper'         => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
        ],
    ],
    'userAlert' => [
        'title'          => 'User Alerts',
        'title_singular' => 'User Alert',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'alert_text'        => 'Alert Text',
            'alert_text_helper' => ' ',
            'alert_link'        => 'Alert Link',
            'alert_link_helper' => ' ',
            'user'              => 'Users',
            'user_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
        ],
    ],
    'partner' => [
        'title'          => 'Partners',
        'title_singular' => 'Partner',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'image'             => 'Image',
            'image_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'project' => [
        'title'          => 'Projects',
        'title_singular' => 'Project',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => ' ',
            'name'                    => 'Name',
            'name_helper'             => ' ',
            'address'                 => 'Address',
            'address_helper'          => ' ',
            'created_at'              => 'Created at',
            'created_at_helper'       => ' ',
            'updated_at'              => 'Updated at',
            'updated_at_helper'       => ' ',
            'deleted_at'              => 'Deleted at',
            'deleted_at_helper'       => ' ',
            'name_ar'                 => 'Name Ar',
            'name_ar_helper'          => ' ',
            'owner'                   => 'Owner',
            'owner_helper'            => ' ',
            'client'                  => 'Client',
            'client_helper'           => ' ',
            'duration'                => 'Duration',
            'duration_helper'         => ' ',
            'working_area'            => 'Working Area',
            'working_area_helper'     => ' ',
            'description'             => 'Description',
            'description_helper'      => ' ',
            'main_image'              => 'Main Image',
            'main_image_helper'       => ' ',
            'images'                  => 'Images',
            'images_helper'           => ' ',
            'published'               => 'Published',
            'published_helper'        => ' ',
            'meta_title'              => 'Meta Title',
            'meta_title_helper'       => 'it helps to increase showing in google search',
            'meta_description'        => 'Meta Description',
            'meta_description_helper' => ' ',
        ],
    ],
    'generalSetting' => [
        'title'          => 'General Settings',
        'title_singular' => 'General Setting',
    ],
    'slider' => [
        'title'          => 'Sliders',
        'title_singular' => 'Slider',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'image'             => 'Image',
            'image_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'details'           => 'Details',
            'details_helper'    => ' ',
            'published'         => 'Published',
            'published_helper'  => ' ',
            'link'              => 'Link',
            'link_helper'       => ' ',
        ],
    ],
    'aboutu' => [
        'title'          => 'Aboutus',
        'title_singular' => 'Aboutu',
        'fields'         => [
            'id'                           => 'ID',
            'id_helper'                    => ' ',
            'description'                  => 'Description',
            'description_helper'           => ' ',
            'mission'                      => 'Mission',
            'mission_helper'               => ' ',
            'vision'                       => 'Vision',
            'vision_helper'                => ' ',
            'created_at'                   => 'Created at',
            'created_at_helper'            => ' ',
            'updated_at'                   => 'Updated at',
            'updated_at_helper'            => ' ',
            'deleted_at'                   => 'Deleted at',
            'deleted_at_helper'            => ' ',
            'site_name'                    => 'Site Name',
            'site_name_helper'             => ' ',
            'logo'                         => 'Logo',
            'logo_helper'                  => ' ',
            'aboutus_image'                => 'Aboutus Image',
            'aboutus_image_helper'         => ' ',
            'president_image'              => 'President Image',
            'president_image_helper'       => ' ',
            'president_description'        => 'President Description',
            'president_description_helper' => ' ',
            'address'                      => 'Address',
            'address_helper'               => ' ',
            'phone_number'                 => 'Phone Number',
            'phone_number_helper'          => ' ',
            'email'                        => 'Email',
            'email_helper'                 => ' ',
            'author_seo'                   => 'SEO Author',
            'author_seo_helper'            => ' ',
            'sitemap_link_seo'             => 'SEO Site Map Link',
            'sitemap_link_seo_helper'      => ' ',
            'keywords_seo'                 => 'SEO Keywords',
            'keywords_seo_helper'          => ' ',
            'description_seo'              => 'SEO Description',
            'description_seo_helper'       => ' ',
        ],
    ],
    'contact' => [
        'title'          => 'Contact',
        'title_singular' => 'Contact',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'email'             => 'Email',
            'email_helper'      => ' ',
            'message'           => 'Message',
            'message_helper'    => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'saidAboutUs' => [
        'title'          => 'Said About Us',
        'title_singular' => 'Said About Us',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'user'              => 'القائل',
            'user_helper'       => ' ',
            'text'              => 'النص',
            'text_helper'       => ' ',
            'photo'             => 'صورة القائل',
            'photo_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'clientManagment' => [
        'title'          => 'Client Managment',
        'title_singular' => 'Client Managment',
    ],
    'client' => [
        'title'          => 'Clients',
        'title_singular' => 'Client',
    ],
    'service' => [
        'title'          => 'Services',
        'title_singular' => 'Service',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'image'                    => 'Image',
            'image_helper'             => ' ',
            'short_description'        => 'Short Description',
            'short_description_helper' => ' ',
            'description'              => 'Description',
            'description_helper'       => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'requestService' => [
        'title'          => 'طلبات الخدمات',
        'title_singular' => 'طلبات الخدمات',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'user'                   => 'العميل',
            'user_helper'            => ' ',
            'consultant'                   => 'المستشار',
            'consultant_helper'            => ' ',
            'cost_1_file'                => 'أيصال سداد الدفعة الأولي',
            'cost_1_file_helper'         => ' ',
            'cost_2_file'                => 'أيصال سداد الدفعة الثانية',
            'cost_2_file_helper'         => ' ',
            'service'                => 'الخدمة',
            'service_helper'         => ' ',
            'contract'               => 'العقد',
            'contract_helper'        => ' ',
            'contract_accept'        => 'الموافقة علي العقد',
            'contract_accept_helper' => ' ',
            'cost_1'        => 'المبلغ المطلوب للدفعة الأولي',
            'cost_1_helper' => ' ',
            'cost_2'        => 'المبلغ المطلوب للدفعة الثانية',
            'cost_2_helper' => ' ',
            'start_date'        => 'بداية العقد',
            'start_date_helper' => ' ',
            'end_date'        => 'نهاية العقد',
            'end_date_helper' => ' ',
            'work_duration'        => 'مدة العمل',
            'work_duration_helper' => ' ',
            'required_price'        => 'المبلغ المطلوب',
            'required_price_helper' => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
            'status'                 => 'الرد',
            'status_helper'          => ' ',
            'stages'                 => 'المرحلة',
            'stages_helper'          => ' ',
            'finished_files'                 => 'الملفات النهائية',
            'finished_files_helper'          => ' ',
            'finished_files_from_admin'                 => 'الملفات النهائية من الأدارة',
            'finished_files_from_admin_helper'          => ' ',
        ],
    ],
    'consultant' => [
        'title'          => 'Consultants',
        'title_singular' => 'Consultant',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'description'              => 'الوصف',
            'description_helper'       => ' ',
            'photo'                    => 'الصورة',
            'photo_helper'             => ' ',
            'short_description'        => 'وصف مختصر',
            'short_description_helper' => ' ',
            'user'                     => 'User',
            'user_helper'              => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'faqManagement' => [
        'title'          => 'FAQ Management',
        'title_singular' => 'FAQ Management',
    ],
    'faqCategory' => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'category'          => 'Category',
            'category_helper'   => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'faqQuestion' => [
        'title'          => 'Questions',
        'title_singular' => 'Question',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'category'          => 'Category',
            'category_helper'   => ' ',
            'question'          => 'Question',
            'question_helper'   => ' ',
            'answer'            => 'Answer',
            'answer_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],

];
