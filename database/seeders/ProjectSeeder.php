<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [

            [
                'title_ar' => 'تنفيذ واجهة GRC مكة لفيلا سكنية',
                'title_en' => 'GRC Makkah Facade for Residential Villa',

                'slug' => 'grc-makkah-facade-residential-villa',

                'category_ar' => 'واجهات GRC مكة',
                'category_en' => 'GRC Makkah Facades',

                'description_ar' =>
                    'تنفيذ واجهة GRC في مكة المكرمة لفيلا سكنية بتصميم معماري متكامل، تشمل الكرانيش والإطارات والزخارف والعناصر الخارجية، مع الاهتمام بدقة التنفيذ وجودة التشطيب. ويقدم جي آر سي مكة حلول واجهات GRC مناسبة للفلل والمباني السكنية في مكة.',

                'description_en' =>
                    'GRC Makkah facade execution for a residential villa in Makkah, including cornices, frames, decorative elements, and exterior architectural details with precise execution and professional finishing.',

                'location_ar' => 'مكة المكرمة، المملكة العربية السعودية',
                'location_en' => 'Makkah, Saudi Arabia',

                'image' => 'projects/grc-villa-facade.jpg',

                'sort_order' => 1,
                'is_active' => true,
            ],

            [
                'title_ar' => 'ديكورات GRC مكة الخارجية لقصر',
                'title_en' => 'GRC Makkah Exterior Decorations for Palace',

                'slug' => 'grc-makkah-exterior-decorations-palace',

                'category_ar' => 'ديكورات GRC مكة',
                'category_en' => 'GRC Makkah Exterior Decorations',

                'description_ar' =>
                    'تنفيذ ديكورات GRC مكة والزخارف المعمارية الخارجية لقصر بتصميم مميز، باستخدام عناصر GRC مصممة لتتناسب مع الطابع المعماري للمبنى. تشمل الأعمال الزخارف والكرانيش والعناصر الخارجية لإظهار الواجهة بصورة فاخرة ومتناسقة.',

                'description_en' =>
                    'GRC Makkah exterior decorations and architectural elements for a palace, designed to match the building style and create an elegant and distinctive facade using custom GRC solutions.',

                'location_ar' => 'مكة المكرمة، المملكة العربية السعودية',
                'location_en' => 'Makkah, Saudi Arabia',

                'image' => 'projects/palace-exterior-decoration.jpg',

                'sort_order' => 2,
                'is_active' => true,
            ],

            [
                'title_ar' => 'واجهة GRC مكة لمبنى تجاري',
                'title_en' => 'GRC Makkah Facade for Commercial Building',

                'slug' => 'grc-makkah-facade-commercial-building',

                'category_ar' => 'واجهات GRC مكة للمباني التجارية',
                'category_en' => 'GRC Makkah Commercial Facades',

                'description_ar' =>
                    'تنفيذ واجهة GRC مكة لمبنى تجاري بتصميم معماري حديث، مع تصنيع وتركيب عناصر الواجهة الخارجية وفق التصميم الهندسي ومتطلبات المشروع. تجمع أعمال جي آر سي مكة بين الشكل المعماري المميز ودقة التنفيذ وجودة التشطيب.',

                'description_en' =>
                    'Modern GRC Makkah facade for a commercial building, including manufacturing and installation of exterior GRC elements according to the architectural design and project requirements.',

                'location_ar' => 'مكة المكرمة، المملكة العربية السعودية',
                'location_en' => 'Makkah, Saudi Arabia',

                'image' => 'projects/commercial-grc-facade.jpg',

                'sort_order' => 3,
                'is_active' => true,
            ],

            [
                'title_ar' => 'أعمال كرانيش وزخارف GRC مكة',
                'title_en' => 'GRC Makkah Cornices & Decorative Works',

                'slug' => 'grc-makkah-cornices-decorative-works',

                'category_ar' => 'كرانيش وزخارف GRC مكة',
                'category_en' => 'GRC Makkah Cornices & Decorations',

                'description_ar' =>
                    'تصنيع وتركيب كرانيش وحليات وزخارف GRC في مكة المكرمة للواجهات الخارجية، مع تنفيذ التفاصيل المعمارية بدقة للحصول على واجهة متناسقة ومميزة. تشمل أعمال جي آر سي مكة تنفيذ العناصر الزخرفية حسب التصميم والمقاسات المطلوبة.',

                'description_en' =>
                    'Manufacturing and installation of GRC Makkah cornices, trims, and decorative elements for exterior facades, with precise architectural detailing and professional finishing.',

                'location_ar' => 'مكة المكرمة، المملكة العربية السعودية',
                'location_en' => 'Makkah, Saudi Arabia',

                'image' => 'projects/grc-cornices.jpg',

                'sort_order' => 4,
                'is_active' => true,
            ],

            [
                'title_ar' => 'أعمدة وأقواس GRC مكة لمدخل مشروع',
                'title_en' => 'GRC Makkah Columns & Arches for Project Entrance',

                'slug' => 'grc-makkah-columns-arches-project-entrance',

                'category_ar' => 'عناصر GRC مكة المعمارية',
                'category_en' => 'GRC Makkah Architectural Elements',

                'description_ar' =>
                    'تنفيذ أعمدة وأقواس وعناصر GRC مكة المعمارية لتصميم مدخل مميز للمشروع، مع مراعاة الأبعاد والتناسق بين العناصر والتصميم العام للواجهة. يوفر جي آر سي مكة حلولًا مخصصة للأعمدة والأقواس والمداخل المعمارية.',

                'description_en' =>
                    'Custom GRC Makkah columns, arches, and architectural elements for a distinctive project entrance, designed according to project dimensions and the overall facade design.',

                'location_ar' => 'مكة المكرمة، المملكة العربية السعودية',
                'location_en' => 'Makkah, Saudi Arabia',

                'image' => 'projects/grc-columns-arches.jpg',

                'sort_order' => 5,
                'is_active' => true,
            ],

            [
                'title_ar' => 'تنفيذ ديكورات واجهة فيلا GRC مكة',
                'title_en' => 'GRC Makkah Villa Facade Exterior Decoration',

                'slug' => 'grc-makkah-villa-facade-exterior-decoration',

                'category_ar' => 'ديكورات واجهات الفلل في مكة',
                'category_en' => 'GRC Makkah Villa Facade Decorations',

                'description_ar' =>
                    'تنفيذ ديكورات خارجية وعناصر GRC لواجهة فيلا في مكة المكرمة، تشمل الحليات والإطارات والزخارف والكرانيش المعمارية لإبراز تفاصيل الواجهة وتحسين المظهر الخارجي. تم تصميم أعمال جي آر سي مكة لتناسب الطابع المعماري للفيلا.',

                'description_en' =>
                    'Exterior GRC decorations and architectural elements for a villa facade in Makkah, including trims, frames, cornices, and decorative details designed to enhance the building exterior.',

                'location_ar' => 'مكة المكرمة، المملكة العربية السعودية',
                'location_en' => 'Makkah, Saudi Arabia',

                'image' => 'projects/villa-exterior-decoration.jpg',

                'sort_order' => 6,
                'is_active' => true,
            ],

        ];

        foreach ($projects as $project) {
            Project::updateOrCreate(
                ['slug' => $project['slug']],
                $project
            );
        }
    }
}