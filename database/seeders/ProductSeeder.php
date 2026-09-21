<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::query()->delete();

        $products = [

            [
                'name_ar' => 'واجهات GRC مكة',
                'name_en' => 'GRC Makkah Architectural Facades',

                'slug' => 'grc-makkah-architectural-facades',

                'description_ar' =>
                    'تنفيذ واجهات GRC في مكة المكرمة للفلل والقصور والمباني السكنية والتجارية والإدارية، بتصميمات معمارية متنوعة وتشطيبات احترافية تجمع بين الجمال والمتانة ودقة التنفيذ.',

                'description_en' =>
                    'GRC Makkah architectural facades for villas, palaces, residential, commercial, and administrative buildings, combining elegant designs, durability, precision, and professional finishing.',

                'image' => 'products/grc-facades.jpg',

                'price' => null,

                'is_active' => true,

                'sort_order' => 1,
            ],

            [
                'name_ar' => 'كرانيش GRC مكة وديكورات الواجهات',
                'name_en' => 'GRC Makkah Cornices & Facade Decorations',

                'slug' => 'grc-makkah-cornices-facade-decorations',

                'description_ar' =>
                    'تصنيع وتركيب كرانيش GRC في مكة المكرمة وحليات وزخارف الواجهات لإضافة لمسة معمارية مميزة وتحسين الشكل الخارجي للفلل والقصور والمباني.',

                'description_en' =>
                    'Manufacturing and installation of GRC cornices, trims, and facade decorations in Makkah, designed to enhance the exterior appearance of villas, palaces, and buildings.',

                'image' => 'products/grc-cornices.jpg',

                'price' => null,

                'is_active' => true,

                'sort_order' => 2,
            ],

            [
                'name_ar' => 'أعمدة GRC مكة المعمارية',
                'name_en' => 'GRC Makkah Architectural Columns',

                'slug' => 'grc-makkah-architectural-columns',

                'description_ar' =>
                    'تنفيذ أعمدة GRC في مكة بتصميمات وأشكال معمارية مختلفة تناسب مداخل الفلل والقصور والمباني والمشروعات التجارية، مع إمكانية تنفيذ التصميم حسب الرسومات والمقاسات المطلوبة.',

                'description_en' =>
                    'Architectural GRC columns in Makkah in various designs and styles for villa entrances, palaces, buildings, and commercial projects, with customized dimensions and designs.',

                'image' => 'products/grc-columns.jpg',

                'price' => null,

                'is_active' => true,

                'sort_order' => 3,
            ],

            [
                'name_ar' => 'قباب وأقواس GRC مكة',
                'name_en' => 'GRC Makkah Domes & Arches',

                'slug' => 'grc-makkah-domes-arches',

                'description_ar' =>
                    'تنفيذ قباب وأقواس وعناصر معمارية من GRC في مكة المكرمة بتصميمات مميزة تناسب الفلل والقصور والمداخل والمباني ذات الطابع الكلاسيكي أو العصري.',

                'description_en' =>
                    'Custom GRC domes, arches, and architectural elements in Makkah for villas, palaces, entrances, and classic or modern architectural projects.',

                'image' => 'products/grc-domes-arches.jpg',

                'price' => null,

                'is_active' => true,

                'sort_order' => 4,
            ],

            [
                'name_ar' => 'زخارف وديكورات GRC مكة الخارجية',
                'name_en' => 'GRC Makkah Exterior Decorative Elements',

                'slug' => 'grc-makkah-exterior-decorative-elements',

                'description_ar' =>
                    'تنفيذ زخارف وعناصر ديكورية خارجية من GRC في مكة المكرمة حسب التصميم المعماري للمشروع، لإضافة تفاصيل جمالية مميزة للواجهات والمداخل والمباني.',

                'description_en' =>
                    'Custom GRC exterior decorative elements in Makkah designed according to each project’s architectural style to create distinctive facades, entrances, and buildings.',

                'image' => 'products/grc-exterior-decorations.jpg',

                'price' => null,

                'is_active' => true,

                'sort_order' => 5,
            ],

            [
                'name_ar' => 'إطارات وبانوهات GRC مكة',
                'name_en' => 'GRC Makkah Frames & Decorative Panels',

                'slug' => 'grc-makkah-frames-decorative-panels',

                'description_ar' =>
                    'تصنيع إطارات وبانوهات وعناصر زخرفية من GRC للواجهات والمداخل في مكة المكرمة، بدقة عالية لتتناسب مع التصميم العام للمبنى وتمنحه مظهرًا معماريًا متناسقًا.',

                'description_en' =>
                    'GRC frames, decorative panels, and architectural elements for facades and entrances in Makkah, manufactured with precision to complement the overall building design.',

                'image' => 'products/grc-frames-panels.jpg',

                'price' => null,

                'is_active' => true,

                'sort_order' => 6,
            ],

            [
                'name_ar' => 'ديكورات مداخل الفلل والقصور في مكة',
                'name_en' => 'Villa & Palace Entrance Decorations in Makkah',

                'slug' => 'villa-palace-entrance-decorations-makkah',

                'description_ar' =>
                    'تصميم وتنفيذ ديكورات ومداخل خارجية للفلل والقصور في مكة باستخدام عناصر GRC والكرانيش والأعمدة والأقواس والزخارف المعمارية لإظهار المدخل بصورة فاخرة ومميزة.',

                'description_en' =>
                    'Design and installation of luxury villa and palace entrance decorations in Makkah using GRC columns, cornices, arches, and architectural elements.',

                'image' => 'products/villa-entrances.jpg',

                'price' => null,

                'is_active' => true,

                'sort_order' => 7,
            ],

            [
                'name_ar' => 'عناصر GRC مخصصة في مكة',
                'name_en' => 'Custom GRC Architectural Elements in Makkah',

                'slug' => 'custom-grc-architectural-elements-makkah',

                'description_ar' =>
                    'تنفيذ عناصر GRC مخصصة في مكة المكرمة حسب الرسومات الهندسية والتصميمات المعمارية والمقاسات المطلوبة، مع إمكانية تنفيذ التفاصيل الخاصة بكل مشروع بدقة واحترافية.',

                'description_en' =>
                    'Custom GRC architectural elements in Makkah manufactured according to architectural drawings, designs, dimensions, and specific project requirements.',

                'image' => 'products/custom-grc.jpg',

                'price' => null,

                'is_active' => true,

                'sort_order' => 8,
            ],

        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
       
