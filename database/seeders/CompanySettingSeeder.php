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
                'company_name_en' => 'Dammam Decor – Interior Design & Home Renovation',
                'company_name_ar' => 'دمام ديكور – للديكور الداخلي وتجديد المنازل',

                'email' => 'info@dammamdecor.com',
                'phone' => '+966 56 420 6335',
                'whatsapp' => '+966 56 420 6335',

                /*
                |--------------------------------------------------------------------------
                | About
                |--------------------------------------------------------------------------
                */

                'about_en' => <<<'TEXT'
Dammam Decor specializes in modern interior design, home renovation, and custom decoration solutions in Dammam, Khobar, Qatif, and surrounding areas.

We provide complete interior decoration and renovation services, combining modern design, professional execution, quality materials, and attention to every detail.

Our services include TV wall designs, custom wardrobes, bedrooms, mirrors, wall decorations, entrances, renovations, modern interior decorations, and customized solutions for homes and residential spaces.

We work to transform ordinary spaces into elegant and functional interiors that reflect the client's taste and lifestyle.

From the initial design concept to execution and final finishing, Dammam Decor provides integrated interior decoration solutions with a focus on modern style, quality, and professional workmanship.

Whether you are renovating your home, designing a new bedroom, upgrading your TV wall, installing custom wardrobes, or looking for a complete interior makeover, we are ready to turn your ideas into reality.

Our goal is simple: modern designs, precise execution, elegant details, and a finished space you will be proud of.
TEXT,

                'about_ar' => <<<'TEXT'
دمام ديكور متخصصون في تنفيذ وتجديد المنازل والديكورات الداخلية بتصاميم عصرية ومودرن في الدمام والخبر والقطيف والمناطق المحيطة.

نقدم حلولًا متكاملة للديكور الداخلي وتجديد المنازل، تجمع بين التصميم العصري، جودة الخامات، دقة التنفيذ، والاهتمام بأدق التفاصيل.

تشمل خدماتنا ديكورات التلفزيون، الخزائن، غرف النوم، المرايات، تكسيات الجدران، المداخل، الترميم والتجديد، والعديد من أعمال الديكور الداخلي بتصاميم حديثة تناسب ذوق كل عميل.

نعمل على تحويل المساحات العادية إلى أماكن أنيقة وعملية تعكس ذوق أصحابها وتناسب أسلوب حياتهم.

من فكرة التصميم الأولى وحتى التنفيذ والتشطيب النهائي، نقدم حلولًا متكاملة للديكور الداخلي مع الاهتمام بجودة التنفيذ والتفاصيل العصرية.

سواء كنت ترغب في تجديد منزلك، تصميم غرفة نوم جديدة، تطوير ديكور التلفزيون، تنفيذ خزائن مخصصة، أو تجديد الديكور الداخلي بالكامل، نحن جاهزون لتحويل فكرتك إلى واقع.

هدفنا بسيط:
تصاميم عصرية، تنفيذ دقيق، تفاصيل أنيقة، ونتيجة تليق بمنزلك.
TEXT,

                /*
                |--------------------------------------------------------------------------
                | Vision
                |--------------------------------------------------------------------------
                */

                'vision_en' => <<<'TEXT'
Our vision is to become a trusted name in modern interior decoration, home renovation, and custom interior solutions in Dammam, Khobar, Qatif, and across the Eastern Province.

We aim to create elegant and functional spaces through modern designs, professional execution, high-quality materials, and attention to detail.

We believe that every home deserves a unique interior that reflects its owner's personality and lifestyle.
TEXT,

                'vision_ar' => <<<'TEXT'
رؤيتنا أن نكون من الأسماء الموثوقة في مجال الديكور الداخلي وتجديد المنازل وتنفيذ التصاميم العصرية في الدمام والخبر والقطيف والمنطقة الشرقية.

نسعى إلى تقديم مساحات تجمع بين الأناقة والعملية من خلال التصاميم الحديثة، التنفيذ الاحترافي، جودة الخامات، والاهتمام بأدق التفاصيل.

نؤمن أن لكل منزل طابعًا خاصًا، ولذلك نحرص على تقديم تصاميم وحلول تتناسب مع ذوق العميل واحتياجاته.
TEXT,

                /*
                |--------------------------------------------------------------------------
                | Mission
                |--------------------------------------------------------------------------
                */

                'mission_en' => <<<'TEXT'
Our mission is to provide modern interior decoration and home renovation solutions that combine creativity, quality, precision, and professional execution.

We work closely with our clients to understand their needs and transform their ideas into elegant and functional spaces.

From bedrooms and wardrobes to TV walls, mirrors, entrances, wall decorations, and complete home renovations, we deliver customized solutions designed around every space.
TEXT,

                'mission_ar' => <<<'TEXT'
مهمتنا تقديم حلول عصرية ومتكاملة في مجال الديكور الداخلي وتجديد المنازل، تجمع بين الإبداع وجودة التنفيذ ودقة التفاصيل.

نعمل على فهم احتياجات كل عميل وتحويل أفكاره إلى مساحات أنيقة وعملية تناسب منزله وذوقه.

من غرف النوم والخزائن إلى ديكورات التلفزيون والمرايات والمداخل وتكسيات الجدران وتجديد المنازل بالكامل، نقدم حلولًا مخصصة لكل مساحة.
TEXT,

                /*
                |--------------------------------------------------------------------------
                | Commitment
                |--------------------------------------------------------------------------
                */

                'commitment_en' => <<<'TEXT'
At Dammam Decor, we are committed to delivering interior spaces that combine modern style, functionality, quality, and professional execution.

Our commitment includes:

• Modern and contemporary interior designs.
• Professional home renovation and remodeling.
• Custom bedrooms and wardrobes.
• Modern TV wall decorations.
• Elegant mirror designs.
• Wall cladding and interior decorations.
• Entrance and reception area designs.
• Quality materials and finishing.
• Accurate execution and attention to detail.
• Customized solutions for every home.
• Clear communication throughout the project.

We believe that great interiors are created through the right combination of design, materials, execution, and attention to detail.

MODERN DESIGN.
PRECISE EXECUTION.
ELEGANT DETAILS.
TEXT,

                'commitment_ar' => <<<'TEXT'
في دمام ديكور، نحرص على تقديم مساحات داخلية تجمع بين التصميم العصري، الأناقة، العملية، وجودة التنفيذ.

ويشمل التزامنا:

• تصاميم داخلية عصرية ومودرن.
• تنفيذ وتجديد المنازل.
• تصميم وتنفيذ غرف النوم.
• تنفيذ الخزائن بتصاميم مخصصة.
• ديكورات التلفزيون الحديثة.
• تنفيذ المرايات بتصاميم أنيقة.
• تكسيات وديكورات الجدران.
• تصميم وتنفيذ المداخل والاستقبالات.
• الاهتمام بجودة الخامات والتشطيبات.
• دقة التنفيذ والاهتمام بأدق التفاصيل.
• حلول مخصصة تناسب كل منزل.
• متابعة واضحة مع العميل طوال مراحل التنفيذ.

نؤمن أن الديكور المميز يبدأ من التصميم الصحيح، ويكتمل بجودة الخامات ودقة التنفيذ والاهتمام بالتفاصيل.

تصميم عصري.
تنفيذ دقيق.
تفاصيل تليق بمنزلك.
TEXT,

                /*
                |--------------------------------------------------------------------------
                | Address
                |--------------------------------------------------------------------------
                */

                'address_en' => 'Dammam, Khobar & Qatif, Eastern Province, Saudi Arabia',
                'address_ar' => 'الدمام والخبر والقطيف، المنطقة الشرقية، المملكة العربية السعودية',
            ]
        );
    }
}
