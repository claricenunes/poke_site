@extends('layouts.index')

@section('title', 'Cardápio | Bowl')

@section('content')
<section id="cardapio">
    <h3 class="section-subtitle">
        Cardápio - Veja mais opções deliciosas!
    </h3>
        
    <div class="menu-categorias">
        <a href="#comidas">Comidas</a>
        <a href="#bebidas">Bebidas</a>
        <a href="#sobremesas">Sobremesas</a>
    </div>
</section>


<section id="comidas" class="categoria">

    <h2 class="categoria-titulo">Comidas</h2>

    <div class="dishes">

        <!-- PRATO 1 -->
        <div class="dish">
            <div class="dish-heart">
                <i class="fa-solid fa-heart"></i>
            </div>
            
            <img src="{{ asset('imagens/poke02.png') }}" 
                 class="dish-image" 
                 alt="Poke Salmon">

            <h3 class="dish-title">Poke Salmon</h3>

            <span class="dish-description">
                Prato de salmão e ingredientes escolhidos por você!
            </span>

            <div class="dish-rate">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <span>(500+)</span>
            </div>

            <div class="dish-price">
                <h4>R$45,00</h4>
                <button class="btn-default">
                    <i class="fa-solid fa-basket-shopping"></i>
                </button>
            </div>
        </div>


        <!-- PRATO 2 -->
        <div class="dish">
            <div class="dish-heart">
                <i class="fa-solid fa-heart"></i>
            </div>
                    
            <img src="{{ asset('imagens/deliciosa-tigela-de-salmao-com-manga-pepino-e-arroz.png') }}" 
                 class="dish-image" 
                 alt="Poke Manga & Salmão">

            <h3 class="dish-title">Poke Manga & Salmão</h3>

            <span class="dish-description">
                Prato de manga com salmão, para refrescar seu dia!
            </span>

            <div class="dish-rate">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <span>(500+)</span>
            </div>

            <div class="dish-price">
                <h4>R$45,00</h4>
                <button class="btn-default">
                    <i class="fa-solid fa-basket-shopping"></i>
                </button>
            </div>
        </div>


        <!-- PRATO 3 -->
        <div class="dish">
            <div class="dish-heart">
                <i class="fa-solid fa-heart"></i>
            </div>
            
            <img src="{{ asset('imagens/poke01.png') }}" 
                 class="dish-image" 
                 alt="Poke Tropicalle">

            <h3 class="dish-title">Poke Tropicalle</h3>

            <span class="dish-description">
                Prato Tropical, repleto de sabores!
            </span>

            <div class="dish-rate">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <span>(500+)</span>
            </div>

            <div class="dish-price">
                <h4>R$45,00</h4>
                <button class="btn-default">
                    <i class="fa-solid fa-basket-shopping"></i>
                </button>
            </div>
        </div>


        <!-- PRATO 4 -->
        <div class="dish">
            <div class="dish-heart">
                <i class="fa-solid fa-heart"></i>
            </div>
            
            <img src="{{ asset('imagens/poke01.png') }}" 
                 class="dish-image" 
                 alt="Poke Especial">

            <h3 class="dish-title">Poke Especial</h3>

            <span class="dish-description">
                Combinação especial da casa.
            </span>

            <div class="dish-rate">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <span>(500+)</span>
            </div>

            <div class="dish-price">
                <h4>R$45,00</h4>
                <button class="btn-default">
                    <i class="fa-solid fa-basket-shopping"></i>
                </button>
            </div>
        </div>

    </div> <!-- FECHA dishes -->

</section>

       <!-- ================= BEBIDAS ================= -->
<section id="bebidas" class="categoria">
    <h2 class="categoria-titulo">Bebidas</h2>

    <div id="dishes">


        <div class="dish">
            <div class="dish-heart">
                <i class="fa-solid fa-heart"></i>
            </div>
            
            <img src="{{ asset('imagens/sucomaracuja.png') }}" 
                 class="dish-image" 
                 alt="Bebida">

            <h3 class="dish-title">
                Suco Tropical
            </h3>

            <span class="dish-description">
                Refrescante mistura de frutas naturais.
            </span>

            <div class="dish-rate">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <span>(320+)</span>
            </div>

            <div class="dish-price">
                <h4>R$12,00</h4>
                <button class="btn-default">
                    <i class="fa-solid fa-basket-shopping"></i>
                </button>
            </div>
        </div>

    </div>
</section>

    </div>
</section>


       <!-- ================= SOBREMESAS ================= -->

<section id="sobremesas" class="categoria">
    <h2 class="categoria-titulo">Sobremesas</h2>

    <div id="dishes">


        <div class="dish">
            <div class="dish-heart">
                <i class="fa-solid fa-heart"></i>
            </div>
            
            <img src="{{ asset('imagens/brownie.png') }}" 
                 class="dish-image" 
                 alt="Sobremesa">

            <h3 class="dish-title">
                Brownie de Chocolate
            </h3>

            <span class="dish-description">
                Deliciosa sobremesa tradicional, com casquinha crocante.
            </span>

            <div class="dish-rate">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <span>(210+)</span>
            </div>

            <div class="dish-price">
                <h4>R$18,00</h4>
                <button class="btn-default">
                    <i class="fa-solid fa-basket-shopping"></i>
                </button>
            </div>
        </div>

    </div>
</section>

@endsection

