<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [

            [
                'name_ar' => 'ديكورات التلفزيون',
                'name_en' => 'TV Wall Designs',

                'slug' => 'tv-wall-designs',

                'description_ar' =>
                    'تصميم وتنفيذ ديكورات تلفزيون عصرية ومودرن تناسب مساحة المنزل، مع دمج الخامات والإضاءة والتفاصيل بطريقة أنيقة ومتناسقة.',

                'description_en' =>
                    'Modern TV wall designs tailored to each space, combining materials, lighting, and elegant details for a stylish and harmonious interior.',

                'image' => 'products/tv-wall-designs.jpg',

                'price' => null,

                'is_active' => true,

                'sort_order' => 1,
            ],

            [
                'name_ar' => 'غرف النوم',
                'name_en' => 'Bedroom Designs',

                'slug' => 'bedroom-designs',

                'description_ar' =>
                    'تنفيذ غرف نوم بتصاميم عصرية ومريحة تجمع بين الأناقة والعملية، مع حلول مخصصة تناسب المساحة واحتياجات كل عميل.',

                'description_en' =>
                    'Modern bedroom designs that combine comfort, style, and functionality, with customized solutions tailored to each space and client needs.',

                'image' => 'products/bedroom-designs.jpg',

                'price' => null,

                'is_active' => true,

                'sort_order' => 2,
            ],

            [
                'name_ar' => 'الخزائن المودرن',
                'name_en' => 'Modern Wardrobes',

                'slug' => 'modern-wardrobes',

                'description_ar' =>
                    'تصميم وتنفيذ خزائن مودرن بتقسيمات عملية وتشطيبات أنيقة، مع استغلال المساحات بطريقة ذكية تناسب احتياجات المنزل.',

                'description_en' =>
                    'Modern wardrobes with practical layouts and elegant finishes, designed to make efficient use of space and meet the needs of each home.',

                'image' => 'products/modern-wardrobes.jpg',

                'price' => null,

                'is_active' => true,

                'sort_order' => 3,
            ],

            [
                'name_ar' => 'المرايات والديكورات',
                'name_en' => 'Mirrors & Interior Decor',

                'slug' => 'mirrors-interior-decor',

                'description_ar' =>
                    'تنفيذ مرايات وديكورات داخلية بتصاميم أنيقة تضيف اتساعًا وجمالًا للمكان، مع إمكانية تنفيذ التصميم بما يتناسب مع كل مساحة.',

                'description_en' =>
                    'Elegant mirrors and interior decorations designed to enhance the sense of space and style, with customized designs for every interior.',

                'image' => 'products/mirrors-interior-decor.jpg',

                'price' => null,

                'is_active' => true,

                'sort_order' => 4,
            ],

            [
                'name_ar' => 'تكسيات الجدران',
                'name_en' => 'Wall Finishes',

                'slug' => 'wall-finishes',

                'description_ar' =>
                    'تنفيذ تكسيات جدارية وبدائل وديكورات حائطية بتصاميم عصرية تضيف طابعًا مميزًا للمساحات الداخلية وتكمل الهوية البصرية للمكان.',

                'description_en' =>
                    'Modern wall finishes and decorative wall solutions that add character to interior spaces and complement the overall style of the home.',

                'image' => 'products/wall-finishes.jpg',

                'price' => null,

                'is_active' => true,

                'sort_order' => 5,
            ],

            [
                'name_ar' => 'مداخل واستقبالات',
                'name_en' => 'Entrance & Reception Designs',

                'slug' => 'entrance-reception-designs',

                'description_ar' =>
                    'تصميم وتنفيذ مداخل واستقبالات أنيقة بتفاصيل عصرية تعطي الانطباع الأول المميز وتتناسب مع طبيعة المنزل وأسلوب الديكور الداخلي.',

                'description_en' =>
                    'Elegant entrance and reception designs with modern details that create a strong first impression and complement the home’s interior style.',

                'image' => 'products/entrance-reception-designs.jpg',

                'price' => null,

                'is_active' => true,

                'sort_order' => 6,
            ],

            [
                'name_ar' => 'تجديد وترميم المنازل',
                'name_en' => 'Home Renovation & Remodeling',

                'slug' => 'home-renovation-remodeling',

                'description_ar' =>
                    'تنفيذ أعمال تجديد وترميم المنازل وتحديث المساحات الداخلية من خلال تحسين التشطيبات والديكورات وإعادة تصميم المساحات بما يناسب الطابع العصري.',

                'description_en' =>
                    'Home renovation and remodeling services that refresh interiors through improved finishes, updated decoration, and modern space planning.',

                'image' => 'products/home-renovation.jpg',

                'price' => null,

                'is_active' => true,

                'sort_order' => 7,
            ],

            [
                'name_ar' => 'ديكور داخلي متكامل',
                'name_en' => 'Complete Interior Design',

                'slug' => 'complete-interior-design',

                'description_ar' =>
                    'حلول متكاملة للديكور الداخلي تشمل التصميم والتنفيذ والتجديد وتنسيق مختلف عناصر المكان للوصول إلى مساحة متناسقة وأنيقة تعكس ذوق العميل.',

                'description_en' =>
                    'Complete interior design solutions covering design, execution, renovation, and coordination of interior elements to create a cohesive and elegant space that reflects the client’s style.',

                'image' => 'products/complete-interior-design.jpg',

                'price' => null,

                'is_active' => true,

                'sort_order' => 8,
            ],

        ];

        foreach ($products as $product) {
            Product::updateOrCreate(
                ['slug' => $product['slug']],
                $product
            );
        }
    }
}
