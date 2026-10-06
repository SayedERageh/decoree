<?php

namespace Database\Seeders;

use App\Models\HeroSlide;
use Illuminate\Database\Seeder;

class HeroSlideSeeder extends Seeder
{
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | حماية التحديثات الحالية
        |--------------------------------------------------------------------------
        | يتم تحديث الشرائح الحالية أو إنشاؤها إذا لم تكن موجودة.
        */

        /*
        |--------------------------------------------------------------------------
        | Slide 1
        |--------------------------------------------------------------------------
        */

        HeroSlide::updateOrCreate(
            ['sort_order' => 1],
            [
                'title_ar' => 'دمام ديكور | تنفيذ وتجديد المنازل والديكورات الداخلية',
                'title_en' => 'Dammam Decor | Interior Design & Home Renovation',

                'subtitle_ar' => 'تصاميم عصرية وتنفيذ يليق بمنزلك',
                'subtitle_en' => 'Modern Designs & Quality Execution',

                'description_ar' => 'نقدم خدمات تنفيذ وتجديد المنازل والديكورات الداخلية في الدمام والخبر والقطيف، من ديكورات التلفزيون والخزائن وغرف النوم إلى المرايات وتكسيات الجدران وجميع أعمال الديكور الداخلي.',

                'description_en' => 'We provide modern interior design, home renovation, and execution services in Dammam, Khobar, and Qatif, including TV walls, wardrobes, bedrooms, mirrors, wall finishes, and complete interior decoration solutions.',

                'image' => 'hero-slides/slide-1.jpg',

                'button_text_ar' => 'اكتشف خدماتنا',
                'button_text_en' => 'Explore Our Services',
                'button_url' => '/services',

                'secondary_button_text_ar' => 'تواصل معنا',
                'secondary_button_text_en' => 'Contact Us',
                'secondary_button_url' => '/contact',

                'sort_order' => 1,
                'is_active' => true,
            ]
        );

        /*
        |--------------------------------------------------------------------------
        | Slide 2
        |--------------------------------------------------------------------------
        */

        HeroSlide::updateOrCreate(
            ['sort_order' => 2],
            [
                'title_ar' => 'تصميم عصري يليق بمنزلك',
                'title_en' => 'Modern Design for Your Home',

                'subtitle_ar' => 'ديكورات داخلية بتفاصيل أنيقة وحلول مخصصة',
                'subtitle_en' => 'Elegant Interiors with Customized Solutions',

                'description_ar' => 'ننفذ غرف النوم والخزائن وديكورات التلفزيون والمرايات والمداخل وتكسيات الجدران بتصاميم مودرن وحلول مخصصة تناسب مساحة منزلك وذوقك.',

                'description_en' => 'We create bedrooms, wardrobes, TV walls, mirrors, entrances, and wall finishes with modern designs and customized solutions tailored to your space and personal style.',

                'image' => 'hero-slides/slide-2.jpg',

                'button_text_ar' => 'شاهد أعمالنا',
                'button_text_en' => 'View Our Work',
                'button_url' => '/portfolio',

                'secondary_button_text_ar' => 'اطلب عرض سعر',
                'secondary_button_text_en' => 'Request a Quote',
                'secondary_button_url' => '/contact',

                'sort_order' => 2,
                'is_active' => true,
            ]
        );

        /*
        |--------------------------------------------------------------------------
        | Slide 3
        |--------------------------------------------------------------------------
        */

        HeroSlide::updateOrCreate(
            ['sort_order' => 3],
            [
                'title_ar' => 'من الفكرة إلى آخر تفصيلة',
                'title_en' => 'From Concept to Every Detail',

                'subtitle_ar' => 'حلول متكاملة للديكور الداخلي وتجديد المنازل',
                'subtitle_en' => 'Complete Interior Design & Home Renovation Solutions',

                'description_ar' => 'نحول أفكارك إلى مساحات أنيقة وعملية من خلال التصميم والتنفيذ والتجديد، مع الاهتمام بجودة الخامات ودقة التشطيب وأدق التفاصيل في كل مشروع.',

                'description_en' => 'We turn your ideas into elegant and functional spaces through design, execution, and renovation, with a focus on quality materials, precise finishing, and attention to every detail.',

                'image' => 'hero-slides/slide-3.jpg',

                'button_text_ar' => 'اطلب تصميمك الآن',
                'button_text_en' => 'Request Your Design',
                'button_url' => '/contact',

                'secondary_button_text_ar' => 'تعرّف علينا',
                'secondary_button_text_en' => 'About Us',
                'secondary_button_url' => '/about',

                'sort_order' => 3,
                'is_active' => true,
            ]
        );
    }
}

