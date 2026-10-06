<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [

            [
                'title_ar' => 'الديكور الداخلي المتكامل',
                'title_en' => 'Complete Interior Design',

                'slug' => 'complete-interior-design',

                'short_description_ar' =>
                    'تصميم وتنفيذ متكامل للديكور الداخلي للمنازل والفلل بأسلوب عصري ومودرن يناسب ذوق العميل والمساحة.',

                'short_description_en' =>
                    'Complete interior design and execution for homes and villas with modern solutions tailored to the client’s style and space.',

                'description_ar' =>
                    'نقدم خدمات متكاملة في تصميم وتنفيذ الديكور الداخلي للمنازل والفلل في الدمام والخبر والقطيف، بداية من دراسة المساحة واختيار التصميم المناسب وحتى تنفيذ التفاصيل النهائية.

                    تشمل الخدمة تنسيق جميع عناصر الديكور الداخلي من الجدران والأسقف والإضاءة والخامات والألوان والأثاث الثابت، للوصول إلى مساحة متناسقة تجمع بين الجمال والعملية.

                    نعمل على تنفيذ التصاميم العصرية والمودرن والكلاسيكية حسب طبيعة المشروع وذوق العميل، مع الاهتمام بكل تفصيلة للوصول إلى نتيجة أنيقة ومميزة.

                    هدفنا تقديم مساحة داخلية متكاملة تعكس شخصية أصحاب المنزل وتحقق أفضل استغلال للمساحة.',

                'description_en' =>
                    'We provide complete interior design and execution services for homes and villas in Dammam, Khobar, and Qatif, from space planning and design selection to final execution.

                    The service covers interior walls, ceilings, lighting, materials, colors, and built-in elements to create a balanced space that combines style and functionality.

                    We deliver modern, contemporary, and classic interiors according to the project requirements and client preferences, with attention to every detail.

                    Our goal is to create a complete interior that reflects the client’s personality and makes the best use of the available space.',

                'icon' => 'bi bi-house-heart',
                'image' => 'services/complete-interior-design.jpg',

                'sort_order' => 1,
                'is_active' => true,
            ],

            [
                'title_ar' => 'ديكورات التلفزيون',
                'title_en' => 'TV Wall Designs',

                'slug' => 'tv-wall-designs',

                'short_description_ar' =>
                    'تصميم وتنفيذ ديكورات تلفزيون مودرن تجمع بين الخامات والإضاءة والتفاصيل الأنيقة بما يناسب مساحة المنزل.',

                'short_description_en' =>
                    'Modern TV wall designs combining materials, lighting, and elegant details tailored to each interior space.',

                'description_ar' =>
                    'نصمم وننفذ ديكورات تلفزيون عصرية ومودرن تناسب مختلف مساحات المنازل والفلل في الدمام والخبر والقطيف.

                    يتم اختيار الخامات والألوان والإضاءة والتفاصيل حسب تصميم المكان، مع إمكانية دمج الشاشات ووحدات التخزين والرفوف والعناصر الديكورية بطريقة عملية وأنيقة.

                    نهتم بتناسق ديكور التلفزيون مع باقي عناصر المنزل للحصول على جدار مميز يضيف قيمة جمالية للمساحة.

                    يتم تنفيذ كل تصميم وفق المقاسات الفعلية للمكان واحتياجات العميل.',

                'description_en' =>
                    'We design and execute modern TV walls for homes and villas in Dammam, Khobar, and Qatif.

                    Materials, colors, lighting, storage units, shelves, and decorative elements are selected according to the space and client requirements.

                    Each TV wall is designed to complement the surrounding interior and create a distinctive focal point.

                    Every design is customized according to the actual dimensions of the space and the client’s needs.',

                'icon' => 'bi bi-tv',
                'image' => 'services/tv-wall-designs.jpg',

                'sort_order' => 2,
                'is_active' => true,
            ],

            [
                'title_ar' => 'تصميم غرف النوم',
                'title_en' => 'Bedroom Design',

                'slug' => 'bedroom-design',

                'short_description_ar' =>
                    'تصميم وتنفيذ غرف نوم عصرية ومريحة تجمع بين الأناقة والعملية وتناسب المساحة واحتياجات الأسرة.',

                'short_description_en' =>
                    'Modern and comfortable bedroom designs that combine style and functionality while fitting the space and family needs.',

                'description_ar' =>
                    'نقدم تصميم وتنفيذ غرف نوم مودرن وعصرية تناسب المنازل والفلل في الدمام والخبر والقطيف.

                    نهتم بتنسيق ألوان الجدران والخامات والإضاءة والخزائن والديكورات للحصول على غرفة نوم هادئة ومريحة ومتناسقة.

                    يمكن تنفيذ التصميم حسب مساحة الغرفة واحتياجات العميل مع استغلال كل جزء بطريقة عملية دون التأثير على جمال التصميم.

                    نركز على التفاصيل التي تجعل غرفة النوم مساحة مريحة وأنيقة للاستخدام اليومي.',

                'description_en' =>
                    'We design and execute modern bedrooms for homes and villas in Dammam, Khobar, and Qatif.

                    Wall colors, materials, lighting, wardrobes, and decorative elements are carefully coordinated to create a calm and comfortable bedroom.

                    Each design is customized according to the room dimensions and client requirements while making efficient use of the available space.

                    We focus on details that make the bedroom both elegant and comfortable for everyday living.',

                'icon' => 'bi bi-moon-stars',
                'image' => 'services/bedroom-design.jpg',

                'sort_order' => 3,
                'is_active' => true,
            ],

            [
                'title_ar' => 'الخزائن والدواليب المودرن',
                'title_en' => 'Modern Wardrobes & Cabinets',

                'slug' => 'modern-wardrobes-cabinets',

                'short_description_ar' =>
                    'تصميم وتنفيذ خزائن ودواليب مودرن بتقسيمات عملية وتشطيبات أنيقة واستغلال ذكي للمساحات.',

                'short_description_en' =>
                    'Custom modern wardrobes and cabinets with practical layouts, elegant finishes, and efficient use of space.',

                'description_ar' =>
                    'نصمم وننفذ الخزائن والدواليب المودرن للمنازل والفلل، مع الاهتمام بالمساحة والتقسيم الداخلي والتشطيبات النهائية.

                    يتم تصميم الخزائن حسب المقاسات الفعلية للمكان لتوفير أفضل استغلال ممكن للمساحة، مع تقسيمات داخلية تناسب احتياجات العميل.

                    تشمل الأعمال خزائن غرف النوم ووحدات التخزين والخزائن الجدارية والحلول المخصصة للمساحات المختلفة.

                    نحرص على الجمع بين الشكل العصري والعملية وجودة التنفيذ.',

                'description_en' =>
                    'We design and execute modern wardrobes and cabinets for homes and villas with careful attention to space, internal layouts, and finishes.

                    Each wardrobe is customized according to the actual dimensions of the space to maximize storage and functionality.

                    Our solutions include bedroom wardrobes, storage units, wall cabinets, and customized storage solutions.

                    We combine modern aesthetics, practical layouts, and quality execution in every project.',

                'icon' => 'bi bi-box-seam',
                'image' => 'services/modern-wardrobes.jpg',

                'sort_order' => 4,
                'is_active' => true,
            ],

            [
                'title_ar' => 'تكسيات الجدران',
                'title_en' => 'Wall Finishes',

                'slug' => 'wall-finishes',

                'short_description_ar' =>
                    'تنفيذ تكسيات جدارية وديكورات حائطية عصرية تضيف فخامة وشخصية مميزة للمساحات الداخلية.',

                'short_description_en' =>
                    'Modern wall finishes and decorative solutions that add character, depth, and elegance to interior spaces.',

                'description_ar' =>
                    'نقدم حلول تكسيات الجدران والديكورات الحائطية بتصاميم عصرية تناسب المنازل والفلل والمجالس وغرف المعيشة والمداخل.

                    يتم اختيار الخامات والألوان والتفاصيل بما يتناسب مع التصميم الداخلي للمكان، مع إمكانية دمج الإضاءة والمرايات والعناصر الديكورية.

                    تساعد التكسيات الجدارية على تغيير شكل المساحة وإضافة طابع فاخر ومميز دون الحاجة إلى تغيير جميع عناصر المكان.

                    يتم تنفيذ كل تصميم حسب المقاسات الفعلية وطبيعة الجدار والهوية التصميمية للمشروع.',

                'description_en' =>
                    'We provide modern wall finishes and decorative wall solutions for homes, villas, living rooms, entrances, and majlis spaces.

                    Materials, colors, and details are selected to complement the existing interior design, with options to integrate lighting, mirrors, and decorative elements.

                    Wall finishes can transform a space and add a refined character without changing the entire interior.

                    Every design is executed according to the actual wall dimensions and the overall design identity of the project.',

                'icon' => 'bi bi-grid-3x3-gap',
                'image' => 'services/wall-finishes.jpg',

                'sort_order' => 5,
                'is_active' => true,
            ],

            [
                'title_ar' => 'المرايات والديكورات الزجاجية',
                'title_en' => 'Mirrors & Glass Decor',

                'slug' => 'mirrors-glass-decor',

                'short_description_ar' =>
                    'تصميم وتنفيذ مرايات وديكورات زجاجية تضيف اتساعًا وإضاءة وأناقة للمداخل والجدران والمساحات الداخلية.',

                'short_description_en' =>
                    'Custom mirrors and glass decor that enhance space, light, and elegance across entrances, walls, and interiors.',

                'description_ar' =>
                    'ننفذ المرايات والديكورات الزجاجية بتصاميم عصرية تناسب المداخل والجدران وغرف النوم والمجالس والمساحات الداخلية المختلفة.

                    يتم اختيار شكل المرآة وحجمها وإطارها وطريقة توزيعها بما يتناسب مع التصميم الداخلي والمساحة.

                    يمكن دمج المرايات مع التكسيات الجدارية والإضاءة والعناصر الديكورية للحصول على نتيجة أكثر فخامة واتساعًا.

                    نهتم بدقة المقاسات والتفاصيل النهائية لضمان تناسق المرايات مع المكان.',

                'description_en' =>
                    'We design and install custom mirrors and glass decor for entrances, walls, bedrooms, majlis spaces, and other interiors.

                    Mirror shapes, sizes, frames, and layouts are selected to complement the interior design and available space.

                    Mirrors can be combined with wall finishes, lighting, and decorative elements to create a more spacious and refined interior.

                    We pay close attention to measurements and finishing details to achieve a seamless result.',

                'icon' => 'bi bi-stars',
                'image' => 'services/mirrors-glass-decor.jpg',

                'sort_order' => 6,
                'is_active' => true,
            ],

            [
                'title_ar' => 'تصميم وتنفيذ المداخل',
                'title_en' => 'Entrance Design & Execution',

                'slug' => 'entrance-design-execution',

                'short_description_ar' =>
                    'تصميم وتنفيذ مداخل مودرن وفاخرة تعطي المنزل انطباعًا أول مميزًا وتتناسب مع الهوية الداخلية للمكان.',

                'short_description_en' =>
                    'Modern and elegant entrance designs that create a distinctive first impression and complement the interior identity of the home.',

                'description_ar' =>
                    'نقدم تصميم وتنفيذ المداخل الداخلية للمنازل والفلل بأسلوب عصري وأنيق يعكس شخصية المكان منذ اللحظة الأولى.

                    تشمل التصاميم التكسيات الجدارية والمرايات والإضاءة والكونسول والخزائن والعناصر الديكورية حسب مساحة المدخل.

                    نهتم باستغلال المساحات الصغيرة والكبيرة بطريقة عملية مع الحفاظ على المظهر الراقي والمتناسق.

                    يتم تصميم المدخل بما يتناسب مع باقي الديكور الداخلي للمنزل.',

                'description_en' =>
                    'We design and execute elegant entrances for homes and villas, creating a distinctive first impression while reflecting the character of the interior.

                    Designs may include wall finishes, mirrors, lighting, consoles, cabinets, and decorative elements according to the entrance space.

                    We make practical use of both small and large spaces while maintaining a refined and cohesive appearance.

                    Each entrance is designed to complement the overall interior style of the home.',

                'icon' => 'bi bi-door-open',
                'image' => 'services/entrance-design.jpg',

                'sort_order' => 7,
                'is_active' => true,
            ],

            [
                'title_ar' => 'تصميم ركن كوفي',
                'title_en' => 'Coffee Corner Design',

                'slug' => 'coffee-corner-design',

                'short_description_ar' =>
                    'تصميم وتنفيذ أركان كوفي مودرن داخل المنزل بتفاصيل عملية وأنيقة واستغلال ذكي للمساحة.',

                'short_description_en' =>
                    'Modern home coffee corners designed with practical details, elegant finishes, and smart use of available space.',

                'description_ar' =>
                    'نصمم وننفذ أركان كوفي داخل المنازل والفلل بطريقة عصرية تضيف لمسة مميزة للمكان وتستغل المساحة المتاحة بشكل ذكي.

                    يتم تصميم الركن حسب المساحة والموقع مع اختيار الخامات والألوان والإضاءة ووحدات التخزين المناسبة.

                    يمكن تنفيذ ركن الكوفي داخل المطبخ أو المجلس أو غرفة المعيشة أو أي مساحة مناسبة داخل المنزل.

                    الهدف هو الحصول على ركن عملي وأنيق ينسجم مع الديكور الداخلي للمكان.',

                'description_en' =>
                    'We design and execute modern home coffee corners that add character while making smart use of available space.

                    Each corner is planned according to its location and dimensions, with suitable materials, colors, lighting, and storage solutions.

                    Coffee corners can be integrated into kitchens, majlis spaces, living rooms, or other suitable areas.

                    The goal is to create a practical and elegant feature that blends naturally with the surrounding interior.',

                'icon' => 'bi bi-cup-hot',
                'image' => 'services/coffee-corner.jpg',

                'sort_order' => 8,
                'is_active' => true,
            ],

            [
                'title_ar' => 'ترميم وتجديد المنازل',
                'title_en' => 'Home Renovation & Remodeling',

                'slug' => 'home-renovation-remodeling',

                'short_description_ar' =>
                    'تجديد وترميم المنازل وتحديث المساحات الداخلية من خلال تطوير التشطيبات والديكورات وإعادة تنظيم التصميم.',

                'short_description_en' =>
                    'Home renovation and remodeling services that refresh interiors through updated finishes, decoration, and improved space planning.',

                'description_ar' =>
                    'نقدم خدمات ترميم وتجديد المنازل وتحديث الديكورات الداخلية في الدمام والخبر والقطيف، مع حلول تناسب المنازل القائمة والمساحات التي تحتاج إلى تطوير.

                    تشمل الأعمال تحديث الجدران والأسقف والتكسيات والإضاءة والديكورات وإعادة تنظيم بعض المساحات بما يتناسب مع الاستخدام الحالي.

                    نساعد على تحويل المساحات القديمة إلى تصاميم عصرية ومريحة دون الحاجة إلى تغيير كل عناصر المنزل.

                    يتم تنفيذ أعمال التجديد وفق حالة المكان ومتطلبات العميل والنتيجة التصميمية المطلوبة.',

                'description_en' =>
                    'We provide home renovation and remodeling services in Dammam, Khobar, and Qatif for existing homes that need updated interiors and improved functionality.

                    Services may include updated walls, ceilings, finishes, lighting, decoration, and improved space planning.

                    We help transform outdated interiors into modern and comfortable spaces without necessarily replacing every element of the home.

                    Renovation work is planned according to the existing condition, client requirements, and desired design outcome.',

                'icon' => 'bi bi-arrow-repeat',
                'image' => 'services/home-renovation.jpg',

                'sort_order' => 9,
                'is_active' => true,
            ],

            [
                'title_ar' => 'تنسيق وتجديد الديكور الداخلي',
                'title_en' => 'Interior Decor Refresh',

                'slug' => 'interior-decor-refresh',

                'short_description_ar' =>
                    'تجديد وتنسيق الديكور الداخلي للمساحات القائمة لإعطائها مظهرًا عصريًا جديدًا دون تغيير كامل للمكان.',

                'short_description_en' =>
                    'Interior decor refresh services that give existing spaces a modern new look without requiring a complete renovation.',

                'description_ar' =>
                    'نقدم حلولًا لتجديد وتنسيق الديكور الداخلي للمنازل والمساحات القائمة التي تحتاج إلى تغيير في الشكل أو تحسين في التفاصيل.

                    يمكن أن يشمل التجديد تغيير التكسيات والدهانات والإضاءة والمرايات وديكورات التلفزيون والخزائن وبعض العناصر الداخلية حسب احتياجات المكان.

                    نركز على تحقيق أكبر تأثير بصري ممكن من خلال تغييرات مدروسة ومتناسقة مع التصميم الحالي.

                    هذه الخدمة مناسبة لمن يرغب في تحديث شكل منزله والحصول على مظهر عصري دون تنفيذ تجديد شامل.',

                'description_en' =>
                    'We provide interior decor refresh solutions for existing homes and spaces that need a new look or improved visual details.

                    Updates may include wall finishes, paint, lighting, mirrors, TV walls, wardrobes, and selected interior elements according to the space requirements.

                    We focus on creating a noticeable visual transformation through carefully planned and coordinated improvements.

                    This service is ideal for homeowners who want a modern update without a complete renovation.',

                'icon' => 'bi bi-magic',
                'image' => 'services/interior-decor-refresh.jpg',

                'sort_order' => 10,
                'is_active' => true,
            ],

        ];

        foreach ($services as $service) {
            Service::updateOrCreate(
                ['slug' => $service['slug']],
                $service
            );
        }
    }
}