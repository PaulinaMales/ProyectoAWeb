@extends('layouts.template')

@section ('subtitle','Contacto')
    
@section('meta-description', 'Contact meta description')

@section('content')
    <!--Title-->
    <h1 class="pt-4 text-3xl italic text-center py-4 pb-8 font-semibold font-mono">Contamos con 3 sedes en las ciudades principales del Ecuador. !Ven y disfruta nuestros platillos¡</h1>

    <div class="grid lg:grid-cols-3 lg:gap-4 p-4 md:grid-cols-2 md:gap-4 grid-cols-1 justify-items-center py-12 mt-20">
        <!--Location GPS QUITO-->    
        <div class="card w-96 bg-base-100 shadow-xl shadow-amber-200">
            <figure class="px-10 pt-10 rounded-md">
                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d15959.144842868882!2d-78.52729046566634!3d-0.2298682473297135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1spanecillo!5e0!3m2!1ses-419!2sec!4v1671430743452!5m2!1ses-419!2sec" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </figure>
            <div class="card-body items-center text-center">
                <h2 class="card-title italic text-xl font-extrabold italic">Sede en Quito</h2>
                <div class="card-actions">
                <button class="btn btn-primary italic font-semiblod"><a href="https://walink.co/482166">Comunicate</a></button>
                </div>
            </div>
        </div>
        <!--Location GPS GUAYAQUIL-->
        <div class="card w-96 bg-base-100 shadow-xl shadow-orange-200">
            <figure class="px-10 pt-10">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.014348690709!2d-79.88430989999999!3d-2.1481931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902d6dbf266d12ef%3A0x2a776d1e69594613!2sAeropuerto%20Internacional%20Jos%C3%A9%20Joaqu%C3%ADn%20de%20Olmedo!5e0!3m2!1ses-419!2sec!4v1671430841747!5m2!1ses-419!2sec" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </figure>
            <div class="card-body items-center text-center">
                <h2 class="card-title italic text-xl font-extrabold italic">Sede en Guayaquil</h2>
                <div class="card-actions">
                <button class="btn btn-primary italic font-semiblod"><a href="https://walink.co/482166">Comunicate</a></button>
                </div>
            </div>
        </div>
        <!--Location GPS LOJA-->
        <div class="card w-96 bg-base-100 shadow-xl shadow-green-200">
            <figure class="px-10 pt-10">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d255345.71773321126!2d-90.70932624999999!3d-0.26126715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9aab23acc78137a5%3A0x2a4992f090979738!2sIsla%20Santiago!5e0!3m2!1ses-419!2sec!4v1671430955813!5m2!1ses-419!2sec" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </figure>
            <div class="card-body items-center text-center">
                <h2 class="card-title italic text-xl font-extrabold italic">Sede en Loja</h2>
                <div class="card-actions">
                <button class="btn btn-primary italic font-semiblod"><a href="https://walink.co/482166">Comunicate</a></button>
                </div>
            </div>
        </div>
    </div>
@endsection