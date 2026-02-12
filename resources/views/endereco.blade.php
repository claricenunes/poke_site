@extends('layouts.index')

@section('title', 'Endereco | Bowl')

@section('content')


</section>
        <section id="endereco">
            <h2 class="section-title">
                Endereço
            </h2>
            <h3 class="section-subtitle">
                Venha nos visitar!
            </h3>

            <img src="{{ asset('imagens/foto-endereco.jpg') }}" 
                alt="Foto da loja"
                class="imagem-loja">

            <div id="address_info">
                <p>
                    Rua das Flores, 123 - Centro, Brasília - DF
                </p>
                <p>
                    Aberto todos os dias das 11h às 22h
                </p>
            </div>

            <button class="btn-defaul"
        onclick="window.open('https://www.google.com/maps?q=Rua+das+Flores+123+Brasilia+DF', '_blank')">
    Ver no Google Maps
</button>

        </section>

        
@endsection
