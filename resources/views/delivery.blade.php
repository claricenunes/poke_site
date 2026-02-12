@extends('layouts.index')

@section('title', 'Delivery | Bowl')

@section('content')


        <section id="delivery">
            <h2 class="section-title">
                Delivery
            </h2>

            <img src="{{ asset('imagens/foto-ifood.jpg') }}" 
                alt="Foto da parte"
                class="imagem-ifood">

            <h3 class="section-subtitle">
                Peça pelo nosso delivery e receba no conforto da sua casa!
            </h3>
                <p>
                    Oferecemos entrega rápida e segura para toda a cidade. Faça seu pedido pelo iFood ou entre em contato conosco para mais opções de entrega.
                </p>
                <button class="btn-defaul">
                        Peça no iFood
                    </button>
        </section>
@endsection
