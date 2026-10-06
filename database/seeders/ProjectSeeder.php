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
                'title_ar' => 'تنفيذ ديكور تلفزيون مودرن',
                'title_en' => 'Modern TV Wall Design',

                'slug' => 'modern-tv-wall-design',

                'category_ar' => 'ديكورات تلفزيون',
                'category_en' => 'TV Wall Designs',

                'description_ar' =>
                    'تصميم وتنفيذ ديكور تلفزيون مودرن يجمع بين الخامات الحديثة والإضاءة المخفية والتفاصيل الأنيقة، مع استغلال المساحة بطريقة عملية ومتناسقة مع تصميم المنزل.',

                'description_en' =>
                    'A modern TV wall design combining contemporary materials, concealed lighting, and elegant details, with a practical layout that complements the overall interior.',

                'location_ar' => 'الدمام، المملكة العربية السعودية',
                'location_en' => 'Dammam, Saudi Arabia',

                'image' => 'projects/modern-tv-wall.jpg',

                'sort_order' => 1,
                'is_active' => true,
            ],

            [
                'title_ar' => 'تصميم وتنفيذ غرفة نوم مودرن',
                'title_en' => 'Modern Bedroom Design',

                'slug' => 'modern-bedroom-design',

                'category_ar' => 'غرف نوم',
                'category_en' => 'Bedroom Designs',

                'description_ar' =>
                    'تنفيذ غرفة نوم بتصميم عصري ومريح يجمع بين الأناقة والعملية، مع تنسيق الألوان والخامات والإضاءة للحصول على مساحة هادئة ومتناسقة.',

                'description_en' =>
                    'A modern and comfortable bedroom combining style and functionality, with carefully coordinated colors, materials, and lighting for a calm and cohesive interior.',

                'location_ar' => 'الخبر، المملكة العربية السعودية',
                'location_en' => 'Khobar, Saudi Arabia',

                'image' => 'projects/modern-bedroom.jpg',

                'sort_order' => 2,
                'is_active' => true,
            ],

            [
                'title_ar' => 'خزائن مودرن بتصميم مخصص',
                'title_en' => 'Custom Modern Wardrobes',

                'slug' => 'custom-modern-wardrobes',

                'category_ar' => 'خزائن',
                'category_en' => 'Modern Wardrobes',

                'description_ar' =>
                    'تصميم وتنفيذ خزائن مودرن بتقسيمات داخلية عملية وتشطيبات أنيقة، مع استغلال المساحات بشكل ذكي بما يتناسب مع احتياجات المنزل والتصميم الداخلي.',

                'description_en' =>
                    'Custom modern wardrobes with practical internal layouts and elegant finishes, designed to maximize space and complement the interior design of the home.',

                'location_ar' => 'الدمام، المملكة العربية السعودية',
                'location_en' => 'Dammam, Saudi Arabia',

                'image' => 'projects/custom-modern-wardrobes.jpg',

                'sort_order' => 3,
                'is_active' => true,
            ],

            [
                'title_ar' => 'تكسيات جدارية ومرايات ديكورية',
                'title_en' => 'Decorative Wall Finishes & Mirrors',

                'slug' => 'decorative-wall-finishes-mirrors',

                'category_ar' => 'تكسيات ومرايات',
                'category_en' => 'Wall Finishes & Mirrors',

                'description_ar' =>
                    'تنفيذ تكسيات جدارية ومرايات ديكورية بتصاميم عصرية تضيف عمقًا واتساعًا للمكان، مع دمج الخامات والإضاءة بطريقة تبرز جمال التفاصيل الداخلية.',

                'description_en' =>
                    'Modern wall finishes and decorative mirrors that enhance depth and space, combining materials and lighting to highlight the beauty of the interior details.',

                'location_ar' => 'القطيف، المملكة العربية السعودية',
                'location_en' => 'Qatif, Saudi Arabia',

                'image' => 'projects/wall-finishes-mirrors.jpg',

                'sort_order' => 4,
                'is_active' => true,
            ],

            [
                'title_ar' => 'تصميم مدخل واستقبال فاخر',
                'title_en' => 'Luxury Entrance & Reception Design',

                'slug' => 'luxury-entrance-reception-design',

                'category_ar' => 'مداخل واستقبالات',
                'category_en' => 'Entrance & Reception Designs',

                'description_ar' =>
                    'تصميم وتنفيذ مدخل واستقبال فاخر بتفاصيل مودرن وخامات متناسقة، لخلق انطباع أول مميز يعكس أسلوب المنزل ويمنح المكان طابعًا راقيًا.',

                'description_en' =>
                    'A luxury entrance and reception design featuring modern details and coordinated materials, creating a distinctive first impression that reflects the style of the home.',

                'location_ar' => 'الخبر، المملكة العربية السعودية',
                'location_en' => 'Khobar, Saudi Arabia',

                'image' => 'projects/luxury-entrance-reception.jpg',

                'sort_order' => 5,
                'is_active' => true,
            ],

            [
                'title_ar' => 'ركن كوفي بتصميم مودرن',
                'title_en' => 'Modern Coffee Corner',

                'slug' => 'modern-coffee-corner',

                'category_ar' => 'ركن كوفي',
                'category_en' => 'Coffee Corner Designs',

                'description_ar' =>
                    'تصميم وتنفيذ ركن كوفي مودرن داخل المنزل بتفاصيل عملية وأنيقة، مع استغلال المساحة وتنسيق الخامات والألوان والإضاءة لإضافة لمسة مميزة للمكان.',

                'description_en' =>
                    'A modern home coffee corner designed with practical and elegant details, making smart use of space while coordinating materials, colors, and lighting.',

                'location_ar' => 'الدمام، المملكة العربية السعودية',
                'location_en' => 'Dammam, Saudi Arabia',

                'image' => 'projects/modern-coffee-corner.jpg',

                'sort_order' => 6,
                'is_active' => true,
            ],

            [
                'title_ar' => 'تجديد وترميم منزل بالكامل',
                'title_en' => 'Complete Home Renovation',

                'slug' => 'complete-home-renovation',

                'category_ar' => 'ترميم وتجديد',
                'category_en' => 'Home Renovation & Remodeling',

                'description_ar' =>
                    'تنفيذ أعمال تجديد وترميم منزل بالكامل مع تحديث الديكورات والتشطيبات وإعادة تنظيم المساحات الداخلية للوصول إلى تصميم عصري وعملي يناسب احتياجات أصحاب المنزل.',

                'description_en' =>
                    'A complete home renovation including updated finishes, interior decoration, and improved space planning to create a modern and functional home tailored to the owners’ needs.',

                'location_ar' => 'القطيف، المملكة العربية السعودية',
                'location_en' => 'Qatif, Saudi Arabia',

                'image' => 'projects/complete-home-renovation.jpg',

                'sort_order' => 7,
                'is_active' => true,
            ],

            [
                'title_ar' => 'ديكور داخلي متكامل لفيلا',
                'title_en' => 'Complete Villa Interior Design',

                'slug' => 'complete-villa-interior-design',

                'category_ar' => 'ديكور داخلي متكامل',
                'category_en' => 'Complete Interior Design',

                'description_ar' =>
                    'تنفيذ ديكور داخلي متكامل لفيلا يشمل تنسيق المداخل وغرف النوم وديكورات التلفزيون والخزائن والتكسيات والمرايات، مع توحيد الهوية التصميمية لجميع المساحات.',

                'description_en' =>
                    'Complete villa interior design covering entrances, bedrooms, TV walls, wardrobes, wall finishes, and mirrors, with a unified design identity across all spaces.',

                'location_ar' => 'الدمام، المملكة العربية السعودية',
                'location_en' => 'Dammam, Saudi Arabia',

                'image' => 'projects/complete-villa-interior.jpg',

                'sort_order' => 8,
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