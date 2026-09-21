<?php

namespace Database\Seeders;

use App\Models\HomeSection;
use Illuminate\Database\Seeder;

class HomeSectionSeeder extends Seeder
{
    public function run(): void
    {
        $sections = [
            [
                'key' => 'about',
                'title_ar' => 'من نحن | جي آر سي مكة',
                'title_en' => 'ABOUT GRC MAKKAH',

                'subtitle_ar' => 'جي آر سي مكة لأعمال GRC والواجهات والديكورات الخارجية',
                'subtitle_en' => 'GRC Makkah for GRC, Facades & Exterior Decorations',

                'description_ar' => 'جي آر سي مكة هي شركة متخصصة في تنفيذ أعمال GRC والواجهات المعمارية والديكورات الخارجية في مكة المكرمة، وتشمل خدماتنا تصميم وتصنيع وتركيب واجهات GRC والكرانيش والأعمدة والقباب والأقواس والعناصر المعمارية للفلل والقصور والمباني السكنية والتجارية والإدارية.',

                'description_en' => 'GRC Makkah is a specialized company providing GRC works, architectural facades, and exterior decoration solutions in Makkah. Our services include the design, manufacturing, and installation of GRC facades, cornices, columns, domes, arches, and architectural elements for villas, palaces, residential, commercial, and administrative buildings.',

                'button_text_ar' => 'اعرف المزيد عن جي آر سي مكة',
                'button_text_en' => 'Learn More About GRC Makkah',
                'button_url' => '/about',
            ],

            [
                'key' => 'services',
                'title_ar' => 'خدمات جي آر سي مكة',
                'title_en' => 'GRC MAKKAH SERVICES',

                'subtitle_ar' => 'حلول متكاملة لأعمال GRC والواجهات في مكة',
                'subtitle_en' => 'Complete GRC & Facade Solutions in Makkah',

                'description_ar' => 'تقدم جي آر سي مكة مجموعة متكاملة من خدمات GRC والواجهات والديكورات الخارجية، بداية من التصميم والتجهيز الفني والتصنيع وحتى التوريد والتركيب والتشطيب النهائي، بما يتناسب مع احتياجات كل مشروع في مكة المكرمة.',

                'description_en' => 'GRC Makkah provides complete GRC, facade, and exterior decoration services, from design and technical preparation to manufacturing, supply, installation, and final finishing for projects in Makkah.',

                'button_text_ar' => 'اكتشف خدمات GRC مكة',
                'button_text_en' => 'Explore GRC Makkah Services',
                'button_url' => '/services',
            ],

            [
                'key' => 'values',
                'title_ar' => 'قيم جي آر سي مكة',
                'title_en' => 'GRC MAKKAH CORE VALUES',

                'subtitle_ar' => 'الجودة والدقة والاحترافية في كل مشروع GRC',
                'subtitle_en' => 'Quality, Precision & Professionalism in Every GRC Project',

                'description_ar' => 'في جي آر سي مكة نؤمن أن نجاح أعمال GRC والواجهات المعمارية يبدأ من جودة الخامات ودقة القياسات وجودة التصنيع والالتزام بالتنفيذ، لذلك نحرص على تقديم واجهات وديكورات خارجية تجمع بين جمال التصميم والمتانة وجودة التشطيب.',

                'description_en' => 'At GRC Makkah, we believe successful GRC and architectural facade projects start with quality materials, accurate measurements, precise manufacturing, and professional execution. We deliver facades and exterior decorations that combine architectural beauty, durability, and quality finishing.',
            ],

            [
                'key' => 'projects',
                'title_ar' => 'مشروعات جي آر سي مكة',
                'title_en' => 'GRC MAKKAH PROJECTS',

                'subtitle_ar' => 'واجهات GRC وديكورات خارجية تبرز جمال العمارة',
                'subtitle_en' => 'GRC Facades & Exterior Decorations That Enhance Architecture',

                'description_ar' => 'استعرض نماذج من مشروعات جي آر سي مكة في أعمال GRC والواجهات المعمارية والديكورات الخارجية، بما يشمل واجهات الفلل والقصور والمباني السكنية والتجارية والإدارية والمداخل والعناصر المعمارية المختلفة.',

                'description_en' => 'Explore GRC Makkah projects featuring GRC works, architectural facades, and exterior decorations for villas, palaces, residential, commercial, and administrative buildings, entrances, and various architectural elements.',

                'button_text_ar' => 'شاهد مشروعات جي آر سي مكة',
                'button_text_en' => 'View GRC Makkah Projects',
                'button_url' => '/projects',
            ],

            [
                'key' => 'commitment',
                'title_ar' => 'التزام جي آر سي مكة',
                'title_en' => 'GRC MAKKAH COMMITMENT',

                'subtitle_ar' => 'دقة التنفيذ وجودة GRC في كل مشروع',
                'subtitle_en' => 'Precision & Quality in Every GRC Project',

                'description_ar' => 'تلتزم جي آر سي مكة بتقديم أعمال GRC وواجهات وديكورات خارجية بجودة عالية، مع دقة القياسات والتصنيع والتركيب، والاهتمام بأدق التفاصيل المعمارية، والحرص على تنفيذ كل مشروع وفق متطلباته الفنية والتصميمية.',

                'description_en' => 'GRC Makkah is committed to delivering high-quality GRC, facade, and exterior decoration works with accurate measurements, manufacturing, installation, attention to architectural details, and solutions tailored to each project’s technical and design requirements.',
            ],

            [
                'key' => 'cta',
                'title_ar' => 'هل تبحث عن شركة GRC في مكة؟',
                'title_en' => 'LOOKING FOR A GRC COMPANY IN MAKKAH?',

                'subtitle_ar' => 'تواصل مع جي آر سي مكة واحصل على حل مناسب لمشروعك',
                'subtitle_en' => 'Contact GRC Makkah for the Right Solution',

                'description_ar' => 'إذا كنت تبحث عن جي آر سي مكة لتنفيذ واجهات GRC أو الديكورات الخارجية أو الواجهات المعمارية، تواصل معنا لمناقشة مشروعك ومعرفة الحلول المناسبة للفلل والقصور والمباني السكنية والتجارية والإدارية في مكة المكرمة.',

                'description_en' => 'If you are looking for GRC Makkah for GRC facades, exterior decorations, or architectural facade works, contact us to discuss your project and find the right solution for villas, palaces, residential, commercial, and administrative buildings in Makkah.',

                'button_text_ar' => 'تواصل مع جي آر سي مكة',
                'button_text_en' => 'Contact GRC Makkah',
                'button_url' => '/contact',
            ],
        ];

        foreach ($sections as $section) {
            HomeSection::updateOrCreate(
                ['key' => $section['key']],
                $section
            );
        }
    }
}
      
