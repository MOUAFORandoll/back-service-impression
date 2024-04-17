@component('mail::message')
# Medsurlink

Bonjour j'ai ajoute mon etablissement a medsurlink
<br>Je demande une activation rapide de mon etablissement
<strong>{{ $etablissement->name }}</strong><br><br>

{{-- {{ config('app.name') }} --}}

<div class="div-logo-mail">
    <img class="logo-footer" src="https://www.back.medsurlink.com/images/logo.png" alt="Logo-Medicasure">
</div>

<a href="{{ config('app.frontend_url') }}" class="logo-footer center"> Medsurlink </a>
@endcomponent