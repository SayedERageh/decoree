<?php

namespace Database\Seeders;

use App\Models\PageSeo;
use App\Models\SiteSetting;
use Illuminate\Database\Seeder;

class SiteSettingsSeeder extends Seeder
{
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | Site Settings
        |--------------------------------------------------------------------------
        */

        SiteSetting::updateOrCreate(
            ['id' => 1],
            [
                'site_name' => 'دمام ديكور | Dammam Decor',

                'primary_color' => '#ffffff',
                'primary_dark_color' => '#d9d9d9',

                'secondary_color' => '#080808',
                'secondary_dark_color' => '#111111',

                'light_blue_color' => '#f2f2f2',
                'light_color' => '#f8f8f8',

                'white_color' => '#ffffff',

                'text_color' => '#111111',
                'muted_color' => '#777777',

                'border_color' => '#dedede',

                'site_description' =>
                    'دمام ديكور | Dammam Decor شركة متخصصة في تصميم وتنفيذ الديكور الداخلي وتجديد المنازل والفلل في الدمام والخبر والقطيف، وتشمل خدماتنا ديكورات التلفزيون والخزائن وغرف النوم والمرايات والتكسيات الجدارية والمداخل وأركان الكوفي والترميم والتجديد.',
            ]
        );


        /*
        |--------------------------------------------------------------------------
        | SEO Pages
        |--------------------------------------------------------------------------
        */

        $pages = [

            /*
            |--------------------------------------------------------------------------
            | Home
            |--------------------------------------------------------------------------
            */

            'home' => [
                'title_ar' =>
                    'دمام ديكور | تصميم وتنفيذ الديكور الداخلي في الدمام والخبر والقطيف',

                'title_en' =>
                    'Dammam Decor | Interior Design & Home Renovation',

                'description_ar' =>
                    'دمام ديكور شركة متخصصة في تصميم وتنفيذ الديكور الداخلي وتجديد المنازل والفلل في الدمام والخبر والقطيف. نقدم ديكورات تلفزيون، غرف نوم، خزائن، مرايات، تكسيات جدارية، مداخل، أركان كوفي وترميم المنازل.',

                'description_en' =>
                    'Dammam Decor specializes in interior design and home renovation in Dammam, Khobar, and Qatif, offering TV wall designs, bedrooms, wardrobes, mirrors, wall finishes, entrances, coffee corners, and complete interior solutions.',

                'keywords_ar' =>
                    'دمام ديكور, ديكور الدمام, تصميم داخلي الدمام, شركة ديكور الدمام, ديكورات الدمام, تنفيذ ديكور الدمام, ديكور الخبر, ديكور القطيف, تصميم داخلي الخبر, تصميم داخلي القطيف, تجديد منازل الدمام, ترميم منازل الدمام, ديكورات تلفزيون الدمام, خزائن الدمام, غرف نوم الدمام, تكسيات جدارية الدمام, مداخل الدمام, ركن كوفي الدمام',

                'keywords_en' =>
                    'Dammam Decor, interior design Dammam, interior design company Dammam, home renovation Dammam, home decor Dammam, interior design Khobar, interior design Qatif, TV wall Dammam, wardrobes Dammam, bedroom design Dammam, wall finishes Dammam, home renovation Khobar',

                'og_title_ar' =>
                    'دمام ديكور | ديكور داخلي وتجديد المنازل',

                'og_title_en' =>
                    'Dammam Decor | Interior Design & Home Renovation',

                'og_description_ar' =>
                    'حلول متكاملة من دمام ديكور لتصميم وتنفيذ الديكور الداخلي وتجديد المنازل والفلل في الدمام والخبر والقطيف.',

                'og_description_en' =>
                    'Complete interior design and home renovation solutions by Dammam Decor in Dammam, Khobar, and Qatif.',
            ],


            /*
            |--------------------------------------------------------------------------
            | About
            |--------------------------------------------------------------------------
            */

            'about' => [
                'title_ar' =>
                    'من نحن | دمام ديكور | للديكور الداخلي وتجديد المنازل',

                'title_en' =>
                    'About Us | Dammam Decor',

                'description_ar' =>
                    'تعرف على دمام ديكور وخدماتنا في تصميم وتنفيذ الديكور الداخلي وتجديد وترميم المنازل والفلل في الدمام والخبر والقطيف، مع حلول عصرية ومخصصة لكل مساحة.',

                'description_en' =>
                    'Learn about Dammam Decor and our interior design, home renovation, and remodeling services for homes and villas in Dammam, Khobar, and Qatif.',

                'keywords_ar' =>
                    'من نحن دمام ديكور, دمام ديكور, شركة ديكور الدمام, تصميم داخلي الدمام, تنفيذ ديكور الدمام, تجديد منازل الدمام, ترميم منازل الدمام, ديكور الخبر, ديكور القطيف',

                'keywords_en' =>
                    'about Dammam Decor, Dammam Decor company, interior design Dammam, home renovation Dammam, interior design Khobar, interior design Qatif',

                'og_title_ar' =>
                    'من نحن | دمام ديكور',

                'og_title_en' =>
                    'About Dammam Decor',

                'og_description_ar' =>
                    'تعرف على دمام ديكور وخبرتنا في تصميم وتنفيذ الديكور الداخلي وتجديد المنازل في المنطقة الشرقية.',

                'og_description_en' =>
                    'Discover Dammam Decor and our experience in interior design and home renovation across the Eastern Province.',
            ],


            /*
            |--------------------------------------------------------------------------
            | Services
            |--------------------------------------------------------------------------
            */

            'services' => [
                'title_ar' =>
                    'خدمات دمام ديكور | تصميم وتنفيذ الديكور الداخلي',

                'title_en' =>
                    'Dammam Decor Services | Interior Design & Home Renovation',

                'description_ar' =>
                    'اكتشف خدمات دمام ديكور في تصميم وتنفيذ الديكور الداخلي وتجديد المنازل، بما يشمل ديكورات التلفزيون وغرف النوم والخزائن والمرايات والتكسيات والمداخل وأركان الكوفي والترميم.',

                'description_en' =>
                    'Explore Dammam Decor services including interior design, TV walls, bedrooms, wardrobes, mirrors, wall finishes, entrances, coffee corners, home renovation, and complete interior solutions.',

                'keywords_ar' =>
                    'خدمات دمام ديكور, خدمات الديكور الدمام, تصميم داخلي الدمام, تنفيذ ديكور الدمام, ديكورات تلفزيون الدمام, غرف نوم الدمام, خزائن الدمام, مرايات الدمام, تكسيات جدارية الدمام, مداخل الدمام, ركن كوفي الدمام, ترميم منازل الدمام, تجديد منازل الدمام, ديكور الخبر, ديكور القطيف',

                'keywords_en' =>
                    'Dammam Decor services, interior design Dammam, home renovation Dammam, TV wall design Dammam, bedroom design Dammam, wardrobes Dammam, mirrors Dammam, wall finishes Dammam, entrance design Dammam, coffee corner Dammam',

                'og_title_ar' =>
                    'خدمات دمام ديكور | Dammam Decor',

                'og_title_en' =>
                    'Dammam Decor Services',

                'og_description_ar' =>
                    'خدمات متكاملة لتصميم وتنفيذ الديكور الداخلي وتجديد المنازل والفلل في الدمام والخبر والقطيف.',

                'og_description_en' =>
                    'Complete interior design and home renovation services for homes and villas in Dammam, Khobar, and Qatif.',
            ],


            /*
            |--------------------------------------------------------------------------
            | Projects
            |--------------------------------------------------------------------------
            */

            'projects' => [
                'title_ar' =>
                    'أعمال دمام ديكور | مشاريع الديكور الداخلي وتجديد المنازل',

                'title_en' =>
                    'Dammam Decor Projects | Interior Design & Renovation',

                'description_ar' =>
                    'شاهد أعمال ومشاريع دمام ديكور في تصميم وتنفيذ الديكور الداخلي وتجديد المنازل والفلل، بما يشمل ديكورات التلفزيون وغرف النوم والخزائن والتكسيات والمداخل في الدمام والخبر والقطيف.',

                'description_en' =>
                    'Explore Dammam Decor projects in interior design, home renovation, TV walls, bedrooms, wardrobes, wall finishes, entrances, and complete interior solutions across Dammam, Khobar, and Qatif.',

                'keywords_ar' =>
                    'أعمال دمام ديكور, مشاريع ديكور الدمام, مشاريع الديكور الداخلي الدمام, تصميم داخلي الدمام, تنفيذ ديكور الدمام, مشاريع ديكور الخبر, مشاريع ديكور القطيف, ديكورات فلل الدمام, تجديد منازل الدمام, ديكورات تلفزيون الدمام, غرف نوم الدمام, خزائن الدمام',

                'keywords_en' =>
                    'Dammam Decor projects, interior design projects Dammam, home renovation projects Dammam, villa interior design Dammam, interior design Khobar, interior design Qatif, TV wall projects Dammam, bedroom design projects Dammam',

                'og_title_ar' =>
                    'أعمالنا | دمام ديكور',

                'og_title_en' =>
                    'Dammam Decor Projects',

                'og_description_ar' =>
                    'استعرض أعمال دمام ديكور في تصميم وتنفيذ الديكور الداخلي وتجديد المنازل والفلل في الدمام والخبر والقطيف.',

                'og_description_en' =>
                    'Explore Dammam Decor projects in interior design and home renovation across Dammam, Khobar, and Qatif.',
            ],


            /*
            |--------------------------------------------------------------------------
            | Contact
            |--------------------------------------------------------------------------
            */

            'contact' => [
                'title_ar' =>
                    'تواصل مع دمام ديكور | تصميم وتنفيذ الديكور الداخلي',

                'title_en' =>
                    'Contact Dammam Decor | Interior Design & Home Renovation',

                'description_ar' =>
                    'تواصل مع دمام ديكور لطلب استشارة أو عرض سعر لتصميم وتنفيذ الديكور الداخلي وتجديد المنازل والفلل في الدمام والخبر والقطيف.',

                'description_en' =>
                    'Contact Dammam Decor for a consultation or quotation for interior design, home renovation, and custom interior solutions in Dammam, Khobar, and Qatif.',

                'keywords_ar' =>
                    'تواصل مع دمام ديكور, دمام ديكور, شركة ديكور الدمام, تصميم داخلي الدمام, طلب عرض سعر ديكور الدمام, تنفيذ ديكور الدمام, تجديد منازل الدمام, ترميم منازل الدمام, ديكور الخبر, ديكور القطيف',

                'keywords_en' =>
                    'contact Dammam Decor, Dammam Decor company, interior design Dammam, interior design quotation Dammam, home renovation Dammam, interior design Khobar, interior design Qatif',

                'og_title_ar' =>
                    'تواصل معنا | دمام ديكور',

                'og_title_en' =>
                    'Contact Dammam Decor',

                'og_description_ar' =>
                    'اطلب استشارة أو عرض سعر من دمام ديكور لتصميم وتنفيذ الديكور الداخلي وتجديد المنازل في الدمام والخبر والقطيف.',

                'og_description_en' =>
                    'Request a consultation or quotation from Dammam Decor for interior design and home renovation in Dammam, Khobar, and Qatif.',
            ],
        ];


        /*
        |--------------------------------------------------------------------------
        | Insert / Update SEO
        |--------------------------------------------------------------------------
        */

        foreach ($pages as $pageKey => $seo) {

            PageSeo::updateOrCreate(
                [
                    'page_key' => $pageKey,
                ],
                array_merge(
                    $seo,
                    [
                        'index' => true,
                        'follow' => true,
                    ]
                )
            );
        }
    }
}