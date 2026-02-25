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
            
            <img src="{{ asset('imagens/poke04.png') }}" 
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
                <h4>R$47,00</h4>
                <button class="btn-default">
                    <i class="fa-solid fa-basket-shopping"></i>
                </button>
            </div>
        </div>

        <!-- PRATO 4 -->
        <div class="dish">
            
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



        <!-- PRATO 5 -->
        <div class="dish">
        
            
            <img src="{{ asset('imagens/poke05.png') }}" 
                 class="dish-image" 
                 alt="Poke Especial">

            <h3 class="dish-title">Poke Health</h3>

            <span class="dish-description">
                Prato com a combinação perfeita para aqueles que não querem sair da dieta!
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
                <h4>R$50,00</h4>
                <button class="btn-default">
                    <i class="fa-solid fa-basket-shopping"></i>
                </button>
            </div>
        </div>
        <!-- PRATO 6 -->
        <div class="dish">
            <div class="dish-heart">
                <i class="fa-solid fa-plate-wheat"></i>
            </div>
            
            <img src="{{ asset('imagens/poke06.png') }}" 
                 class="dish-image" 
                 alt="Poke Hawaii">

            <h3 class="dish-title">Poke Cream</h3>

            <span class="dish-description">
                Poke saboroso e tropical, para os amantes de sabores intensos.
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
                <h4>R$50,00</h4>
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

    <div class="dishes">


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


        <div class="dish">
            <div class="dish-heart">
                <i class="fa-solid fa-heart"></i>
            </div>
            
            <img src="{{ asset('imagens/suco02.png') }}" 
                 class="dish-image" 
                 alt="Bebida">

            <h3 class="dish-title">
                Suco Strawberry
            </h3>

            <span class="dish-description">
                Bebida doce e refrescante, feita com morangos frescos.
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
                <h4>R$14,00</h4>
                <button class="btn-default">
                    <i class="fa-solid fa-basket-shopping"></i>
                </button>
            </div>
        </div>

        <div class="dish">

            
            <img src="{{ asset('imagens/suco03.png') }}" 
                 class="dish-image" 
                 alt="Bebida">

            <h3 class="dish-title">
                Suco Laranja
            </h3>

            <span class="dish-description">
                Suco de laranja natural, perfeito para acompanhar seu poke.
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
                <h4>R$10,00</h4>
                <button class="btn-default">
                    <i class="fa-solid fa-basket-shopping"></i>
                </button>
            </div>
        </div>

        <div class="dish">

            
            <img src="{{ asset('imagens/suco04.png') }}" 
                 class="dish-image" 
                 alt="Bebida">

            <h3 class="dish-title">
                Suco Lemonade
            </h3>

            <span class="dish-description">
                Limonada perfeita, feita com limões frescos e um toque de hortelã.
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

    <div class="dishes">    

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
                <h4>R$13,00</h4>
                <button class="btn-default">
                    <i class="fa-solid fa-basket-shopping"></i>
                </button>
            </div>
        </div>

         <div class="dish">
        
            
            <img src="{{ asset('imagens/sorvete_baunilha.png') }}" 
                 class="dish-image" 
                 alt="Sobremesa">

            <h3 class="dish-title">
                Sorvete de Baunilha
            </h3>

            <span class="dish-description">
                Sorvete cremoso de baunilha, perfeito como sobremesa.
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
                <h4>R$14,00</h4>
                <button class="btn-default">
                    <i class="fa-solid fa-basket-shopping"></i>
                </button>
            </div>
        </div>

        <div class="dish">
            <div class="dish-heart">
                <i class="fa-solid fa-heart"></i>
            </div>
            
            
            <img src="{{ asset('imagens/cheesecake.png') }}" 
                 class="dish-image" 
                 alt="Sobremesa">

            <h3 class="dish-title">
                Cheesecake de Morango
            </h3>

            <span class="dish-description">
                Cheesecake cremosa de morango, com uma base crocante e recheio saboroso.
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

        <div class="dish">
            <div class="dish-heart">
                <i class="fa-solid fa-heart"></i>
            </div>
            
            
            <img src="{{ asset('imagens/tiramisu.png') }}" 
                 class="dish-image" 
                 alt="Sobremesa">

            <h3 class="dish-title">
                Tiramisu
            </h3>

            <span class="dish-description">
                Tiramisu cremoso e saboroso, com camadas de biscoito e creme de mascarpone.
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


        <div class="dish">
            
            <img src="{{ asset('imagens/acai_bowl.png') }}" 
                 class="dish-image" 
                 alt="Sobremesa">

            <h3 class="dish-title">
                Açaí Bowl
            </h3>

            <span class="dish-description">
                A sobremesa perfeita para os amantes de açaí, com uma camada recheada de frutas frescas.
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
                <h4>R$30,00</h4>
                <button class="btn-default">
                    <i class="fa-solid fa-basket-shopping"></i>
                </button>
            </div>
        </div>


    </div>
</section>

@endsection

