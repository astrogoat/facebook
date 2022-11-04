@php($settings = resolve(Astrogoat\Facebook\Settings\FacebookSettings::class))

@if($settings->isEnabled() && ! blank($verification = $settings->site_verification))
    <meta name="facebook-domain-verification" content="{{ $verification }}" />
@endunless