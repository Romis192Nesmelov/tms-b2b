<div class="flex flex-row items-center justify-start">
    <img class="contact-icon" src="{{ asset('storage/images/phone_icon.svg') }}" />
    <a class="text-left text-white font-semibold hover:text-yellow-400" href="tel:{{ str_replace([' ','-'],'',$phone) }}">{{ $phone }}</a>
</div>