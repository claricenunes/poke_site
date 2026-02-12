<header class="site-header">
    <div class="container">
        <nav class="main-nav">

            <ul class="nav-center">
                <li><a href="/" class="btn-default btn-primary">Home</a></li>

                @unless(request()->is('login*'))
                    <li><a href="/login" class="btn-default btn-primary">Login</a></li>
                @endunless

                @unless(request()->is('register*'))
                    <li><a href="/register" class="btn-default btn-primary">Registrar</a></li>
                @endunless
            </ul>

            <!-- Overlay escuro -->
<div id="cart-overlay"></div>

<!-- Carrinho lateral -->
<div id="cart-sidebar">

    <div class="cart-header">
        <h3>Seu Carrinho</h3>
        <button id="close-cart">&times;</button>
    </div>

    <div id="cart-items">
        <!-- Produtos serão adicionados aqui -->
    </div>

    <div class="cart-footer">
        <h4>Total: R$ <span id="cart-total">0.00</span></h4>
        <button class="btn-default">Finalizar Pedido</button>
    </div>

</div>


            @if(request()->is('cardapio'))
                <a href="#" class="cart-btn">
                    <i class="fa-solid fa-basket-shopping"></i>
                </a>
            @endif

        </nav>
    </div>
</header>
