@php
    $phone = $company->phone ?? '';
    $whatsapp = $company->whatsapp ?? $phone;

    $phoneClean = preg_replace('/[^0-9+]/', '', $phone);

    $whatsappNumber = preg_replace('/[^0-9]/', '', $whatsapp);

    // تحويل الرقم المصري 01xxxxxxxxx إلى 201xxxxxxxxx
    if (str_starts_with($whatsappNumber, '0')) {
        $whatsappNumber = '20' . substr($whatsappNumber, 1);
    }

    $whatsappMessage = app()->getLocale() === 'ar'
        ? 'السلام عليكم، أريد الاستفسار عن خدماتكم.'
        : 'Hello, I would like to inquire about your services.';
@endphp

<div class="lux-floating-contact">

    {{-- WhatsApp --}}
    <a
        href="https://wa.me/{{ $whatsappNumber }}?text={{ urlencode($whatsappMessage) }}"
        target="_blank"
        rel="noopener"
        class="lux-floating-btn lux-floating-whatsapp"
        aria-label="WhatsApp"
    >
        <span class="lux-floating-icon">
            <i class="bi bi-whatsapp"></i>
        </span>

        <span class="lux-floating-tooltip">
            {{ app()->getLocale() === 'ar' ? 'واتساب' : 'WhatsApp' }}
        </span>
    </a>

    {{-- Call --}}
    <a
        href="tel:{{ $phoneClean }}"
        class="lux-floating-btn lux-floating-call"
        aria-label="Call"
    >
        <span class="lux-floating-icon">
            <i class="bi bi-telephone-fill"></i>
        </span>

        <span class="lux-floating-tooltip">
            {{ app()->getLocale() === 'ar' ? 'اتصل الآن' : 'Call Now' }}
        </span>
    </a>

</div>

<style>
.lux-floating-contact {
    position: fixed;
    left: 22px;
    bottom: 25px;
    z-index: 9999;

    display: flex;
    flex-direction: column;
    gap: 12px;
}

.lux-floating-btn {
    position: relative;

    width: 56px;
    height: 56px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 50%;

    text-decoration: none !important;

    backdrop-filter: blur(15px);
    -webkit-backdrop-filter: blur(15px);

    transition: .35s ease;
}

.lux-floating-icon {
    position: relative;
    z-index: 2;

    width: 100%;
    height: 100%;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 50%;

    font-size: 23px;
}


/* WhatsApp */

.lux-floating-whatsapp {
    color: #25d366 !important;

    background: rgba(37, 211, 102, .10);

    border: 1px solid rgba(37, 211, 102, .45);

    box-shadow:
        0 0 0 5px rgba(37,211,102,.04),
        0 8px 30px rgba(37,211,102,.18);
}

.lux-floating-whatsapp:hover {
    color: #fff !important;

    background: #25d366;

    transform: translateY(-5px) scale(1.08);

    box-shadow:
        0 0 0 7px rgba(37,211,102,.08),
        0 12px 40px rgba(37,211,102,.35);
}


/* Call */

.lux-floating-call {
    color: #d4af37 !important;

    background: rgba(212,175,55,.09);

    border: 1px solid rgba(212,175,55,.45);

    box-shadow:
        0 0 0 5px rgba(212,175,55,.035),
        0 8px 30px rgba(212,175,55,.15);
}

.lux-floating-call:hover {
    color: #111 !important;

    background: #d4af37;

    transform: translateY(-5px) scale(1.08);

    box-shadow:
        0 0 0 7px rgba(212,175,55,.08),
        0 12px 40px rgba(212,175,55,.30);
}


/* Tooltip */

.lux-floating-tooltip {
    position: absolute;

    left: 70px;

    top: 50%;

    transform: translateY(-50%) translateX(-8px);

    opacity: 0;
    visibility: hidden;

    white-space: nowrap;

    padding: 8px 13px;

    border-radius: 10px;

    background: rgba(15,15,15,.94);

    color: #fff;

    border: 1px solid rgba(212,175,55,.20);

    font-family: 'Cairo', sans-serif;

    font-size: 11px;
    font-weight: 700;

    transition: .3s ease;

    pointer-events: none;
}

.lux-floating-btn:hover .lux-floating-tooltip {
    opacity: 1;
    visibility: visible;

    transform: translateY(-50%) translateX(0);
}


/* Pulse */

.lux-floating-whatsapp::before,
.lux-floating-call::before {
    content: "";

    position: absolute;

    inset: -5px;

    border-radius: 50%;

    border: 1px solid currentColor;

    opacity: .18;

    animation: luxFloatPulse 2.5s infinite;
}

@keyframes luxFloatPulse {

    0% {
        transform: scale(.9);
        opacity: .35;
    }

    70% {
        transform: scale(1.25);
        opacity: 0;
    }

    100% {
        transform: scale(1.25);
        opacity: 0;
    }

}


/* Mobile */

@media (max-width: 767px) {

    .lux-floating-contact {
        left: 14px;
        bottom: 18px;
        gap: 9px;
    }

    .lux-floating-btn {
        width: 50px;
        height: 50px;
    }

    .lux-floating-icon {
        font-size: 20px;
    }

    .lux-floating-tooltip {
        display: none;
    }
}


/* RTL */

html[dir="rtl"] .lux-floating-contact {
    left: auto;
    left: 22px;
}

html[dir="rtl"] .lux-floating-tooltip {
    left: auto;
    left: 70px;

    transform: translateY(-50%) translateX(8px);
}

html[dir="rtl"] .lux-floating-btn:hover .lux-floating-tooltip {
    transform: translateY(-50%) translateX(0);
}

@media (max-width: 767px) {

    html[dir="rtl"] .lux-floating-contact {
        left: 14px;
        left: auto;
    }

}
</style>