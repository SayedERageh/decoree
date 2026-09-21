<?php

namespace Database\Seeders;

use App\Models\CoreValue;
use Illuminate\Database\Seeder;

class CoreValueSeeder extends Seeder
{
    public function run(): void
    {
        $values = [
            [
                'title_ar' => 'الجودة في كل تفصيلة',
                'title_en' => 'Quality in Every Detail',
                'description_ar' => 'في جي آر سي مكة نحرص على تقديم أعلى مستويات الجودة في تصنيع وتركيب أعمال GRC وواجهات GRC والديكورات الخارجية في مكة المكرمة، مع الاهتمام بأدق التفاصيل المعمارية.',
                'description_en' => 'At GRC Makkah, we maintain high quality standards in the manufacturing and installation of GRC, GRC facades, and exterior decorations in Makkah, with attention to every architectural detail.',
                'icon' => 'bi bi-award',
                'sort_order' => 1,
                'is_active' => true,
            ],

            [
                'title_ar' => 'دقة التنفيذ',
                'title_en' => 'Precision in Execution',
                'description_ar' => 'تعتمد جي آر سي مكة على دقة القياسات والتجهيز والتصنيع والتركيب لضمان تنفيذ واجهات GRC والديكورات المعمارية وفق التصميم والرسومات والمواصفات المطلوبة.',
                'description_en' => 'GRC Makkah relies on accurate measurements, preparation, manufacturing, and installation to ensure GRC facades and architectural decorations meet the required designs, drawings, and specifications.',
                'icon' => 'bi bi-rulers',
                'sort_order' => 2,
                'is_active' => true,
            ],

            [
                'title_ar' => 'الالتزام بالمواعيد',
                'title_en' => 'Commitment to Deadlines',
                'description_ar' => 'نلتزم في جي آر سي مكة بخطط العمل والجداول الزمنية المتفق عليها، ونسعى لإنجاز أعمال GRC والواجهات والديكورات الخارجية في الوقت المحدد مع الحفاظ على جودة التنفيذ.',
                'description_en' => 'GRC Makkah respects agreed project schedules and work plans, aiming to complete GRC, facade, and exterior decoration projects on time while maintaining quality.',
                'icon' => 'bi bi-calendar-check',
                'sort_order' => 3,
                'is_active' => true,
            ],

            [
                'title_ar' => 'حلول GRC مخصصة',
                'title_en' => 'Customized GRC Solutions',
                'description_ar' => 'تقدم جي آر سي مكة حلول GRC وواجهات وديكورات خارجية مخصصة بما يتناسب مع الطابع المعماري للمبنى والمساحات والرسومات الهندسية ومتطلبات كل مشروع في مكة.',
                'description_en' => 'GRC Makkah provides customized GRC, facade, and exterior decoration solutions based on the architectural style, dimensions, drawings, and requirements of each project in Makkah.',
                'icon' => 'bi bi-pencil-square',
                'sort_order' => 4,
                'is_active' => true,
            ],

            [
                'title_ar' => 'الاحترافية والخبرة',
                'title_en' => 'Professionalism & Experience',
                'description_ar' => 'نعتمد في جي آر سي مكة على الخبرة العملية والمهارات الفنية في تنفيذ أعمال GRC والواجهات المعمارية والديكورات الخارجية للوصول إلى نتائج احترافية تناسب مختلف المشروعات.',
                'description_en' => 'GRC Makkah combines practical experience and technical skills in GRC, architectural facades, and exterior decorations to deliver professional results for different types of projects.',
                'icon' => 'bi bi-person-workspace',
                'sort_order' => 5,
                'is_active' => true,
            ],

            [
                'title_ar' => 'رضا العميل',
                'title_en' => 'Customer Satisfaction',
                'description_ar' => 'نضع احتياجات عملائنا في مقدمة أولوياتنا، ونعمل على تقديم خدمات GRC وواجهات وديكورات خارجية واضحة ومرنة تتوافق مع توقعات العميل ومتطلبات المشروع.',
                'description_en' => 'We put our clients’ needs first and provide clear and flexible GRC, facade, and exterior decoration services that meet their expectations and project requirements.',
                'icon' => 'bi bi-heart',
                'sort_order' => 6,
                'is_active' => true,
            ],

            [
                'title_ar' => 'المتانة والأداء',
                'title_en' => 'Durability & Performance',
                'description_ar' => 'نهتم في جي آر سي مكة بتقديم أعمال GRC وديكورات خارجية تجمع بين الشكل الجمالي والمتانة والأداء المناسب، بما يساعد على تحقيق نتائج موثوقة للاستخدام طويل الأمد.',
                'description_en' => 'At GRC Makkah, we provide GRC and exterior decoration solutions that combine aesthetic appeal, durability, and reliable performance for long-term use.',
                'icon' => 'bi bi-building-check',
                'sort_order' => 7,
                'is_active' => true,
            ],

            [
                'title_ar' => 'الشفافية والمصداقية',
                'title_en' => 'Transparency & Integrity',
                'description_ar' => 'تحرص جي آر سي مكة على الوضوح والمصداقية في التعامل مع العملاء والشركاء، بداية من دراسة مشروع GRC والواجهات وحتى التنفيذ والتركيب والتسليم النهائي.',
                'description_en' => 'GRC Makkah maintains transparency and integrity with clients and partners from GRC and facade project assessment through installation and final delivery.',
                'icon' => 'bi bi-shield-check',
                'sort_order' => 8,
                'is_active' => true,
            ],
        ];

        foreach ($values as $value) {
            CoreValue::updateOrCreate(
                ['title_en' => $value['title_en']],
                $value
            );
        }
    }
}
   
