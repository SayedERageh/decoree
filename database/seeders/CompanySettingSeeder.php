<?php

namespace Database\Seeders;

use App\Models\CompanySetting;
use Illuminate\Database\Seeder;

class CompanySettingSeeder extends Seeder
{
    public function run(): void
    {
        CompanySetting::updateOrCreate(
            ['id' => 1],
            [
                'company_name_en' => 'GRC Makkah – GRC & Exterior Decoration Company',
                'company_name_ar' => 'جي آر سي مكة – شركة GRC والديكورات الخارجية',

                'email' => 'info@grcmake.com',
                'phone' => '+966 56 484 0495',
                'whatsapp' => '+966 56 484 0495',

                /*
                |--------------------------------------------------------------------------
                | About
                |--------------------------------------------------------------------------
                */

                'about_en' => <<<'TEXT'
GRC Makkah is a specialized GRC and exterior architectural decoration company serving clients and construction projects in Makkah and across Saudi Arabia.

GRC Makkah specializes in the design, manufacturing, supply, and installation of Glass Reinforced Concrete (GRC) elements, architectural facades, exterior decorations, and customized architectural details.

Our GRC services in Makkah include GRC facades, architectural facades, decorative cornices, columns, domes, arches, frames, parapets, decorative panels, entrance decorations, exterior cladding, and custom GRC architectural elements.

As a specialized GRC company in Makkah, we work with architects, consultants, contractors, developers, property owners, and construction companies to deliver professional GRC solutions that combine architectural beauty, durability, accurate execution, and high-quality finishing.

GRC Makkah understands that the exterior facade of a building is an important part of its identity, appearance, and value. For this reason, we provide customized GRC and exterior decoration solutions based on the architectural design, project dimensions, technical drawings, requirements, and budget.

From design and technical preparation to GRC manufacturing, transportation, installation, and final finishing, GRC Makkah provides an integrated service designed to help clients complete their architectural projects professionally.

Our experience covers GRC works and exterior architectural decorations for villas, palaces, residential buildings, commercial buildings, administrative buildings, hotels, compounds, mosques, entrances, and various architectural projects in Makkah.

If you are looking for GRC in Makkah, GRC facades in Makkah, architectural facades, or professional exterior decorations, GRC Makkah provides customized solutions with attention to quality, accurate measurements, professional installation, and architectural details.

GRC Makkah is committed to delivering reliable GRC solutions that meet the requirements of modern architectural and construction projects.
TEXT,

                'about_ar' => <<<'TEXT'
جي آر سي مكة هي شركة متخصصة في أعمال GRC والواجهات المعمارية والديكورات الخارجية، وتقدم خدمات تصميم وتصنيع وتوريد وتركيب GRC في مكة المكرمة والمملكة العربية السعودية.

تتخصص جي آر سي مكة في تنفيذ جميع أعمال GRC والديكورات المعمارية الخارجية، بداية من التصميم والتجهيز الفني وحتى تصنيع وتركيب عناصر GRC والتشطيب النهائي.

تشمل خدمات جي آر سي مكة واجهات GRC، الواجهات المعمارية، الديكورات الخارجية، الكرانيش، الأعمدة، القباب، الأقواس، الإطارات، البرابيت، البانوهات الخارجية، مداخل المباني، الكسوات الخارجية، والعناصر المعمارية المصممة حسب طبيعة كل مشروع.

تعمل شركة جي آر سي مكة مع المهندسين والاستشاريين والمقاولين والمطورين العقاريين وأصحاب المشروعات لتقديم حلول GRC احترافية تجمع بين التصميم الجمالي والمتانة ودقة التنفيذ وجودة التشطيب.

نؤمن في جي آر سي مكة أن واجهة المبنى ليست مجرد عنصر ديكوري، بل هي جزء أساسي من هوية المبنى ومظهره وقيمته. لذلك نقدم حلول واجهات GRC وديكورات خارجية مخصصة تتناسب مع التصميم المعماري والمقاسات والرسومات الهندسية ومتطلبات المشروع والميزانية.

من التصميم والتجهيز الفني إلى تصنيع GRC والنقل والتركيب والتشطيب النهائي، تقدم جي آر سي مكة خدمة متكاملة لتنفيذ أعمال GRC والواجهات الخارجية باحترافية وجودة عالية.

تشمل أعمال جي آر سي مكة تنفيذ واجهات وديكورات GRC للفلل والقصور والمباني السكنية والمباني التجارية والإدارية والفنادق والكمبوندات والمساجد والمداخل والمشروعات المعمارية المختلفة في مكة المكرمة.

إذا كنت تبحث عن شركة GRC في مكة، أو تنفيذ واجهات GRC في مكة، أو أعمال الواجهات المعمارية والديكورات الخارجية، فإن جي آر سي مكة تقدم حلولًا مخصصة تناسب متطلبات كل مشروع.

نلتزم في جي آر سي مكة بجودة التصنيع، ودقة القياسات، وجودة الخامات، والاحترافية في التركيب، والاهتمام بأدق التفاصيل المعمارية لتحقيق أفضل نتيجة ممكنة لكل مشروع.
TEXT,

                /*
                |--------------------------------------------------------------------------
                | Vision
                |--------------------------------------------------------------------------
                */

                'vision_en' => <<<'TEXT'
Our vision at GRC Makkah is to become a trusted name in GRC works, architectural facades, exterior decorations, and specialized contracting services in Makkah and Saudi Arabia.

We aim to provide professional GRC solutions that combine modern architectural design, high-quality manufacturing, accurate installation, durability, and customer satisfaction.

GRC Makkah seeks to build long-term relationships with clients, architects, consultants, contractors, developers, and construction companies by delivering reliable GRC and exterior decoration solutions for residential, commercial, administrative, hospitality, and architectural projects.
TEXT,

                'vision_ar' => <<<'TEXT'
رؤيتنا في جي آر سي مكة هي أن نصبح من الأسماء الموثوقة في مجال أعمال GRC والواجهات المعمارية والديكورات الخارجية في مكة المكرمة والمملكة العربية السعودية.

نسعى في جي آر سي مكة إلى تقديم حلول احترافية في أعمال GRC والواجهات الخارجية تجمع بين التصميم المعماري المميز، وجودة التصنيع، ودقة التركيب، والمتانة، ورضا العملاء.

كما نهدف إلى بناء علاقات طويلة الأمد مع العملاء والمهندسين والاستشاريين والمقاولين والمطورين وشركات الإنشاءات من خلال تقديم حلول GRC وواجهات معمارية موثوقة للمشروعات السكنية والتجارية والإدارية والفندقية والمشروعات المعمارية المختلفة.
TEXT,

                /*
                |--------------------------------------------------------------------------
                | Mission
                |--------------------------------------------------------------------------
                */

                'mission_en' => <<<'TEXT'
Our mission at GRC Makkah is to provide professional GRC, architectural facade, exterior decoration, and specialized contracting solutions for projects in Makkah and Saudi Arabia.

We combine skilled workmanship, accurate measurements, quality materials, modern GRC manufacturing techniques, professional installation, and careful finishing to deliver durable and visually impressive architectural results.

Our goal is to make every GRC Makkah project a successful combination of architectural design, quality execution, durability, and customer satisfaction.

We work to provide customized GRC solutions that meet the technical, architectural, and aesthetic requirements of every project.
TEXT,

                'mission_ar' => <<<'TEXT'
مهمتنا في جي آر سي مكة هي تقديم حلول احترافية ومتكاملة في أعمال GRC والواجهات المعمارية والديكورات الخارجية والمقاولات المتخصصة للمشروعات في مكة المكرمة والمملكة العربية السعودية.

نجمع بين الخبرة العملية، ودقة القياسات، وجودة الخامات، وتقنيات تصنيع GRC الحديثة، والتركيب الاحترافي، والتشطيب الدقيق للوصول إلى نتائج معمارية قوية ومميزة.

هدفنا في جي آر سي مكة هو تنفيذ كل مشروع بصورة تجمع بين جمال التصميم، وجودة التصنيع، ودقة التركيب، والمتانة، ورضا العميل.

كما نحرص على تقديم حلول GRC مخصصة تتناسب مع المتطلبات الفنية والهندسية والجمالية لكل مشروع.
TEXT,

                /*
                |--------------------------------------------------------------------------
                | Commitment
                |--------------------------------------------------------------------------
                */

                'commitment_en' => <<<'TEXT'
At GRC Makkah, we are committed to providing more than decorative elements. We deliver complete GRC and exterior architectural solutions designed to improve the appearance, identity, and value of buildings.

Our commitment includes:

• High-quality GRC manufacturing.
• Accurate measurements and technical preparation.
• Professional GRC installation and finishing.
• Customized architectural facade designs.
• Exterior decoration solutions suitable for each project.
• Attention to architectural details.
• Reliable project execution.
• Clear communication with clients, contractors, and consultants.
• Solutions designed according to project requirements.
• Continuous improvement in GRC manufacturing and workmanship.

Whether the project is a private villa, palace, residential building, commercial building, administrative facility, hotel, mosque, compound, entrance, or large architectural development, GRC Makkah is ready to provide professional GRC and exterior decoration solutions from technical preparation to final installation and finishing.

QUALITY IN EVERY DETAIL.
PRECISION IN EVERY PROJECT.
GRC MAKKAH – ARCHITECTURAL QUALITY YOU CAN TRUST.
TEXT,

                'commitment_ar' => <<<'TEXT'
في جي آر سي مكة، نلتزم بتقديم أكثر من مجرد عناصر ديكورية، بل نقدم حلول GRC وواجهات معمارية وديكورات خارجية متكاملة تساعد على تحسين شكل المبنى وهويته وقيمته.

يعتمد التزام جي آر سي مكة على:

• تصنيع GRC بجودة عالية.
• دقة القياسات والتجهيزات الفنية.
• التركيب والتشطيب باحترافية.
• تنفيذ واجهات GRC حسب التصميم المعماري.
• تقديم حلول ديكورات خارجية مخصصة لكل مشروع.
• الاهتمام بأدق التفاصيل والزخارف المعمارية.
• الالتزام بتنفيذ الأعمال وفق خطة واضحة.
• التواصل المستمر مع العملاء والمقاولين والاستشاريين.
• تقديم حلول مناسبة لمتطلبات كل مشروع.
• التطوير المستمر في جودة تصنيع وتنفيذ GRC.

سواء كان المشروع فيلا خاصة، قصرًا، مبنى سكنيًا، مبنى تجاريًا أو إداريًا، فندقًا، مسجدًا، كمبوندًا، مدخل مبنى أو مشروعًا معماريًا كبيرًا، فإن جي آر سي مكة جاهزة لتنفيذ أعمال GRC والواجهات والديكورات الخارجية باحترافية بداية من التجهيز الفني وحتى التركيب والتشطيب النهائي.

الجودة في كل تفصيلة.
الدقة في كل مشروع.
جي آر سي مكة – جودة معمارية يمكنك الاعتماد عليها.
TEXT,

                /*
                |--------------------------------------------------------------------------
                | Address
                |--------------------------------------------------------------------------
                */

                'address_en' => 'Makkah, Saudi Arabia',
                'address_ar' => 'مكة المكرمة، المملكة العربية السعودية',
            ]
        );
    }
}
  
