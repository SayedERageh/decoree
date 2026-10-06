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
                'description_ar' => 'نحرص على تقديم أعلى مستويات الجودة في تنفيذ الديكورات الداخلية وتجديد المنازل، مع الاهتمام بأدق التفاصيل للوصول إلى نتيجة أنيقة ومتناسقة.',
                'description_en' => 'We focus on delivering high-quality interior decoration and home renovation, paying attention to every detail to achieve an elegant and harmonious result.',
                'icon' => 'bi bi-award',
                'sort_order' => 1,
                'is_active' => true,
            ],

            [
                'title_ar' => 'تصاميم عصرية',
                'title_en' => 'Modern Designs',
                'description_ar' => 'نقدم تصاميم داخلية عصرية ومودرن تواكب أحدث اتجاهات الديكور، مع اختيار التصاميم التي تناسب مساحة المنزل وذوق العميل.',
                'description_en' => 'We provide modern and contemporary interior designs inspired by the latest decoration trends, tailored to each space and client preference.',
                'icon' => 'bi bi-stars',
                'sort_order' => 2,
                'is_active' => true,
            ],

            [
                'title_ar' => 'دقة في التنفيذ',
                'title_en' => 'Precision in Execution',
                'description_ar' => 'نهتم بدقة القياسات والتنفيذ والتركيب والتشطيب لضمان أن تكون كل قطعة وكل تفصيلة في مكانها بالشكل الصحيح.',
                'description_en' => 'We pay close attention to measurements, installation, execution, and finishing to ensure every element is precisely completed.',
                'icon' => 'bi bi-rulers',
                'sort_order' => 3,
                'is_active' => true,
            ],

            [
                'title_ar' => 'حلول مخصصة',
                'title_en' => 'Customized Solutions',
                'description_ar' => 'ننفذ حلولًا مخصصة تناسب كل منزل، بداية من غرف النوم والخزائن وديكورات التلفزيون وحتى المرايات وتكسيات الجدران والتجديد الكامل.',
                'description_en' => 'We provide customized solutions for every home, from bedrooms, wardrobes, and TV walls to mirrors, wall decorations, and complete renovations.',
                'icon' => 'bi bi-pencil-square',
                'sort_order' => 4,
                'is_active' => true,
            ],

            [
                'title_ar' => 'احترافية في العمل',
                'title_en' => 'Professional Work',
                'description_ar' => 'نعتمد على الخبرة والمهارة في تنفيذ أعمال الديكور الداخلي والتجديد للوصول إلى نتائج تجمع بين الجمال والعملية وجودة التشطيب.',
                'description_en' => 'We rely on experience and craftsmanship to deliver interior decoration and renovation projects that combine beauty, functionality, and quality finishing.',
                'icon' => 'bi bi-person-workspace',
                'sort_order' => 5,
                'is_active' => true,
            ],

            [
                'title_ar' => 'رضا العميل',
                'title_en' => 'Customer Satisfaction',
                'description_ar' => 'نضع احتياجات العميل وذوقه في مقدمة أولوياتنا، ونعمل على تقديم تصميم وتنفيذ يتناسب مع تطلعاته وطبيعة منزله.',
                'description_en' => 'Our clients’ needs and preferences come first, and we strive to deliver designs and execution that match their expectations and home style.',
                'icon' => 'bi bi-heart',
                'sort_order' => 6,
                'is_active' => true,
            ],

            [
                'title_ar' => 'أناقة وعملية',
                'title_en' => 'Style & Functionality',
                'description_ar' => 'نحرص على أن تكون الديكورات جميلة وعصرية وفي نفس الوقت عملية ومناسبة للاستخدام اليومي، لنصنع مساحات مريحة تليق بالمنزل.',
                'description_en' => 'We create interiors that are not only stylish and modern but also practical and comfortable for everyday living.',
                'icon' => 'bi bi-house-heart',
                'sort_order' => 7,
                'is_active' => true,
            ],

            [
                'title_ar' => 'الالتزام والمصداقية',
                'title_en' => 'Commitment & Integrity',
                'description_ar' => 'نحرص على الوضوح والمصداقية في التعامل مع العملاء، من بداية الاتفاق والتصميم وحتى التنفيذ والتشطيب النهائي.',
                'description_en' => 'We maintain transparency and integrity with our clients from the initial consultation and design through execution and final finishing.',
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
