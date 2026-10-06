@php
    $isArabic = app()->getLocale() === 'ar';
@endphp

<section class="lux-contact-section">

    {{-- Background --}}
    <div class="lux-contact-grid"></div>

    <div class="lux-contact-glow lux-contact-glow-one"></div>
    <div class="lux-contact-glow lux-contact-glow-two"></div>


    <div class="container position-relative">

        {{-- Header --}}
        <div
            class="lux-contact-header"
            data-aos="fade-up"
        >

            <div class="lux-contact-kicker">

                <span></span>

                <strong>
                    {{ $isArabic ? 'تواصل معنا' : 'GET IN TOUCH' }}
                </strong>

                <span></span>

            </div>


            <h2 class="lux-contact-title">

                {{ $isArabic
                    ? 'يسعدنا تواصلك معنا'
                    : 'Let’s Work Together'
                }}

            </h2>


            <p class="lux-contact-intro">

                {{ $isArabic
                    ? 'تواصل معنا لمناقشة احتياجاتك والحصول على المزيد من المعلومات حول خدماتنا.'
                    : 'Get in touch with our team to discuss your requirements and learn more about our services.'
                }}

            </p>

        </div>


        <div class="row g-4 align-items-stretch">


            {{-- Contact Information --}}
            <div class="col-lg-7">

                <div class="lux-contact-details">


                    {{-- Email --}}
                    @if($company?->email)

                        <a
                            href="mailto:{{ $company->email }}"
                            class="lux-contact-card"
                            data-aos="fade-up"
                            data-aos-delay="50"
                        >

                            <div class="lux-contact-icon">
                                <i class="bi bi-envelope"></i>
                            </div>

                            <div class="lux-contact-card-content">

                                <span>
                                    {{ $isArabic ? 'البريد الإلكتروني' : 'EMAIL' }}
                                </span>

                                <strong>
                                    {{ $company->email }}
                                </strong>

                            </div>

                            <i class="bi bi-arrow-up-left lux-contact-arrow"></i>

                        </a>

                    @endif


                    {{-- Main Phone --}}
                    @if($company?->phone)

                        <a
                            href="tel:{{ preg_replace('/[^0-9+]/', '', $company->phone) }}"
                            class="lux-contact-card"
                            data-aos="fade-up"
                            data-aos-delay="100"
                        >

                            <div class="lux-contact-icon">
                                <i class="bi bi-telephone"></i>
                            </div>

                            <div class="lux-contact-card-content">

                                <span>
                                    {{ $isArabic ? 'الهاتف الرئيسي' : 'MAIN PHONE' }}
                                </span>

                                <strong dir="ltr">
                                    {{ $company->phone }}
                                </strong>

                            </div>

                            <i class="bi bi-arrow-up-left lux-contact-arrow"></i>

                        </a>

                    @endif


                    {{-- WhatsApp --}}
                    @if($company?->whatsapp)

                        <a
                            href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $company->whatsapp) }}"
                            target="_blank"
                            rel="noopener"
                            class="lux-contact-card lux-whatsapp-card"
                            data-aos="fade-up"
                            data-aos-delay="150"
                        >

                            <div class="lux-contact-icon lux-whatsapp-icon">
                                <i class="bi bi-whatsapp"></i>
                            </div>

                            <div class="lux-contact-card-content">

                                <span>
                                    WhatsApp
                                </span>

                                <strong dir="ltr">
                                    {{ $company->whatsapp }}
                                </strong>

                            </div>

                            <i class="bi bi-arrow-up-left lux-contact-arrow"></i>

                        </a>

                    @endif


                    {{-- Phone 1 --}}
                    @if($company?->phone_1)

                        <a
                            href="tel:{{ preg_replace('/[^0-9+]/', '', $company->phone_1) }}"
                            class="lux-contact-card"
                            data-aos="fade-up"
                            data-aos-delay="200"
                        >

                            <div class="lux-contact-icon">
                                <i class="bi bi-telephone-forward"></i>
                            </div>

                            <div class="lux-contact-card-content">

                                <span>
                                    {{ $isArabic ? 'رقم الاتصال 1' : 'PHONE 1' }}
                                </span>

                                <strong dir="ltr">
                                    {{ $company->phone_1 }}
                                </strong>

                            </div>

                            <i class="bi bi-arrow-up-left lux-contact-arrow"></i>

                        </a>

                    @endif


                    {{-- Phone 2 --}}
                    @if($company?->phone_2)

                        <a
                            href="tel:{{ preg_replace('/[^0-9+]/', '', $company->phone_2) }}"
                            class="lux-contact-card"
                            data-aos="fade-up"
                            data-aos-delay="250"
                        >

                            <div class="lux-contact-icon">
                                <i class="bi bi-telephone-forward"></i>
                            </div>

                            <div class="lux-contact-card-content">

                                <span>
                                    {{ $isArabic ? 'رقم الاتصال 2' : 'PHONE 2' }}
                                </span>

                                <strong dir="ltr">
                                    {{ $company->phone_2 }}
                                </strong>

                            </div>

                            <i class="bi bi-arrow-up-left lux-contact-arrow"></i>

                        </a>

                    @endif


                    {{-- Phone 3 --}}
                    @if($company?->phone_3)

                        <a
                            href="tel:{{ preg_replace('/[^0-9+]/', '', $company->phone_3) }}"
                            class="lux-contact-card"
                            data-aos="fade-up"
                            data-aos-delay="300"
                        >

                            <div class="lux-contact-icon">
                                <i class="bi bi-telephone-forward"></i>
                            </div>

                            <div class="lux-contact-card-content">

                                <span>
                                    {{ $isArabic ? 'رقم الاتصال 3' : 'PHONE 3' }}
                                </span>

                                <strong dir="ltr">
                                    {{ $company->phone_3 }}
                                </strong>

                            </div>

                            <i class="bi bi-arrow-up-left lux-contact-arrow"></i>

                        </a>

                    @endif


                    {{-- Phone 4 --}}
                    @if($company?->phone_4)

                        <a
                            href="tel:{{ preg_replace('/[^0-9+]/', '', $company->phone_4) }}"
                            class="lux-contact-card"
                            data-aos="fade-up"
                            data-aos-delay="350"
                        >

                            <div class="lux-contact-icon">
                                <i class="bi bi-telephone-forward"></i>
                            </div>

                            <div class="lux-contact-card-content">

                                <span>
                                    {{ $isArabic ? 'رقم الاتصال 4' : 'PHONE 4' }}
                                </span>

                                <strong dir="ltr">
                                    {{ $company->phone_4 }}
                                </strong>

                            </div>

                            <i class="bi bi-arrow-up-left lux-contact-arrow"></i>

                        </a>

                    @endif

                </div>


                {{-- Social Media --}}
                @if(
                    $company?->facebook ||
                    $company?->instagram ||
                    $company?->tiktok
                )

                    <div
                        class="lux-contact-social"
                        data-aos="fade-up"
                        data-aos-delay="400"
                    >

                        <div>

                            <span>
                                {{ $isArabic ? 'تابعنا على' : 'FOLLOW US' }}
                            </span>

                            <strong>
                                {{ $isArabic
                                    ? 'كن قريبًا من كل جديد'
                                    : 'Stay connected with us'
                                }}
                            </strong>

                        </div>


                        <div class="lux-social-links">

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

                    </div>

                @endif

            </div>


            {{-- Website / QR --}}
            <div class="col-lg-5">

                <div
                    class="lux-contact-brand"
                    data-aos="fade-left"
                >

                    {{-- Decorative Orb --}}
                    <div class="lux-contact-orb">

                        <div class="lux-contact-orb-ring ring-one"></div>
                        <div class="lux-contact-orb-ring ring-two"></div>
                        <div class="lux-contact-orb-core">
                            <i class="bi bi-globe2"></i>
                        </div>

                    </div>


                    <div class="lux-brand-content">

                        @if($company?->website_name)

                            <span class="lux-brand-label">
                                {{ $isArabic ? 'الموقع الإلكتروني' : 'WEBSITE' }}
                            </span>

                            <h3>
                                {{ $company->website_name }}
                            </h3>

                        @endif


                        @if($company?->qr_code)

                            <div class="lux-contact-qr">

                                <div class="lux-qr-frame">

                                    <img
                                        src="{{ asset('storage/' . $company->qr_code) }}"
                                        alt="QR Code"
                                        loading="lazy"
                                    >

                                </div>

                            </div>


                            <p>

                                {{ $isArabic
                                    ? 'امسح رمز QR للوصول إلى موقعنا الإلكتروني.'
                                    : 'Scan the QR code to visit our website.'
                                }}

                            </p>

                        @endif

                    </div>


                    <div class="lux-brand-bottom">

                        <span></span>

                        <strong>
                            PREMIUM INTERIOR DESIGN
                        </strong>

                        <span></span>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<style>

/* =========================================================
   LUXURY CONTACT
========================================================= */

.lux-contact-section {

    position: relative;

    overflow: hidden;

    padding: 120px 0;

    background:
        radial-gradient(
            circle at 15% 30%,
            rgba(212,175,55,.08),
            transparent 30%
        ),
        radial-gradient(
            circle at 85% 70%,
            rgba(212,175,55,.06),
            transparent 32%
        ),
        linear-gradient(
            135deg,
            #070707 0%,
            #101010 50%,
            #070707 100%
        );

}


/* Grid */

.lux-contact-grid {

    position: absolute;

    inset: 0;

    background-image:

        linear-gradient(
            rgba(255,255,255,.022) 1px,
            transparent 1px
        ),

        linear-gradient(
            90deg,
            rgba(255,255,255,.022) 1px,
            transparent 1px
        );

    background-size: 70px 70px;

    opacity: .4;

    mask-image:
        linear-gradient(
            to bottom,
            transparent,
            black 20%,
            black 80%,
            transparent
        );

}


/* Glow */

.lux-contact-glow {

    position: absolute;

    width: 420px;

    height: 420px;

    border-radius: 50%;

    filter: blur(110px);

    pointer-events: none;

    animation:
        luxContactGlow 8s ease-in-out infinite alternate;

}


.lux-contact-glow-one {

    left: -200px;

    top: -120px;

    background:
        rgba(212,175,55,.10);

}


.lux-contact-glow-two {

    right: -200px;

    bottom: -150px;

    background:
        rgba(212,175,55,.08);

    animation-delay: 2s;

}


@keyframes luxContactGlow {

    0% {
        transform: scale(1);
        opacity: .4;
    }

    100% {
        transform: scale(1.25);
        opacity: .8;
    }

}


/* =========================================================
   HEADER
========================================================= */

.lux-contact-header {

    max-width: 850px;

    margin: 0 auto 60px;

    text-align: center;

}


.lux-contact-kicker {

    display: flex;

    align-items: center;

    justify-content: center;

    gap: 15px;

    margin-bottom: 22px;

    color: #d4af37;

    font-size: 12px;

    font-weight: 800;

    letter-spacing: 4px;

}


.lux-contact-kicker span {

    width: 45px;

    height: 1px;

    background:
        linear-gradient(
            90deg,
            transparent,
            #d4af37
        );

    box-shadow:
        0 0 8px rgba(212,175,55,.7);

}


.lux-contact-kicker span:last-child {

    background:
        linear-gradient(
            90deg,
            #d4af37,
            transparent
        );

}


.lux-contact-title {

    margin: 0;

    font-size: clamp(40px, 5vw, 65px);

    line-height: 1.15;

    font-weight: 900;

    color: transparent;

    background:
        linear-gradient(
            110deg,
            #fff,
            #fff4c5,
            #d4af37,
            #fff,
            #d4af37
        );

    background-size: 300% auto;

    -webkit-background-clip: text;

    background-clip: text;

    -webkit-text-fill-color: transparent;

    filter:
        drop-shadow(
            0 0 15px rgba(212,175,55,.18)
        );

    animation:
        luxContactTitle 6s linear infinite;

}


@keyframes luxContactTitle {

    0% {
        background-position: 0% center;
    }

    100% {
        background-position: 300% center;
    }

}


.lux-contact-intro {

    max-width: 680px;

    margin: 22px auto 0;

    color: rgba(255,255,255,.62);

    font-size: 16px;

    line-height: 2;

}


/* =========================================================
   CONTACT CARDS
========================================================= */

.lux-contact-details {

    display: grid;

    grid-template-columns:
        repeat(2, minmax(0, 1fr));

    gap: 14px;

}


.lux-contact-card {

    position: relative;

    min-height: 100px;

    display: flex;

    align-items: center;

    gap: 15px;

    padding: 18px;

    overflow: hidden;

    color: #fff;

    text-decoration: none;

    border: 1px solid rgba(255,255,255,.08);

    background:
        linear-gradient(
            135deg,
            rgba(255,255,255,.055),
            rgba(255,255,255,.015)
        );

    backdrop-filter: blur(15px);

    -webkit-backdrop-filter: blur(15px);

    box-shadow:
        0 15px 35px rgba(0,0,0,.25);

    transition:
        transform .4s ease,
        border-color .4s ease,
        box-shadow .4s ease,
        background .4s ease;

}


.lux-contact-card::before {

    content: "";

    position: absolute;

    top: 0;

    left: -100%;

    width: 70%;

    height: 100%;

    background:
        linear-gradient(
            90deg,
            transparent,
            rgba(212,175,55,.08),
            transparent
        );

    transform: skewX(-20deg);

    transition:
        left .7s ease;

}


.lux-contact-card:hover::before {

    left: 130%;

}


.lux-contact-card:hover {

    transform:
        translateY(-7px)
        translateZ(10px);

    border-color:
        rgba(212,175,55,.35);

    background:
        linear-gradient(
            135deg,
            rgba(212,175,55,.08),
            rgba(255,255,255,.02)
        );

    box-shadow:
        0 20px 45px rgba(0,0,0,.4),
        0 0 25px rgba(212,175,55,.06);

}


.lux-contact-icon {

    flex: 0 0 50px;

    width: 50px;

    height: 50px;

    display: flex;

    align-items: center;

    justify-content: center;

    color: #d4af37;

    border: 1px solid rgba(212,175,55,.28);

    background:
        rgba(212,175,55,.05);

    box-shadow:
        0 0 15px rgba(212,175,55,.06);

    font-size: 20px;

    transition:
        .4s ease;

}


.lux-contact-card:hover .lux-contact-icon {

    color: #111;

    background: #d4af37;

    border-color: #d4af37;

    box-shadow:
        0 0 20px rgba(212,175,55,.3);

    transform:
        rotate(-5deg)
        scale(1.05);

}


.lux-contact-card-content {

    min-width: 0;

}


.lux-contact-card-content span {

    display: block;

    margin-bottom: 5px;

    color: rgba(255,255,255,.38);

    font-size: 9px;

    font-weight: 800;

    letter-spacing: 2px;

}


.lux-contact-card-content strong {

    display: block;

    color: rgba(255,255,255,.9);

    font-size: 14px;

    line-height: 1.5;

    overflow-wrap: anywhere;

}


.lux-contact-arrow {

    position: absolute;

    top: 14px;

    right: 14px;

    color: rgba(212,175,55,.4);

    font-size: 13px;

    transition:
        .3s ease;

}


.lux-contact-card:hover .lux-contact-arrow {

    color: #d4af37;

    transform:
        translate(-3px,3px);

}


/* WhatsApp */

.lux-whatsapp-icon {

    color: #65e19b;

    border-color:
        rgba(37,211,102,.25);

    background:
        rgba(37,211,102,.04);

}


.lux-whatsapp-card:hover .lux-whatsapp-icon {

    color: #fff;

    background: #25d366;

    border-color: #25d366;

    box-shadow:
        0 0 20px rgba(37,211,102,.3);

}


/* =========================================================
   SOCIAL
========================================================= */

.lux-contact-social {

    margin-top: 15px;

    padding: 20px;

    display: flex;

    align-items: center;

    justify-content: space-between;

    gap: 20px;

    border: 1px solid rgba(212,175,55,.16);

    background:
        rgba(255,255,255,.035);

    backdrop-filter: blur(12px);

}


.lux-contact-social > div:first-child span {

    display: block;

    margin-bottom: 4px;

    color: #d4af37;

    font-size: 9px;

    font-weight: 800;

    letter-spacing: 2px;

}


.lux-contact-social > div:first-child strong {

    color: rgba(255,255,255,.65);

    font-size: 12px;

    font-weight: 500;

}


.lux-social-links {

    display: flex;

    gap: 8px;

}


.lux-social-links a {

    width: 42px;

    height: 42px;

    display: flex;

    align-items: center;

    justify-content: center;

    color: rgba(255,255,255,.7);

    border: 1px solid rgba(255,255,255,.12);

    background:
        rgba(255,255,255,.025);

    text-decoration: none;

    transition:
        .35s ease;

}


.lux-social-links a:hover {

    color: #0a0a0a;

    background: #d4af37;

    border-color: #d4af37;

    transform:
        translateY(-5px);

    box-shadow:
        0 8px 20px rgba(212,175,55,.2);

}


/* =========================================================
   BRAND CARD
========================================================= */

.lux-contact-brand {

    position: relative;

    height: 100%;

    min-height: 430px;

    padding: 45px 35px;

    overflow: hidden;

    display: flex;

    align-items: center;

    justify-content: center;

    border: 1px solid rgba(212,175,55,.25);

    background:
        radial-gradient(
            circle at 50% 35%,
            rgba(212,175,55,.09),
            transparent 40%
        ),
        linear-gradient(
            145deg,
            rgba(255,255,255,.06),
            rgba(255,255,255,.015)
        );

    backdrop-filter: blur(18px);

    -webkit-backdrop-filter: blur(18px);

    box-shadow:
        0 30px 70px rgba(0,0,0,.5);

}


/* Top LED */

.lux-contact-brand::before {

    content: "";

    position: absolute;

    top: -1px;

    left: 20%;

    width: 60%;

    height: 2px;

    background:
        linear-gradient(
            90deg,
            transparent,
            #d4af37,
            #fff1a8,
            #d4af37,
            transparent
        );

    box-shadow:
        0 0 12px rgba(212,175,55,.7);

    animation:
        luxBrandLed 3s ease-in-out infinite;

}


@keyframes luxBrandLed {

    0%,
    100% {
        opacity: .4;
        transform: scaleX(.7);
    }

    50% {
        opacity: 1;
        transform: scaleX(1);
    }

}


.lux-brand-content {

    position: relative;

    z-index: 5;

    width: 100%;

    text-align: center;

}


.lux-brand-label {

    display: block;

    color: #d4af37;

    font-size: 10px;

    font-weight: 800;

    letter-spacing: 3px;

}


.lux-contact-brand h3 {

    margin: 12px 0 25px;

    color: #fff;

    font-size: 28px;

    line-height: 1.4;

    font-weight: 800;

}


/* =========================================================
   QR
========================================================= */

.lux-contact-qr {

    display: flex;

    align-items: center;

    justify-content: center;

}


.lux-qr-frame {

    position: relative;

    width: 190px;

    height: 190px;

    padding: 10px;

    display: flex;

    align-items: center;

    justify-content: center;

    background: #fff;

    border: 2px solid #d4af37;

    box-shadow:
        0 0 25px rgba(212,175,55,.15);

}


.lux-qr-frame::before,
.lux-qr-frame::after {

    content: "";

    position: absolute;

    width: 25px;

    height: 25px;

    border-color: #d4af37;

}


.lux-qr-frame::before {

    top: -5px;

    left: -5px;

    border-top: 2px solid;
    border-left: 2px solid;

}


.lux-qr-frame::after {

    right: -5px;

    bottom: -5px;

    border-right: 2px solid;
    border-bottom: 2px solid;

}


.lux-qr-frame img {

    display: block;

    width: 100%;

    height: 100%;

    object-fit: contain;

}


.lux-contact-brand p {

    max-width: 320px;

    margin: 22px auto 0;

    color: rgba(255,255,255,.5);

    font-size: 12px;

    line-height: 1.8;

}


/* =========================================================
   ORB
========================================================= */

.lux-contact-orb {

    position: absolute;

    width: 300px;

    height: 300px;

    right: -120px;

    top: -100px;

    opacity: .45;

    pointer-events: none;

}


.lux-contact-orb-ring {

    position: absolute;

    top: 50%;

    left: 50%;

    border-radius: 50%;

    border: 1px solid rgba(212,175,55,.2);

    transform:
        translate(-50%,-50%)
        rotateX(65deg);

}


.lux-contact-orb .ring-one {

    width: 150px;

    height: 150px;

    animation:
        luxContactRing 10s linear infinite;

}


.lux-contact-orb .ring-two {

    width: 240px;

    height: 240px;

    border-color:
        rgba(255,255,255,.07);

    animation:
        luxContactRingReverse 15s linear infinite;

}


.lux-contact-orb-core {

    position: absolute;

    top: 50%;

    left: 50%;

    width: 65px;

    height: 65px;

    transform:
        translate(-50%,-50%);

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 50%;

    color: #d4af37;

    background:
        rgba(8,8,8,.85);

    border: 1px solid rgba(212,175,55,.35);

    box-shadow:
        0 0 25px rgba(212,175,55,.15);

}


@keyframes luxContactRing {

    from {
        transform:
            translate(-50%,-50%)
            rotateX(65deg)
            rotateZ(0);
    }

    to {
        transform:
            translate(-50%,-50%)
            rotateX(65deg)
            rotateZ(360deg);
    }

}


@keyframes luxContactRingReverse {

    from {
        transform:
            translate(-50%,-50%)
            rotateX(65deg)
            rotateZ(360deg);
    }

    to {
        transform:
            translate(-50%,-50%)
            rotateX(65deg)
            rotateZ(0);
    }

}


/* =========================================================
   BOTTOM BRAND
========================================================= */

.lux-brand-bottom {

    position: absolute;

    bottom: 22px;

    left: 50%;

    transform: translateX(-50%);

    display: flex;

    align-items: center;

    gap: 10px;

    white-space: nowrap;

}


.lux-brand-bottom span {

    width: 25px;

    height: 1px;

    background:
        rgba(212,175,55,.4);

}


.lux-brand-bottom strong {

    color: rgba(255,255,255,.28);

    font-size: 7px;

    letter-spacing: 3px;

    font-weight: 600;

}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 991px) {

    .lux-contact-section {

        padding: 90px 0;

    }

    .lux-contact-brand {

        min-height: 420px;

    }

}


@media (max-width: 767px) {

    .lux-contact-section {

        padding: 70px 0;

    }

    .lux-contact-header {

        margin-bottom: 40px;

    }

    .lux-contact-kicker {

        font-size: 9px;

        letter-spacing: 2px;

    }

    .lux-contact-kicker span {

        width: 25px;

    }

    .lux-contact-title {

        font-size: 36px;

    }

    .lux-contact-intro {

        font-size: 14px;

    }

    .lux-contact-details {

        grid-template-columns: 1fr;

    }

    .lux-contact-card {

        min-height: 90px;

    }

    .lux-contact-social {

        align-items: flex-start;

        flex-direction: column;

    }

    .lux-contact-brand {

        min-height: 420px;

        padding: 40px 20px;

    }

    .lux-contact-brand h3 {

        font-size: 23px;

    }

    .lux-contact-orb {

        right: -150px;

        opacity: .2;

    }

    .lux-qr-frame {

        width: 170px;

        height: 170px;

    }

}


/* Reduced Motion */

@media (prefers-reduced-motion: reduce) {

    .lux-contact-section *,
    .lux-contact-section *::before,
    .lux-contact-section *::after {

        animation: none !important;

        transition: none !important;

    }

}

</style>