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
                'title_ar' => 'من نحن | دمام ديكور',
                'title_en' => 'ABOUT DAMMAM DECOR',

                'subtitle_ar' => 'تنفيذ وتجديد المنازل والديكورات الداخلية بتصاميم عصرية',
                'subtitle_en' => 'Modern Interior Design, Home Renovation & Execution',

                'description_ar' => 'دمام ديكور متخصصون في تنفيذ وتجديد المنازل والديكورات الداخلية في الدمام والخبر والقطيف، ونقدم حلولًا متكاملة تشمل ديكورات التلفزيون والخزائن وغرف النوم والمرايات وتكسيات الجدران والمداخل وجميع أعمال الديكور الداخلي بتصاميم عصرية ومودرن.',
                'description_en' => 'Dammam Decor specializes in modern interior design, home renovation, and execution in Dammam, Khobar, and Qatif. We provide complete solutions including TV walls, wardrobes, bedrooms, mirrors, wall finishes, entrances, and custom interior decoration.',

                'button_text_ar' => 'اعرف المزيد عنا',
                'button_text_en' => 'Learn More About Us',
                'button_url' => '/about',
            ],

            [
                'key' => 'services',
                'title_ar' => 'خدماتنا',
                'title_en' => 'OUR SERVICES',

                'subtitle_ar' => 'كل ما يحتاجه منزلك من الديكور الداخلي والتجديد',
                'subtitle_en' => 'Complete Interior Design & Home Renovation Solutions',

                'description_ar' => 'نقدم مجموعة متكاملة من خدمات الديكور الداخلي وتجديد المنازل، بداية من التصميم واختيار التفاصيل المناسبة وحتى التنفيذ والتشطيب النهائي، مع حلول مخصصة تناسب مساحة كل منزل وذوق العميل.',
                'description_en' => 'We provide complete interior design and home renovation services, from design and material selection to execution and final finishing, with customized solutions tailored to each home and client preference.',

                'button_text_ar' => 'اكتشف خدماتنا',
                'button_text_en' => 'Explore Our Services',
                'button_url' => '/services',
            ],

            [
                'key' => 'values',
                'title_ar' => 'قيمنا',
                'title_en' => 'OUR CORE VALUES',

                'subtitle_ar' => 'الجودة والدقة والأناقة في كل تفصيلة',
                'subtitle_en' => 'Quality, Precision & Style in Every Detail',

                'description_ar' => 'نؤمن أن الديكور المميز يبدأ من التصميم الصحيح ويكتمل بدقة التنفيذ وجودة الخامات والاهتمام بالتفاصيل. لذلك نحرص على تقديم مساحات تجمع بين الأناقة والعملية وتناسب ذوق كل عميل.',
                'description_en' => 'We believe great interiors begin with the right design and are completed through precise execution, quality materials, and attention to detail. We create spaces that combine style, functionality, and personal taste.',
            ],

            [
                'key' => 'projects',
                'title_ar' => 'أعمالنا',
                'title_en' => 'OUR PROJECTS',

                'subtitle_ar' => 'مساحات عصرية بتفاصيل تصنع الفرق',
                'subtitle_en' => 'Modern Spaces with Details That Make a Difference',

                'description_ar' => 'استعرض مجموعة من أعمالنا في تنفيذ وتجديد المنازل والديكورات الداخلية، بما يشمل غرف النوم والخزائن وديكورات التلفزيون والمرايات والمداخل وتكسيات الجدران وغيرها من التفاصيل التي تضيف طابعًا خاصًا لكل مساحة.',
                'description_en' => 'Explore our interior design and home renovation projects, including bedrooms, wardrobes, TV walls, mirrors, entrances, wall finishes, and other details that give every space a unique character.',

                'button_text_ar' => 'شاهد أعمالنا',
                'button_text_en' => 'View Our Projects',
                'button_url' => '/projects',
            ],

            [
                'key' => 'commitment',
                'title_ar' => 'التزامنا',
                'title_en' => 'OUR COMMITMENT',

                'subtitle_ar' => 'تنفيذ دقيق وجودة تليق بمنزلك',
                'subtitle_en' => 'Precise Execution & Quality for Your Home',

                'description_ar' => 'نلتزم بتقديم أعمال ديكور وتجديد بجودة عالية، مع الاهتمام بالقياسات والتنفيذ والتشطيب وأدق التفاصيل، ونسعى في كل مشروع إلى الوصول لنتيجة أنيقة وعملية تعكس رؤية العميل.',
                'description_en' => 'We are committed to delivering high-quality interior design and renovation with accurate measurements, precise execution, quality finishing, and attention to every detail, creating elegant and functional spaces that reflect each client’s vision.',
            ],

            [
                'key' => 'cta',
                'title_ar' => 'جاهز تغيّر شكل منزلك؟',
                'title_en' => 'READY TO TRANSFORM YOUR HOME?',

                'subtitle_ar' => 'خلّنا نحول فكرتك إلى مساحة تليق بك',
                'subtitle_en' => 'Let’s Turn Your Idea Into a Space You’ll Love',

                'description_ar' => 'إذا كنت تبحث عن تنفيذ أو تجديد أو ديكور داخلي بتصميم عصري في الدمام أو الخبر أو القطيف، تواصل معنا وشاركنا فكرتك لنساعدك في تحويلها إلى واقع بتفاصيل أنيقة وتنفيذ دقيق.',
                'description_en' => 'If you are looking for modern interior design, home renovation, or custom execution in Dammam, Khobar, or Qatif, contact us and share your idea. We will help turn it into reality with elegant details and precise execution.',

                'button_text_ar' => 'ابدأ مشروعك الآن',
                'button_text_en' => 'Start Your Project',
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
