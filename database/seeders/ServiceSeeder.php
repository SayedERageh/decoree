<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [

            /*
            |--------------------------------------------------------------------------
            | 1. GRC Works
            |--------------------------------------------------------------------------
            */

            [
                'title_ar' => 'أعمال GRC مكة',
                'title_en' => 'GRC Makkah Works',

                'slug' => 'grc-makkah-works',

                'short_description_ar' =>
                    'تنفيذ وتصنيع وتركيب أعمال GRC مكة والديكورات المعمارية الخارجية للفلل والقصور والمباني والمشروعات المختلفة.',

                'short_description_en' =>
                    'Manufacturing, supply, and installation of GRC Makkah works and exterior architectural decorations for villas, palaces, buildings, and various projects.',

                'description_ar' =>
                    'تقدم شركة جي آر سي مكة خدمات متكاملة في أعمال GRC مكة تشمل التصميم والتجهيز والتصنيع والتوريد والتركيب والتشطيب النهائي. يتم تنفيذ عناصر GRC في مكة المكرمة حسب التصميمات والمقاسات المطلوبة لكل مشروع، مع الاهتمام بدقة التصنيع وجودة التنفيذ والتفاصيل المعمارية.

                    تشمل أعمال جي آر سي مكة تنفيذ الواجهات المعمارية، كرانيش GRC، أعمدة GRC، أقواس GRC، قباب GRC، الإطارات، الحليات، الزخارف والبانوهات وعناصر الديكور الخارجي.

                    نقدم حلول GRC مكة للفلل والقصور والمباني السكنية والتجارية والإدارية والفنادق والمجمعات والمشروعات المعمارية المختلفة، مع إمكانية تنفيذ العناصر حسب التصميم الهندسي والطابع المعماري للمبنى.

                    نحرص في كل مشروع على الجمع بين جمال التصميم والمتانة ودقة القياسات وجودة التركيب والتشطيب للحصول على أعمال GRC مكة بمظهر معماري احترافي.',

                'description_en' =>
                    'GRC Makkah provides complete GRC services including design preparation, manufacturing, supply, installation, and final finishing. GRC elements are produced according to the required architectural designs and project dimensions in Makkah, with a strong focus on precision, quality, and architectural details.

                    GRC Makkah works include architectural facades, GRC cornices, columns, arches, domes, frames, trims, decorative elements, panels, and exterior architectural details.

                    We provide GRC solutions for villas, palaces, residential buildings, commercial and administrative buildings, hotels, compounds, and various architectural projects in Makkah.

                    Our goal is to combine architectural beauty, durability, accurate measurements, professional installation, and high-quality finishing in every GRC Makkah project.',

                'icon' => 'bi bi-building',
                'image' => 'services/grc-works.jpg',

                'sort_order' => 1,
                'is_active' => true,
            ],

            /*
            |--------------------------------------------------------------------------
            | 2. GRC Facades
            |--------------------------------------------------------------------------
            */

            [
                'title_ar' => 'واجهات GRC مكة',
                'title_en' => 'GRC Makkah Facades',

                'slug' => 'grc-makkah-facades',

                'short_description_ar' =>
                    'تصميم وتنفيذ واجهات GRC مكة للفلل والقصور والمباني السكنية والتجارية والإدارية في مكة المكرمة.',

                'short_description_en' =>
                    'Design and installation of GRC Makkah facades for villas, palaces, residential, commercial, and administrative buildings.',

                'description_ar' =>
                    'تخصص شركة جي آر سي مكة في تصميم وتنفيذ واجهات GRC مكة المعمارية التي تجمع بين التصميم الجمالي والدقة في التنفيذ والمتانة. نقدم حلول واجهات GRC في مكة المكرمة للتصميمات الحديثة والكلاسيكية والنيو كلاسيك.

                    تشمل خدمة واجهات GRC مكة تنفيذ الكرانيش والحليات والإطارات والأعمدة والأقواس والبانوهات والزخارف والعناصر المعمارية المختلفة حسب تصميم المشروع.

                    نعمل مع ملاك الفلل والقصور والمقاولين والمهندسين وأصحاب المشروعات لتنفيذ واجهات معمارية مميزة في مكة، مع الاهتمام بدقة القياسات وتناسق العناصر وجودة التصنيع والتركيب والتشطيب النهائي.

                    إذا كنت تبحث عن شركة GRC في مكة لتنفيذ واجهة معمارية متكاملة، فإن حلول جي آر سي مكة تشمل مراحل تجهيز وتصنيع وتركيب عناصر الواجهة وفق متطلبات المشروع.',

                'description_en' =>
                    'GRC Makkah specializes in designing and installing architectural GRC facades that combine aesthetic appeal, precision, and durability. Our GRC Makkah facade solutions are suitable for modern, classic, and neo-classical architectural styles.

                    GRC Makkah facade services include cornices, trims, frames, columns, arches, decorative panels, and customized architectural elements.

                    We work with villa owners, palace owners, contractors, architects, and project owners to create distinctive architectural facades in Makkah with accurate measurements, coordinated elements, quality manufacturing, professional installation, and finishing.

                    GRC Makkah provides complete facade solutions from preparation and manufacturing to installation according to project requirements.',

                'icon' => 'bi bi-buildings',
                'image' => 'services/grc-facades.jpg',

                'sort_order' => 2,
                'is_active' => true,
            ],

            /*
            |--------------------------------------------------------------------------
            | 3. Exterior Decorations
            |--------------------------------------------------------------------------
            */

            [
                'title_ar' => 'ديكورات GRC مكة الخارجية',
                'title_en' => 'GRC Makkah Exterior Decorations',

                'slug' => 'grc-makkah-exterior-decorations',

                'short_description_ar' =>
                    'تنفيذ ديكورات GRC مكة والزخارف الخارجية للواجهات ومداخل الفلل والقصور والمباني.',

                'short_description_en' =>
                    'GRC Makkah exterior decorations and architectural details for facades, villas, palaces, entrances, and buildings.',

                'description_ar' =>
                    'تقدم شركة جي آر سي مكة خدمات الديكورات الخارجية للمباني والفلل والقصور والمشروعات التجارية والإدارية في مكة المكرمة، مع إمكانية تنفيذ التصميمات الكلاسيكية والعصرية حسب هوية كل مشروع.

                    تشمل ديكورات GRC مكة الكرانيش والحليات والزخارف والإطارات والبانوهات والأعمدة والأقواس والعناصر المعمارية التي تضيف تفاصيل جمالية للواجهة.

                    نعمل على تحويل التصميم المعماري إلى عناصر GRC منفذة بدقة، بداية من دراسة الرسومات والمقاسات وحتى التصنيع والتوريد والتركيب والتشطيب.

                    تهدف حلول جي آر سي مكة إلى تقديم ديكورات خارجية متناسقة مع تصميم المبنى وتجمع بين الفخامة والجودة والمتانة ودقة التنفيذ.',

                'description_en' =>
                    'GRC Makkah provides exterior decoration solutions for villas, palaces, residential, commercial, and administrative buildings in Makkah, including classic and modern architectural styles.

                    GRC Makkah exterior decorations include cornices, trims, decorative elements, frames, panels, columns, arches, and customized architectural details.

                    We transform architectural concepts and drawings into accurately manufactured and professionally installed GRC exterior elements, from measurements and manufacturing to installation and finishing.

                    Our GRC Makkah exterior decoration solutions are designed to enhance building facades while combining elegance, durability, quality, and precise execution.',

                'icon' => 'bi bi-stars',
                'image' => 'services/exterior-decorations.jpg',

                'sort_order' => 3,
                'is_active' => true,
            ],

            /*
            |--------------------------------------------------------------------------
            | 4. Villa & Palace Facades
            |--------------------------------------------------------------------------
            */

            [
                'title_ar' => 'واجهات فلل وقصور GRC مكة',
                'title_en' => 'GRC Makkah Villa & Palace Facades',

                'slug' => 'grc-makkah-villa-palace-facades',

                'short_description_ar' =>
                    'تصميم وتنفيذ واجهات فلل وقصور GRC مكة باستخدام الكرانيش والأعمدة والأقواس والزخارف المعمارية.',

                'short_description_en' =>
                    'GRC Makkah villa and palace facades using GRC columns, cornices, arches, and architectural decorative elements.',

                'description_ar' =>
                    'تتخصص شركة جي آر سي مكة في تنفيذ واجهات الفلل والقصور باستخدام عناصر GRC والديكورات المعمارية الخارجية في مكة المكرمة.

                    نقدم حلولًا مخصصة لواجهات الفلل والقصور بما يتناسب مع التصميم المعماري للمبنى، سواء كان التصميم كلاسيكيًا أو مودرن أو نيو كلاسيك.

                    تشمل أعمال واجهات GRC مكة تنفيذ الأعمدة والكرانيش والأقواس والإطارات والزخارف والبانوهات والعناصر الخاصة بالمداخل والواجهات.

                    نهتم بالتفاصيل المعمارية التي تجعل واجهة الفيلا أو القصر أكثر فخامة وتناسقًا، مع الالتزام بدقة القياسات وجودة التصنيع والتركيب والتشطيب.',

                'description_en' =>
                    'GRC Makkah specializes in villa and palace facades using GRC and exterior architectural decoration elements in Makkah.

                    Our facade solutions are customized according to the architectural style of each building, including classic, modern, and neo-classical designs.

                    GRC Makkah villa and palace facade services include columns, cornices, arches, frames, decorative panels, entrances, and customized facade elements.

                    We focus on architectural details, proportions, accurate measurements, professional installation, and high-quality finishing.',

                'icon' => 'bi bi-house',
                'image' => 'services/villa-palace-facades.jpg',

                'sort_order' => 4,
                'is_active' => true,
            ],

            /*
            |--------------------------------------------------------------------------
            | 5. GRC Cornices
            |--------------------------------------------------------------------------
            */

            [
                'title_ar' => 'كرانيش GRC مكة وحليات الواجهات',
                'title_en' => 'GRC Makkah Cornices & Facade Trims',

                'slug' => 'grc-makkah-cornices-facade-trims',

                'short_description_ar' =>
                    'تصنيع وتركيب كرانيش GRC مكة وحليات وزخارف الواجهات بتصميمات تناسب مختلف الطرز المعمارية.',

                'short_description_en' =>
                    'Manufacturing and installation of GRC Makkah cornices, trims, and facade details for different architectural styles.',

                'description_ar' =>
                    'توفر شركة جي آر سي مكة تصنيع وتركيب كرانيش GRC مكة وحليات الواجهات بمختلف الأشكال والتصميمات، مع إمكانية تنفيذ العناصر حسب الرسومات والمقاسات الخاصة بكل مشروع.

                    تستخدم كرانيش GRC مكة لإضافة تفاصيل معمارية مميزة للواجهات والفلل والقصور والمباني التجارية والإدارية في مكة المكرمة.

                    نحرص على دقة الأبعاد وتناسق القطع وجودة التصنيع والتركيب للحصول على خطوط وتشطيبات متناسقة مع التصميم العام للواجهة.

                    يمكن تنفيذ كرانيش GRC مكة حسب التصميم المعماري المطلوب بما يتناسب مع الواجهات الكلاسيكية والمودرن والنيو كلاسيك.',

                'description_en' =>
                    'GRC Makkah manufactures and installs cornices, facade trims, and architectural details in various designs according to project drawings and dimensions.

                    GRC Makkah cornices enhance the architectural appearance of villas, palaces, residential, commercial, and administrative buildings in Makkah.

                    We focus on dimensional accuracy, consistency, manufacturing quality, professional installation, and finishing.

                    Custom GRC Makkah cornices can be produced according to architectural designs and different classic, modern, and neo-classical styles.',

                'icon' => 'bi bi-border-style',
                'image' => 'services/grc-cornices.jpg',

                'sort_order' => 5,
                'is_active' => true,
            ],

            /*
            |--------------------------------------------------------------------------
            | 6. GRC Columns
            |--------------------------------------------------------------------------
            */

            [
                'title_ar' => 'أعمدة GRC مكة',
                'title_en' => 'GRC Makkah Columns',

                'slug' => 'grc-makkah-columns',

                'short_description_ar' =>
                    'تصميم وتصنيع وتركيب أعمدة GRC مكة للواجهات ومداخل الفلل والقصور والمباني والمشروعات التجارية.',

                'short_description_en' =>
                    'Design, manufacturing, and installation of GRC Makkah columns for facades, entrances, villas, palaces, and commercial projects.',

                'description_ar' =>
                    'تنفذ شركة جي آر سي مكة أعمدة GRC معمارية بمقاسات وتصميمات متنوعة لتناسب مداخل الفلل والقصور والواجهات والمباني المختلفة في مكة المكرمة.

                    يمكن تنفيذ أعمدة GRC مكة بأشكال كلاسيكية أو مودرن أو حسب التصميم المعماري للمشروع، مع الاهتمام بالتناسب بين الأعمدة وباقي عناصر الواجهة.

                    نقدم خدمات القياس والتصنيع والتوريد والتركيب والتشطيب لضمان الحصول على أعمدة GRC مكة متناسقة وذات مظهر معماري احترافي.

                    يتم تنفيذ كل عنصر وفق متطلبات المشروع والتصميم والمقاسات المحددة.',

                'description_en' =>
                    'GRC Makkah designs, manufactures, and installs architectural GRC columns for villa entrances, palaces, facades, residential buildings, and commercial projects.

                    Columns can be produced in classic, modern, or customized designs according to the architectural requirements of each project in Makkah.

                    Our GRC Makkah column service covers measurement, manufacturing, supply, installation, and finishing.

                    Each element is produced according to project requirements, architectural design, and specified dimensions.',

                'icon' => 'bi bi-columns-gap',
                'image' => 'services/grc-columns.jpg',

                'sort_order' => 6,
                'is_active' => true,
            ],

            /*
            |--------------------------------------------------------------------------
            | 7. GRC Arches & Domes
            |--------------------------------------------------------------------------
            */

            [
                'title_ar' => 'أقواس وقباب GRC مكة',
                'title_en' => 'GRC Makkah Arches & Domes',

                'slug' => 'grc-makkah-arches-domes',

                'short_description_ar' =>
                    'تنفيذ أقواس وقباب GRC مكة وعناصر معمارية مميزة للفلل والقصور والمداخل والمشروعات المعمارية.',

                'short_description_en' =>
                    'Custom GRC Makkah arches, domes, and architectural elements for villas, palaces, entrances, and architectural projects.',

                'description_ar' =>
                    'تقدم شركة جي آر سي مكة تنفيذ أقواس وقباب GRC مكة وعناصر معمارية خاصة تضيف طابعًا مميزًا للواجهات والمداخل والفلل والقصور في مكة المكرمة.

                    يتم تنفيذ القباب والأقواس وفق التصميم والمقاسات المطلوبة مع مراعاة التناسق الهندسي ودقة التصنيع والتركيب والتشطيب.

                    تشمل حلول جي آر سي مكة تنفيذ العناصر المناسبة للتصميمات الكلاسيكية والفاخرة والمشروعات التي تحتاج إلى تفاصيل معمارية مميزة.

                    يتم تجهيز كل عنصر وفق أبعاد المشروع والطابع المعماري العام للواجهة.',

                'description_en' =>
                    'GRC Makkah provides custom arches, domes, and architectural elements for distinctive facades, entrances, villas, and palaces in Makkah.

                    All GRC Makkah arches and domes are manufactured according to project dimensions and designs with attention to geometry, installation accuracy, and finishing.

                    Our solutions are suitable for classic, luxury, and customized architectural projects requiring distinctive architectural details.

                    Each element is prepared according to project dimensions and the overall architectural style.',

                'icon' => 'bi bi-circle',
                'image' => 'services/grc-arches-domes.jpg',

                'sort_order' => 7,
                'is_active' => true,
            ],

            /*
            |--------------------------------------------------------------------------
            | 8. Custom GRC
            |--------------------------------------------------------------------------
            */

            [
                'title_ar' => 'تصنيع GRC مكة حسب التصميم',
                'title_en' => 'Custom GRC Makkah Manufacturing',

                'slug' => 'custom-grc-makkah-manufacturing',

                'short_description_ar' =>
                    'تصنيع عناصر GRC مكة مخصصة حسب الرسومات الهندسية والمقاسات والتصميم المعماري لكل مشروع.',

                'short_description_en' =>
                    'Custom GRC Makkah elements manufactured according to architectural drawings, dimensions, and project requirements.',

                'description_ar' =>
                    'توفر شركة جي آر سي مكة خدمة تصنيع عناصر GRC حسب التصميم والرسومات الهندسية الخاصة بالمشروع، سواء كانت واجهات أو كرانيش أو أعمدة أو أقواس أو زخارف أو عناصر معمارية خاصة.

                    نبدأ بدراسة التصميم والمقاسات المطلوبة ثم تجهيز العناصر للتصنيع والتركيب بما يتناسب مع طبيعة المشروع وموقعه في مكة المكرمة.

                    خدمة تصنيع GRC مكة حسب التصميم مناسبة للمشروعات التي تحتاج إلى عناصر خاصة أو تصميمات غير تقليدية يتم تنفيذها وفق رؤية المهندس أو المصمم ومتطلبات العميل.

                    نحرص على دقة التفاصيل والأبعاد والتناسق بين العناصر للحصول على نتيجة متوافقة مع التصميم المعماري.',

                'description_en' =>
                    'GRC Makkah provides customized GRC manufacturing according to architectural drawings, project dimensions, and design requirements.

                    Custom elements may include facades, cornices, columns, arches, decorative panels, and unique architectural details.

                    This GRC Makkah service is suitable for projects requiring customized or non-standard elements based on the architect’s design and client requirements.

                    We focus on dimensional accuracy, architectural details, and consistency between all manufactured elements.',

                'icon' => 'bi bi-vector-pen',
                'image' => 'services/custom-grc.jpg',

                'sort_order' => 8,
                'is_active' => true,
            ],

            /*
            |--------------------------------------------------------------------------
            | 9. Architectural Facades
            |--------------------------------------------------------------------------
            */

            [
                'title_ar' => 'الواجهات المعمارية GRC مكة',
                'title_en' => 'GRC Makkah Architectural Facades',

                'slug' => 'grc-makkah-architectural-decorative-facades',

                'short_description_ar' =>
                    'تنفيذ واجهات معمارية وديكورية GRC مكة للمباني والفلل والمشروعات التجارية والإدارية في مكة.',

                'short_description_en' =>
                    'Complete GRC Makkah architectural and decorative facades for buildings, villas, commercial, and administrative projects.',

                'description_ar' =>
                    'تقدم شركة جي آر سي مكة تنفيذ الواجهات المعمارية والديكورية للمباني الجديدة وأعمال تطوير وتجديد الواجهات في مكة المكرمة، مع توفير عناصر GRC والديكورات الخارجية المناسبة للتصميم.

                    نساعد في تنفيذ واجهات GRC مكة التي تجمع بين الشكل الجمالي والهوية المعمارية للمشروع، مع الاهتمام بالتفاصيل والتناسق بين جميع العناصر الخارجية.

                    تشمل الخدمة الواجهات السكنية والتجارية والإدارية وواجهات الفلل والقصور والمداخل والمشروعات الخاصة.

                    يتم تنفيذ عناصر الواجهة وفق التصميم والمقاسات المطلوبة مع الاهتمام بجودة التصنيع والتركيب والتشطيب النهائي.',

                'description_en' =>
                    'GRC Makkah provides architectural and decorative facade solutions for new buildings as well as facade renovation and enhancement projects in Makkah.

                    Our GRC Makkah facade solutions combine architectural identity, aesthetic design, exterior decorations, and professional finishing.

                    We serve residential, commercial, administrative, villa, palace, entrance, and private architectural projects.

                    Facade elements are produced according to project designs and dimensions with a strong focus on manufacturing, installation, and final finishing quality.',

                'icon' => 'bi bi-layout-text-window',
                'image' => 'services/architectural-facades.jpg',

                'sort_order' => 9,
                'is_active' => true,
            ],

            /*
            |--------------------------------------------------------------------------
            | 10. GRC Installation
            |--------------------------------------------------------------------------
            */

            [
                'title_ar' => 'تركيب وتثبيت أعمال GRC مكة',
                'title_en' => 'GRC Makkah Installation & Fixing',

                'slug' => 'grc-makkah-installation-fixing',

                'short_description_ar' =>
                    'تركيب وتثبيت عناصر GRC مكة والواجهات والديكورات الخارجية بدقة واحترافية وفق متطلبات المشروع.',

                'short_description_en' =>
                    'Professional installation and fixing of GRC Makkah facades and exterior architectural elements.',

                'description_ar' =>
                    'تقدم شركة جي آر سي مكة خدمات تركيب وتثبيت أعمال GRC والواجهات والديكورات الخارجية في مكة المكرمة، مع مراعاة دقة المحاذاة والتثبيت وتناسق العناصر مع التصميم المعماري.

                    تشمل أعمال تركيب GRC مكة واجهات GRC والكرانيش والأعمدة والأقواس والقباب والإطارات والزخارف والعناصر المخصصة.

                    نحرص على تنفيذ أعمال التركيب باحترافية بداية من تجهيز الموقع وحتى تركيب العناصر والتشطيب النهائي وتسليم الأعمال.

                    يتم الاهتمام بتناسق جميع عناصر الواجهة وجودة التثبيت ودقة التنفيذ للحصول على نتيجة متوافقة مع التصميم المعماري للمشروع.',

                'description_en' =>
                    'GRC Makkah provides professional installation and fixing services for GRC facades and exterior architectural elements in Makkah.

                    Installation includes GRC facades, cornices, columns, arches, domes, frames, decorative elements, and customized components.

                    We focus on accurate alignment, secure fixing, architectural consistency, and professional final finishing from site preparation to project completion.

                    Every installation is handled according to the architectural design and project requirements.',

                'icon' => 'bi bi-tools',
                'image' => 'services/grc-installation.jpg',

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