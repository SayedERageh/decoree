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
                'site_name' => 'جي آر سي مكة | GRC Makkah',

                'primary_color' => '#b08d57',
                'primary_dark_color' => '#8a6a3f',

                'secondary_color' => '#111111',
                'secondary_dark_color' => '#1c1c1c',

                'light_blue_color' => '#f5f1e8',
                'light_color' => '#f8f8f8',

                'white_color' => '#ffffff',

                'text_color' => '#222222',
                'muted_color' => '#6b6b6b',

                'border_color' => '#e5e0d7',

                'site_description' =>
                    'جي آر سي مكة | GRC Makkah شركة متخصصة في أعمال GRC والواجهات المعمارية والديكورات الخارجية في مكة المكرمة، وتشمل خدماتنا تصنيع وتركيب واجهات GRC والكرانيش والأعمدة والأقواس والقباب والعناصر المعمارية للفلل والقصور والمباني والمشروعات المختلفة.',
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
                    'جي آر سي مكة | شركة GRC مكة للواجهات والديكورات الخارجية',

                'title_en' =>
                    'GRC Makkah | GRC Facades & Exterior Decorations Company',

                'description_ar' =>
                    'جي آر سي مكة شركة متخصصة في أعمال GRC مكة والواجهات المعمارية والديكورات الخارجية في مكة المكرمة. تصنيع وتركيب واجهات GRC والكرانيش والأعمدة والأقواس والقباب وعناصر GRC للفلل والقصور والمباني.',

                'description_en' =>
                    'GRC Makkah specializes in GRC works, architectural facades, and exterior decorations in Makkah, Saudi Arabia, including GRC facades, cornices, columns, arches, domes, and custom architectural elements.',

                'keywords_ar' =>
                    'جي آر سي مكة, GRC مكة, GRC Makkah, شركة GRC في مكة, شركة جي آر سي مكة, أعمال GRC مكة, واجهات GRC مكة, ديكورات GRC مكة, ديكورات خارجية مكة, واجهات معمارية مكة, مقاول GRC مكة, تركيب GRC مكة, تصنيع GRC مكة, كرانيش GRC مكة, أعمدة GRC مكة, قباب GRC مكة, أقواس GRC مكة, واجهات فلل مكة, واجهات قصور مكة',

                'keywords_en' =>
                    'GRC Makkah, GRC company Makkah, GRC contractor Makkah, GRC facades Makkah, GRC works Makkah, exterior decorations Makkah, architectural facades Makkah, GRC installation Makkah, GRC manufacturing Makkah, villa facades Makkah, palace facades Makkah',

                'og_title_ar' =>
                    'جي آر سي مكة | أعمال GRC والواجهات والديكورات الخارجية',

                'og_title_en' =>
                    'GRC Makkah | GRC Facades & Exterior Decorations',

                'og_description_ar' =>
                    'حلول متكاملة من جي آر سي مكة لأعمال GRC والواجهات المعمارية والديكورات الخارجية للفلل والقصور والمباني في مكة المكرمة.',

                'og_description_en' =>
                    'Complete GRC Makkah solutions for GRC works, architectural facades, and exterior decorations for villas, palaces, and buildings in Makkah.',
            ],


            /*
            |--------------------------------------------------------------------------
            | About
            |--------------------------------------------------------------------------
            */

            'about' => [
                'title_ar' =>
                    'من نحن | جي آر سي مكة | شركة GRC مكة',

                'title_en' =>
                    'About Us | GRC Makkah',

                'description_ar' =>
                    'تعرف على جي آر سي مكة وخدمات شركة GRC مكة في أعمال GRC والواجهات المعمارية والديكورات الخارجية وتصنيع وتركيب العناصر المعمارية للفلل والقصور والمباني في مكة المكرمة.',

                'description_en' =>
                    'Learn about GRC Makkah and our services in GRC works, architectural facades, exterior decorations, and custom GRC architectural elements for villas, palaces, and buildings in Makkah.',

                'keywords_ar' =>
                    'من نحن جي آر سي مكة, جي آر سي مكة, GRC مكة, شركة GRC مكة, شركة GRC في مكة, أعمال GRC مكة, واجهات GRC مكة, ديكورات GRC مكة, مقاول GRC مكة',

                'keywords_en' =>
                    'about GRC Makkah, GRC Makkah company, GRC company Makkah, GRC contractor Makkah, GRC facades Makkah, exterior decorations Makkah',

                'og_title_ar' =>
                    'من نحن | جي آر سي مكة',

                'og_title_en' =>
                    'About GRC Makkah',

                'og_description_ar' =>
                    'تعرف على جي آر سي مكة وخبرتنا في تنفيذ أعمال GRC والواجهات والديكورات الخارجية في مكة المكرمة.',

                'og_description_en' =>
                    'Discover GRC Makkah and our expertise in GRC works, architectural facades, and exterior decorations in Makkah.',
            ],


            /*
            |--------------------------------------------------------------------------
            | Services
            |--------------------------------------------------------------------------
            */

            'services' => [
                'title_ar' =>
                    'خدمات جي آر سي مكة | واجهات وديكورات GRC مكة',

                'title_en' =>
                    'GRC Makkah Services | Facades & Exterior Decorations',

                'description_ar' =>
                    'اكتشف خدمات جي آر سي مكة في تصنيع وتركيب واجهات GRC مكة والديكورات الخارجية والكرانيش والأعمدة والأقواس والقباب والعناصر المعمارية حسب التصميم في مكة المكرمة.',

                'description_en' =>
                    'Explore GRC Makkah services including GRC facades, exterior decorations, cornices, columns, arches, domes, installation, manufacturing, and custom architectural elements.',

                'keywords_ar' =>
                    'خدمات جي آر سي مكة, خدمات GRC مكة, أعمال GRC مكة, واجهات GRC مكة, تركيب GRC مكة, تصنيع GRC مكة, ديكورات GRC مكة, ديكورات خارجية مكة, كرانيش GRC مكة, أعمدة GRC مكة, قباب GRC مكة, أقواس GRC مكة, واجهات فلل مكة, واجهات قصور مكة, شركة GRC في مكة',

                'keywords_en' =>
                    'GRC Makkah services, GRC works Makkah, GRC facades Makkah, GRC installation Makkah, GRC manufacturing Makkah, exterior decorations Makkah, GRC cornices Makkah, GRC columns Makkah, GRC domes Makkah, GRC arches Makkah',

                'og_title_ar' =>
                    'خدمات جي آر سي مكة | GRC Makkah',

                'og_title_en' =>
                    'GRC Makkah Services',

                'og_description_ar' =>
                    'خدمات متكاملة من جي آر سي مكة في أعمال GRC والواجهات المعمارية والديكورات الخارجية والتصنيع والتركيب.',

                'og_description_en' =>
                    'Complete GRC Makkah services including GRC works, architectural facades, exterior decorations, manufacturing, and installation.',
            ],


            /*
            |--------------------------------------------------------------------------
            | Projects
            |--------------------------------------------------------------------------
            */

            'projects' => [
                'title_ar' =>
                    'مشروعات جي آر سي مكة | أعمال GRC والواجهات',

                'title_en' =>
                    'GRC Makkah Projects | GRC Facades & Exterior Decorations',

                'description_ar' =>
                    'شاهد مشروعات جي آر سي مكة وأعمال GRC والواجهات المعمارية والديكورات الخارجية للفلل والقصور والمباني والمشروعات المختلفة في مكة المكرمة.',

                'description_en' =>
                    'Explore GRC Makkah projects featuring GRC facades, architectural elements, and exterior decorations for villas, palaces, buildings, and architectural projects in Makkah.',

                'keywords_ar' =>
                    'مشروعات جي آر سي مكة, مشاريع GRC مكة, أعمال GRC مكة, مشاريع GRC في مكة, واجهات GRC مكة, مشروعات واجهات مكة, ديكورات GRC مكة, ديكورات خارجية مكة, واجهات فلل مكة, واجهات قصور مكة, مشاريع معمارية مكة',

                'keywords_en' =>
                    'GRC Makkah projects, GRC projects Makkah, GRC facade projects Makkah, architectural facade projects Makkah, exterior decoration projects Makkah, villa facades Makkah, palace facades Makkah',

                'og_title_ar' =>
                    'مشروعاتنا | جي آر سي مكة',

                'og_title_en' =>
                    'GRC Makkah Projects',

                'og_description_ar' =>
                    'استعرض مشروعات وأعمال جي آر سي مكة في الواجهات المعمارية وديكورات GRC والواجهات الخارجية في مكة المكرمة.',

                'og_description_en' =>
                    'Explore GRC Makkah projects in architectural facades, GRC decorations, and exterior architectural works in Makkah.',
            ],


            /*
            |--------------------------------------------------------------------------
            | Contact
            |--------------------------------------------------------------------------
            */

            'contact' => [
                'title_ar' =>
                    'تواصل مع جي آر سي مكة | شركة GRC في مكة',

                'title_en' =>
                    'Contact GRC Makkah | GRC Company in Makkah',

                'description_ar' =>
                    'تواصل مع جي آر سي مكة للحصول على استشارة أو طلب عرض سعر لأعمال GRC مكة والواجهات والديكورات الخارجية وواجهات الفلل والقصور والمباني في مكة المكرمة.',

                'description_en' =>
                    'Contact GRC Makkah for a consultation or quotation for GRC works, architectural facades, exterior decorations, villa facades, palace facades, and building projects in Makkah.',

                'keywords_ar' =>
                    'تواصل مع جي آر سي مكة, شركة GRC في مكة, شركة جي آر سي مكة, مقاول GRC مكة, طلب عرض سعر GRC مكة, تركيب GRC مكة, واجهات GRC مكة, ديكورات GRC مكة, ديكورات خارجية مكة, أعمال GRC مكة',

                'keywords_en' =>
                    'contact GRC Makkah, GRC company in Makkah, GRC contractor Makkah, GRC quotation Makkah, GRC installation Makkah, GRC facades Makkah, exterior decorations Makkah',

                'og_title_ar' =>
                    'تواصل معنا | جي آر سي مكة',

                'og_title_en' =>
                    'Contact GRC Makkah',

                'og_description_ar' =>
                    'اطلب عرض سعر أو استشارة من جي آر سي مكة لأعمال GRC والواجهات والديكورات الخارجية في مكة المكرمة.',

                'og_description_en' =>
                    'Request a quotation or consultation from GRC Makkah for GRC works, facades, and exterior decorations in Makkah.',
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