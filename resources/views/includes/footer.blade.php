<footer class="lux-footer">

    {{-- =========================================================
        AMBIENT BACKGROUND
    ========================================================== --}}
    <div class="lux-footer-glow lux-footer-glow-1"></div>
    <div class="lux-footer-glow lux-footer-glow-2"></div>
    <div class="lux-footer-grid"></div>


    <div class="container">

        {{-- =====================================================
            MAIN FOOTER
        ====================================================== --}}
        <div class="lux-footer-main">


            {{-- =================================================
                COMPANY
            ================================================== --}}
            <div class="lux-footer-company">

                <a
                    href="{{ route('home') }}"
                    class="lux-footer-logo"
                >

                    <span class="lux-footer-logo-glow"></span>

                    @if($company->logo)

                        <span class="lux-footer-logo-image">

                            <img
                                src="{{ asset('storage/' . $company->logo) }}"
                                alt="{{ $company->company_name }}"
                            >

                        </span>

                    @else

                        <span class="lux-footer-brand-text">

                            <strong>
                                {{ $company->company_name }}
                            </strong>

                            <small>
                                {{ app()->getLocale() === 'ar'
                                    ? 'التصميم الداخلي الفاخر'
                                    : 'PREMIUM INTERIOR DESIGN' }}
                            </small>

                        </span>

                    @endif

                </a>


                @if($company->website_name)

                    <span class="lux-footer-website">

                        <i class="bi bi-stars"></i>

                        {{ $company->website_name }}

                    </span>

                @endif


                <p class="lux-footer-company-description">

                    {{ app()->getLocale() === 'ar'
                        ? 'نصمم مساحات داخلية تجمع بين الفخامة، الراحة، التفاصيل الدقيقة والهوية الخاصة بكل مشروع.'
                        : 'We create refined interior spaces combining luxury, comfort, precision and a unique identity for every project.' }}

                </p>


                {{-- Premium Badge --}}
                <div class="lux-footer-premium-badge">

                    <span class="lux-badge-dot"></span>

                    <span>
                        {{ app()->getLocale() === 'ar'
                            ? 'تصميم وتنفيذ فاخر'
                            : 'PREMIUM DESIGN & EXECUTION' }}
                    </span>

                </div>

            </div>


            {{-- =================================================
                QUICK LINKS
            ================================================== --}}
            <div class="lux-footer-column">

                <div class="lux-footer-heading">

                    <span class="lux-footer-heading-line"></span>

                    <h4>
                        {{ app()->getLocale() === 'ar'
                            ? 'روابط سريعة'
                            : 'QUICK LINKS' }}
                    </h4>

                </div>


                <a
                    href="{{ route('home') }}"
                    class="lux-footer-link"
                >
                    <i class="bi bi-arrow-left"></i>

                    <span>
                        {{ app()->getLocale() === 'ar'
                            ? 'الرئيسية'
                            : 'Home' }}
                    </span>
                </a>


                <a
                    href="{{ route('about') }}"
                    class="lux-footer-link"
                >
                    <i class="bi bi-arrow-left"></i>

                    <span>
                        {{ app()->getLocale() === 'ar'
                            ? 'من نحن'
                            : 'About Us' }}
                    </span>
                </a>


                <a
                    href="{{ route('services') }}"
                    class="lux-footer-link"
                >
                    <i class="bi bi-arrow-left"></i>

                    <span>
                        {{ app()->getLocale() === 'ar'
                            ? 'خدماتنا'
                            : 'Services' }}
                    </span>
                </a>


                <a
                    href="{{ route('projects') }}"
                    class="lux-footer-link"
                >
                    <i class="bi bi-arrow-left"></i>

                    <span>
                        {{ app()->getLocale() === 'ar'
                            ? 'مشاريعنا'
                            : 'Projects' }}
                    </span>
                </a>


                <a
                    href="{{ route('contact') }}"
                    class="lux-footer-link"
                >
                    <i class="bi bi-arrow-left"></i>

                    <span>
                        {{ app()->getLocale() === 'ar'
                            ? 'تواصل معنا'
                            : 'Contact Us' }}
                    </span>
                </a>

            </div>


            {{-- =================================================
                SERVICES
            ================================================== --}}
            <div class="lux-footer-column">

                <div class="lux-footer-heading">

                    <span class="lux-footer-heading-line"></span>

                    <h4>
                        {{ app()->getLocale() === 'ar'
                            ? 'خدماتنا'
                            : 'OUR SERVICES' }}
                    </h4>

                </div>


                @foreach($services->take(4) as $service)

                    <a
                        href="{{ route('services.show', $service->slug) }}"
                        class="lux-footer-link"
                    >

                        <i class="bi bi-arrow-left"></i>

                        <span>
                            {{ $service->title }}
                        </span>

                    </a>

                @endforeach

            </div>


            {{-- =================================================
                CONTACT
            ================================================== --}}
            <div class="lux-footer-column lux-footer-contact">

                <div class="lux-footer-heading">

                    <span class="lux-footer-heading-line"></span>

                    <h4>
                        {{ app()->getLocale() === 'ar'
                            ? 'تواصل معنا'
                            : 'CONTACT US' }}
                    </h4>

                </div>


                {{-- Main Phone --}}
                @if($company->phone)

                    <a
                        href="tel:{{ preg_replace('/[^0-9+]/', '', $company->phone) }}"
                        class="lux-footer-contact-item"
                    >

                        <span class="lux-footer-contact-icon">
                            <i class="bi bi-telephone"></i>
                        </span>

                        <span dir="ltr">
                            {{ $company->phone }}
                        </span>

                    </a>

                @endif


                {{-- Phone 1 --}}
                @if($company->phone_1)

                    <a
                        href="tel:{{ preg_replace('/[^0-9+]/', '', $company->phone_1) }}"
                        class="lux-footer-contact-item"
                    >

                        <span class="lux-footer-contact-icon">
                            <i class="bi bi-telephone-forward"></i>
                        </span>

                        <span dir="ltr">
                            {{ $company->phone_1 }}
                        </span>

                    </a>

                @endif


                {{-- Phone 2 --}}
                @if($company->phone_2)

                    <a
                        href="tel:{{ preg_replace('/[^0-9+]/', '', $company->phone_2) }}"
                        class="lux-footer-contact-item"
                    >

                        <span class="lux-footer-contact-icon">
                            <i class="bi bi-telephone-forward"></i>
                        </span>

                        <span dir="ltr">
                            {{ $company->phone_2 }}
                        </span>

                    </a>

                @endif


                {{-- Phone 3 --}}
                @if($company->phone_3)

                    <a
                        href="tel:{{ preg_replace('/[^0-9+]/', '', $company->phone_3) }}"
                        class="lux-footer-contact-item"
                    >

                        <span class="lux-footer-contact-icon">
                            <i class="bi bi-telephone-forward"></i>
                        </span>

                        <span dir="ltr">
                            {{ $company->phone_3 }}
                        </span>

                    </a>

                @endif


                {{-- Phone 4 --}}
                @if($company->phone_4)

                    <a
                        href="tel:{{ preg_replace('/[^0-9+]/', '', $company->phone_4) }}"
                        class="lux-footer-contact-item"
                    >

                        <span class="lux-footer-contact-icon">
                            <i class="bi bi-telephone-forward"></i>
                        </span>

                        <span dir="ltr">
                            {{ $company->phone_4 }}
                        </span>

                    </a>

                @endif


                {{-- Email --}}
                @if($company->email)

                    <a
                        href="mailto:{{ $company->email }}"
                        class="lux-footer-contact-item"
                    >

                        <span class="lux-footer-contact-icon">
                            <i class="bi bi-envelope"></i>
                        </span>

                        <span>
                            {{ $company->email }}
                        </span>

                    </a>

                @endif


                {{-- WhatsApp --}}
                @if($company->whatsapp)

                    <a
                        href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $company->whatsapp) }}"
                        target="_blank"
                        rel="noopener"
                        class="lux-footer-contact-item lux-whatsapp"
                    >

                        <span class="lux-footer-contact-icon">
                            <i class="bi bi-whatsapp"></i>
                        </span>

                        <span>
                            WhatsApp
                        </span>

                    </a>

                @endif


                {{-- =================================================
                    ADDRESS
                ================================================== --}}
                @if($company->address)

                    @php

                        $address = $company->address;

                        $address = preg_replace(
                            '/<\s*\/\s*p\s*>\s*<\s*p\s*>/i',
                            "\n",
                            $address
                        );

                        $address = preg_replace(
                            '/<\s*br\s*\/?\s*>/i',
                            "\n",
                            $address
                        );

                        $address = preg_replace(
                            '/<\s*\/\s*div\s*>\s*<\s*div\s*>/i',
                            "\n",
                            $address
                        );

                        $address = strip_tags($address);

                        $address = trim($address);

                    @endphp


                    <div class="lux-footer-address">

                        <span class="lux-footer-contact-icon">
                            <i class="bi bi-geo-alt"></i>
                        </span>

                        <span>
                            {!! nl2br(e($address)) !!}
                        </span>

                    </div>

                @endif


                {{-- =================================================
                    SOCIAL MEDIA
                ================================================== --}}
                @if(
                    $company->facebook ||
                    $company->instagram ||
                    $company->tiktok
                )

                    <div class="lux-footer-social-title">

                        {{ app()->getLocale() === 'ar'
                            ? 'تابعنا'
                            : 'FOLLOW US' }}

                    </div>


                    <div class="lux-footer-social">

                        @if($company->facebook)

                            <a
                                href="{{ $company->facebook }}"
                                target="_blank"
                                rel="noopener"
                                aria-label="Facebook"
                            >
                                <i class="bi bi-facebook"></i>
                            </a>

                        @endif


                        @if($company->instagram)

                            <a
                                href="{{ $company->instagram }}"
                                target="_blank"
                                rel="noopener"
                                aria-label="Instagram"
                            >
                                <i class="bi bi-instagram"></i>
                            </a>

                        @endif


                        @if($company->tiktok)

                            <a
                                href="{{ $company->tiktok }}"
                                target="_blank"
                                rel="noopener"
                                aria-label="TikTok"
                            >
                                <i class="bi bi-tiktok"></i>
                            </a>

                        @endif

                    </div>

                @endif

            </div>

        </div>


        {{-- =========================================================
            FOOTER DECORATIVE LINE
        ========================================================== --}}
        <div class="lux-footer-divider">

            <span></span>

            <div class="lux-footer-divider-center">
                <i class="bi bi-gem"></i>
            </div>

            <span></span>

        </div>


        {{-- =========================================================
            FOOTER BOTTOM
        ========================================================== --}}
        <div class="lux-footer-bottom">

            <p>

                © {{ date('Y') }}

                {{ $company->company_name }}.

                {{ app()->getLocale() === 'ar'
                    ? 'جميع الحقوق محفوظة.'
                    : 'All Rights Reserved.' }}

            </p>


            <div class="lux-footer-tagline">

                <span></span>

                <strong>
                    {{ app()->getLocale() === 'ar'
                        ? 'فخامة تبدأ من التفاصيل'
                        : 'LUXURY BEGINS WITH DETAILS' }}
                </strong>

                <span></span>

            </div>

        </div>

    </div>
<div class="lux-footer-developer">

    <span class="lux-footer-developer-line"></span>

    <div class="lux-footer-developer-content">

        <span class="lux-footer-developer-label">
            {{ app()->getLocale() === 'ar'
                ? 'تصميم وتطوير الموقع'
                : 'DESIGNED & DEVELOPED BY' }}
        </span>

        <strong>
            شركة الواجهه ويب
        </strong>

        <span class="lux-footer-developer-name">
            {{ app()->getLocale() === 'ar'
                ? 'مهندس سيد راجح'
                : 'ENG. SAYED RAGEH' }}
        </span>

        <a
            href="https://wa.me/201044946388"
            target="_blank"
            rel="noopener"
            class="lux-footer-developer-whatsapp"
        >
            <i class="bi bi-whatsapp"></i>
            <span>01044946388</span>
        </a>

    </div>

    <span class="lux-footer-developer-line"></span>

</div>
</footer>


<style>
/* =========================================================
   DEVELOPER CREDIT
========================================================= */

.lux-footer-developer {
    position: relative;
    z-index: 3;

    display: flex;
    align-items: center;
    gap: 18px;

    padding: 18px 0 22px;

    border-top: 1px solid rgba(255,255,255,.045);
}


.lux-footer-developer-line {
    flex: 1;
    height: 1px;

    background: linear-gradient(
        90deg,
        transparent,
        rgba(212,175,55,.22)
    );
}


.lux-footer-developer-line:last-child {
    background: linear-gradient(
        90deg,
        rgba(212,175,55,.22),
        transparent
    );
}


.lux-footer-developer-content {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    gap: 8px;

    text-align: center;
}


.lux-footer-developer-label {
    color: rgba(255,255,255,.32);

    font-size: 8px;
    font-weight: 700;

    letter-spacing: 1px;
}


.lux-footer-developer-content strong {
    font-size: 11px;
    font-weight: 800;

    background: linear-gradient(
        90deg,
        #fff,
        #f1df9c,
        #d4af37
    );

    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
}


.lux-footer-developer-name {
    color: rgba(255,255,255,.58);

    font-size: 10px;
    font-weight: 600;
}


.lux-footer-developer-whatsapp {
    display: inline-flex;
    align-items: center;
    gap: 5px;

    padding: 5px 9px;

    color: #25d366 !important;
    text-decoration: none !important;

    font-size: 9px;
    font-weight: 700;

    border: 1px solid rgba(37,211,102,.18);
    border-radius: 20px;

    background: rgba(37,211,102,.035);

    transition: all .3s ease;
}


.lux-footer-developer-whatsapp:hover {
    color: #fff !important;

    border-color: rgba(37,211,102,.5);

    background: rgba(37,211,102,.08);

    box-shadow:
        0 0 18px rgba(37,211,102,.12);

    transform: translateY(-2px);
}


.lux-footer-developer-whatsapp i {
    font-size: 12px;
}


/* =========================================================
   DEVELOPER MOBILE
========================================================= */

@media (max-width: 600px) {

    .lux-footer-developer {
        gap: 8px;
        padding: 18px 0;
    }

    .lux-footer-developer-line {
        display: none;
    }

    .lux-footer-developer-content {
        width: 100%;
        flex-direction: column;
        gap: 6px;
    }

    .lux-footer-developer-label {
        font-size: 7px;
    }

    .lux-footer-developer-content strong {
        font-size: 12px;
    }

    .lux-footer-developer-name {
        font-size: 9px;
    }

}
/* =========================================================
   LUXURY FOOTER
========================================================= */

.lux-footer {
    position: relative;
    overflow: hidden;
    color: #fff;
    background:
        radial-gradient(
            circle at 15% 20%,
            rgba(212,175,55,.075),
            transparent 28%
        ),
        radial-gradient(
            circle at 85% 80%,
            rgba(255,255,255,.025),
            transparent 25%
        ),
        #050709;
    border-top: 1px solid rgba(212,175,55,.16);
}


/* =========================================================
   BACKGROUND
========================================================= */

.lux-footer-grid {
    position: absolute;
    inset: 0;
    pointer-events: none;
    opacity: .035;

    background-image:
        linear-gradient(
            rgba(255,255,255,.5) 1px,
            transparent 1px
        ),
        linear-gradient(
            90deg,
            rgba(255,255,255,.5) 1px,
            transparent 1px
        );

    background-size: 65px 65px;
}


.lux-footer-glow {
    position: absolute;
    border-radius: 50%;
    pointer-events: none;
    filter: blur(60px);
}


.lux-footer-glow-1 {
    width: 280px;
    height: 280px;
    top: -150px;
    right: 10%;
    background: rgba(212,175,55,.07);
}


.lux-footer-glow-2 {
    width: 220px;
    height: 220px;
    bottom: -120px;
    left: 10%;
    background: rgba(255,255,255,.035);
}


/* =========================================================
   MAIN
========================================================= */

.lux-footer-main {
    position: relative;
    z-index: 2;
    display: grid;
    grid-template-columns: 1.35fr .75fr .9fr 1.2fr;
    gap: 55px;
    padding: 75px 0 60px;
}


/* =========================================================
   COMPANY
========================================================= */

.lux-footer-company {
    position: relative;
}


.lux-footer-logo {
    position: relative;
    display: inline-flex;
    align-items: center;
    color: #fff !important;
    text-decoration: none !important;
}


.lux-footer-logo-glow {
    position: absolute;
    width: 90px;
    height: 90px;
    right: 20%;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(212,175,55,.11);
    filter: blur(35px);
    border-radius: 50%;
}


.lux-footer-logo-image {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
}


.lux-footer-logo-image::before {
    content: "";
    position: absolute;
    inset: -10px;
    border: 1px solid rgba(212,175,55,.18);
    border-radius: 12px;
}


.lux-footer-logo-image img {
    position: relative;
    max-width: 190px;
    max-height: 65px;
    width: auto;
    height: auto;
    object-fit: contain;
}


.lux-footer-brand-text {
    position: relative;
    display: flex;
    flex-direction: column;
    gap: 6px;
}


.lux-footer-brand-text strong {
    font-size: 23px;
    font-weight: 800;
    background: linear-gradient(
        90deg,
        #fff,
        #f1df9c,
        #d4af37,
        #fff
    );
    background-size: 200% auto;
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: luxFooterBrand 5s linear infinite;
}


@keyframes luxFooterBrand {

    to {
        background-position: 200% center;
    }

}


.lux-footer-brand-text small {
    color: rgba(255,255,255,.38);
    font-size: 8px;
    font-weight: 700;
    letter-spacing: 2.5px;
}


.lux-footer-website {
    display: flex;
    align-items: center;
    gap: 7px;
    margin-top: 18px;
    color: #d4af37;
    font-size: 10px;
    font-weight: 700;
}


.lux-footer-website i {
    font-size: 13px;
}


.lux-footer-company-description {
    max-width: 360px;
    margin: 20px 0 22px;
    color: rgba(255,255,255,.48);
    font-size: 12px;
    line-height: 2;
}


.lux-footer-premium-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    min-height: 34px;
    padding: 0 12px;
    color: rgba(255,255,255,.55);
    border: 1px solid rgba(212,175,55,.18);
    border-radius: 50px;
    background: rgba(212,175,55,.035);
    font-size: 8px;
    letter-spacing: .8px;
    font-weight: 800;
}


.lux-badge-dot {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #d4af37;
    box-shadow:
        0 0 7px #d4af37,
        0 0 14px rgba(212,175,55,.5);
    animation: luxDotPulse 2s ease-in-out infinite;
}


@keyframes luxDotPulse {

    0%,
    100% {
        opacity: .55;
        transform: scale(.8);
    }

    50% {
        opacity: 1;
        transform: scale(1.15);
    }

}


/* =========================================================
   COLUMN
========================================================= */

.lux-footer-column {
    position: relative;
}


.lux-footer-heading {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 23px;
}


.lux-footer-heading-line {
    width: 22px;
    height: 1px;
    background: #d4af37;
    box-shadow: 0 0 8px rgba(212,175,55,.65);
}


.lux-footer-heading h4 {
    margin: 0;
    color: #fff;
    font-size: 12px;
    font-weight: 800;
    letter-spacing: .6px;
}


/* =========================================================
   LINKS
========================================================= */

.lux-footer-link {
    position: relative;
    display: flex;
    align-items: center;
    gap: 9px;
    width: fit-content;
    margin-bottom: 13px;
    color: rgba(255,255,255,.47) !important;
    text-decoration: none !important;
    font-size: 11px;
    font-weight: 600;
    transition: all .3s ease;
}


.lux-footer-link i {
    color: rgba(212,175,55,.55);
    font-size: 10px;
    transition: transform .3s ease;
}


.lux-footer-link:hover {
    color: #fff !important;
    transform: translateX(-3px);
}


.lux-footer-link:hover i {
    color: #d4af37;
    transform: translateX(-3px);
}


/* =========================================================
   CONTACT
========================================================= */

.lux-footer-contact-item {
    display: flex;
    align-items: center;
    gap: 9px;
    margin-bottom: 10px;
    color: rgba(255,255,255,.5) !important;
    text-decoration: none !important;
    font-size: 10px;
    line-height: 1.6;
    transition: all .3s ease;
}


.lux-footer-contact-item:hover {
    color: #fff !important;
}


.lux-footer-contact-icon {
    width: 30px;
    height: 30px;
    min-width: 30px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: #d4af37;
    border: 1px solid rgba(212,175,55,.15);
    border-radius: 7px;
    background: rgba(212,175,55,.035);
    transition: all .3s ease;
}


.lux-footer-contact-item:hover .lux-footer-contact-icon {
    border-color: rgba(212,175,55,.45);
    background: rgba(212,175,55,.08);
    box-shadow: 0 0 15px rgba(212,175,55,.08);
}


.lux-footer-contact-icon i {
    font-size: 12px;
}


.lux-footer-contact-item.lux-whatsapp
.lux-footer-contact-icon {
    color: #25d366;
    border-color: rgba(37,211,102,.18);
    background: rgba(37,211,102,.035);
}


/* =========================================================
   ADDRESS
========================================================= */

.lux-footer-address {
    display: flex;
    align-items: flex-start;
    gap: 9px;
    margin-top: 13px;
    color: rgba(255,255,255,.45);
    font-size: 10px;
    line-height: 1.8;
}


.lux-footer-address .lux-footer-contact-icon {
    flex-shrink: 0;
}


/* =========================================================
   SOCIAL
========================================================= */

.lux-footer-social-title {
    margin-top: 20px;
    margin-bottom: 10px;
    color: rgba(255,255,255,.35);
    font-size: 8px;
    font-weight: 800;
    letter-spacing: 1.5px;
}


.lux-footer-social {
    display: flex;
    align-items: center;
    gap: 7px;
}


.lux-footer-social a {
    position: relative;
    width: 35px;
    height: 35px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: rgba(255,255,255,.58) !important;
    text-decoration: none !important;
    border: 1px solid rgba(255,255,255,.1);
    border-radius: 8px;
    background: rgba(255,255,255,.025);
    transition: all .3s ease;
    overflow: hidden;
}


.lux-footer-social a::before {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(
        135deg,
        rgba(212,175,55,.15),
        transparent
    );
    opacity: 0;
    transition: opacity .3s ease;
}


.lux-footer-social a:hover {
    color: #d4af37 !important;
    border-color: rgba(212,175,55,.45);
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0,0,0,.25);
}


.lux-footer-social a:hover::before {
    opacity: 1;
}


.lux-footer-social i {
    position: relative;
    font-size: 13px;
}


/* =========================================================
   DIVIDER
========================================================= */

.lux-footer-divider {
    position: relative;
    z-index: 2;
    display: flex;
    align-items: center;
    gap: 18px;
}


.lux-footer-divider > span {
    flex: 1;
    height: 1px;
    background: linear-gradient(
        90deg,
        transparent,
        rgba(212,175,55,.22)
    );
}


.lux-footer-divider > span:last-child {
    background: linear-gradient(
        90deg,
        rgba(212,175,55,.22),
        transparent
    );
}


.lux-footer-divider-center {
    position: relative;
    width: 38px;
    height: 38px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #d4af37;
    border: 1px solid rgba(212,175,55,.25);
    border-radius: 50%;
    background: #050709;
    box-shadow: 0 0 20px rgba(212,175,55,.08);
}


.lux-footer-divider-center::before {
    content: "";
    position: absolute;
    inset: -5px;
    border: 1px dashed rgba(212,175,55,.15);
    border-radius: 50%;
    animation: luxFooterRing 10s linear infinite;
}


@keyframes luxFooterRing {

    to {
        transform: rotate(360deg);
    }

}


.lux-footer-divider-center i {
    font-size: 13px;
}


/* =========================================================
   BOTTOM
========================================================= */

.lux-footer-bottom {
    position: relative;
    z-index: 2;
    min-height: 80px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 25px;
}


.lux-footer-bottom p {
    margin: 0;
    color: rgba(255,255,255,.32);
    font-size: 9px;
    line-height: 1.8;
}


.lux-footer-tagline {
    display: flex;
    align-items: center;
    gap: 10px;
    color: rgba(255,255,255,.28);
    font-size: 8px;
    letter-spacing: 1.5px;
}


.lux-footer-tagline span {
    width: 22px;
    height: 1px;
    background: rgba(212,175,55,.35);
}


.lux-footer-tagline strong {
    font-weight: 700;
}


/* =========================================================
   LARGE TABLET
========================================================= */

@media (max-width: 1199px) {

    .lux-footer-main {
        grid-template-columns: 1.2fr .8fr .9fr;
        gap: 40px;
    }

    .lux-footer-company {
        grid-row: span 2;
    }

}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 991px) {

    .lux-footer-main {
        grid-template-columns: 1fr 1fr;
        gap: 45px 35px;
        padding: 60px 0 45px;
    }

    .lux-footer-company {
        grid-row: auto;
        grid-column: 1 / -1;
    }

    .lux-footer-company-description {
        max-width: 600px;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 767px) {

    .lux-footer-main {
        grid-template-columns: 1fr 1fr;
        gap: 38px 22px;
        padding: 50px 0 35px;
    }

    .lux-footer-company {
        grid-column: 1 / -1;
    }

    .lux-footer-logo-image img {
        max-width: 160px;
        max-height: 55px;
    }

    .lux-footer-brand-text strong {
        font-size: 20px;
    }

    .lux-footer-company-description {
        font-size: 11px;
        line-height: 1.9;
    }

    .lux-footer-heading {
        margin-bottom: 18px;
    }

    .lux-footer-heading h4 {
        font-size: 11px;
    }

    .lux-footer-link {
        font-size: 10px;
    }

    .lux-footer-bottom {
        min-height: 100px;
        flex-direction: column;
        justify-content: center;
        text-align: center;
        gap: 8px;
        padding: 18px 0;
    }

    .lux-footer-tagline {
        justify-content: center;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 480px) {

    .lux-footer-main {
        grid-template-columns: 1fr;
        gap: 35px;
    }

    .lux-footer-company,
    .lux-footer-column {
        grid-column: auto;
    }

    .lux-footer-company-description {
        max-width: 100%;
    }

    .lux-footer-contact-item {
        font-size: 10px;
    }

    .lux-footer-divider {
        gap: 10px;
    }

    .lux-footer-divider-center {
        width: 34px;
        height: 34px;
    }

    .lux-footer-tagline {
        font-size: 7px;
        letter-spacing: 1px;
    }

}


/* =========================================================
   REDUCED MOTION
========================================================= */

@media (prefers-reduced-motion: reduce) {

    .lux-footer-brand-text strong,
    .lux-badge-dot,
    .lux-footer-divider-center::before {
        animation: none !important;
    }

    *,
    *::before,
    *::after {
        transition-duration: .01ms !important;
    }

}

</style>