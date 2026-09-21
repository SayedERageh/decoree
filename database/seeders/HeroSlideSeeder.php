<?php

namespace Database\Seeders;

use App\Models\HeroSlide;
use Illuminate\Database\Seeder;

class HeroSlideSeeder extends Seeder
{
    public function run(): void
    {
        HeroSlide::query()->delete();

        /*
        |--------------------------------------------------------------------------
        | Slide 1
        |--------------------------------------------------------------------------
        */

        HeroSlide::create([
            'title_ar' => 'جي آر سي مكة | واجهات GRC وديكورات خارجية',
            'title_en' => 'GRC Makkah | GRC Facades & Exterior Decorations',

            'subtitle_ar' => 'جي آر سي مكة لأعمال الواجهات والديكورات المعمارية',
            'subtitle_en' => 'GRC Makkah for Architectural Facades & Exterior Decorations',

            'description_ar' => 'تقدم جي آر سي مكة حلول GRC متكاملة تشمل تصميم وتصنيع وتركيب واجهات GRC والواجهات المعمارية والديكورات الخارجية للفلل والقصور والمباني السكنية والتجارية والإدارية في مكة المكرمة.',

            'description_en' => 'GRC Makkah provides complete GRC solutions including the design, manufacturing, and installation of GRC facades, architectural facades, and exterior decorations for villas, palaces, residential, commercial, and administrative buildings in Makkah.',

            'image' => 'hero-slides/slide-1.jpg',

            'button_text_ar' => 'خدمات جي آر سي مكة',
            'button_text_en' => 'GRC Makkah Services',
            'button_url' => '/services',

            'secondary_button_text_ar' => 'تواصل مع جي آر سي مكة',
            'secondary_button_text_en' => 'Contact GRC Makkah',
            'secondary_button_url' => '/contact',

            'sort_order' => 1,
            'is_active' => true,
        ]);

        /*
        |--------------------------------------------------------------------------
        | Slide 2
        |--------------------------------------------------------------------------
        */

        HeroSlide::create([
            'title_ar' => 'واجهات GRC مكة بتصميم يناسب مشروعك',
            'title_en' => 'GRC Makkah Facades Designed for Your Project',

            'subtitle_ar' => 'حلول GRC مخصصة من جي آر سي مكة',
            'subtitle_en' => 'Customized GRC Solutions by GRC Makkah',

            'description_ar' => 'تنفذ جي آر سي مكة أعمال GRC والواجهات المعمارية والكرانيش والأعمدة والقباب والأقواس والزخارف والبانوهات ومداخل المباني، مع الاهتمام بدقة القياسات والتصنيع والتركيب والتشطيب.',

            'description_en' => 'GRC Makkah provides GRC facades, architectural facades, cornices, columns, domes, arches, decorative elements, panels, and building entrances with accurate measurements, professional manufacturing, installation, and finishing.',

            'image' => 'hero-slides/slide-2.jpg',

            'button_text_ar' => 'أعمال GRC مكة',
            'button_text_en' => 'GRC Makkah Works',
            'button_url' => '/services',

            'secondary_button_text_ar' => 'اطلب عرض سعر',
            'secondary_button_text_en' => 'Request a Quote',
            'secondary_button_url' => '/contact',

            'sort_order' => 2,
            'is_active' => true,
        ]);

        /*
        |--------------------------------------------------------------------------
        | Slide 3
        |--------------------------------------------------------------------------
        */

        HeroSlide::create([
            'title_ar' => 'شركة جي آر سي مكة من التصميم إلى التشطيب',
            'title_en' => 'GRC Makkah From Design to Final Finishing',

            'subtitle_ar' => 'حلول متكاملة لأعمال GRC والواجهات في مكة',
            'subtitle_en' => 'Complete GRC & Facade Solutions in Makkah',

            'description_ar' => 'تعمل جي آر سي مكة مع أصحاب المشروعات والمهندسين والاستشاريين والمقاولين والمطورين لتنفيذ واجهات GRC وديكورات خارجية تجمع بين جمال التصميم والمتانة ودقة التنفيذ وجودة التشطيب.',

            'description_en' => 'GRC Makkah works with property owners, architects, consultants, contractors, and developers to deliver GRC facades and exterior decorations that combine architectural beauty, durability, precise execution, and quality finishing.',

            'image' => 'hero-slides/slide-3.jpg',

            'button_text_ar' => 'شاهد خدمات جي آر سي مكة',
            'button_text_en' => 'View GRC Makkah Services',
            'button_url' => '/services',

            'secondary_button_text_ar' => 'اطلب استشارة',
            'secondary_button_text_en' => 'Request Consultation',
            'secondary_button_url' => '/contact',

            'sort_order' => 3,
            'is_active' => true,
        ]);
    }
}
    
