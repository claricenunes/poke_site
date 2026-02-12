<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/testimonials.css">
    <link rel="stylesheet" href="css/delivery.css">
    <link rel="stylesheet" href="css/endereco.css">
    <link rel="stylesheet" href="css/rodape.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cardapiovejamais.css">
    <link rel="stylesheet" href="css/senha.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Bowl page</title>
</head>
<body>
    <header>
        <nav id="navbar">
            <i class="fa-solid fa-bowl-rice" id="nav_logo">bowl</i> 

            <ul id="nav_list">
                <li class = "nav-item active">
                    <a href="#home">Início</a>
                </li>
                <li class="nav-item">
                    <a href="#menu">Cardápio</a>
                </li>
                <li class="nav-item">
                    <a href="#testimonials">Avaliações</a>
                </li>
                <li class="nav-item">
                    <a href="#delivery">Delivery</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('endereco.page') }}" class="btn-login">Endereço</a>
                </li>
            </ul>
            

            <div class="header-actions">

    @guest
        <a href="{{ route('login.page') }}" 
           class="btn-default btn-primary btn-login">
           Login
        </a>
    @endguest

    @auth
        <button class="btn-default btn-primary btn-order">
            Peça aqui
        </button>

        <form action="{{ route('logout') }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit" class="btn-default">
                Logout
            </button>
        </form>
    @endauth

    

</div>


            <button class="hamburguer"> 
                <i class="fa-solid fa-bars"></i> 
            </button>
        </nav>

        <div id="mobile_menu">
             <ul id="mobile_nav_list">
                <li class = "nav-item">
                    <a href="#home">Início</a>
                </li>
                <li class="nav-item">
                    <a href="#menu">Cardápio</a>
                </li>
                <li class="nav-item">
                    <a href="testimonials">Avaliações</a>
                </li>
                <li class="nav-item">
                    <a href="delivery">Delivery</a>
                </li>
                <li class="nav-item">
                    <a href="endereco">Endereço</a>
                </li>
                <li class="nav-item">
                    <a href="rodape">Rodape</a>
                </li>
                <li class="nav-item">
                    <a href="cardapiovejamais">Veja Mais</a>
                </li>
            </ul>

            <button class="btn-default btn-order">
                Peça aqui
            </button>
        </div>
    </header>

    <main id="content">
        <section id="home">
            <div class="shape"></div>
            <div id="cta">
                <h1 class="title">
                    O sabor fresco que cabe na sua
                    <span>tigela!</span> 
                </h1>

                <p class="description">
                    Monte seu poke do seu jeito : ingredientes frescos, combinações únicas 
                    & um sabor irresistível.
                </p>

                <div id="cta_buttons">
                    <a href="{{ route('cardapio.vejamais') }}" class="btn-default">
    Ver Cardápio
</a>


                    <a href="tel:+555555555555" id="phone_button">
                        <button class="btn-default">
                            <i class="fa-solid fa-phone"></i>
                            
                        </button>
                        (61)99876-5432
                    </a>
                </div>

               <div class="social-media-buttons">
                <a href="https://wa.me/5561999449043" target="_blank">
                <i class="fa-brands fa-whatsapp"></i>
                </a>

                <a href="https://www.instagram.com/claricesnunes" target="_blank">
                <i class="fa-brands fa-instagram"></i>
                </a>

                <a href="https://www.tiktok.com/claricesnunes" target="_blank">
                <i class="fa-brands fa-tiktok"></i>
                </a>
</div>
            </div>

            <div id="banner">
                <img src="imagens/—Pngtree—poke bowl isolated_14556265.png" alt="">
            </div> 
            

            <div class="shape"></div>
            <div class="shape_bola"></div>


            
        </section>

        <section id="menu">
            <h2 class="section-title">Cardápio</h2>
            <h3 class="section-subtitle">Pratos mais vendidos</h3>

            <div id="dishes">
                <div class="dish">
                    <div class="dish-heart">
                        <i class="fa-solid fa-heart"></i>
                    </div>
                    
                    <img src="imagens/poke02.png" class="dish-image" alt="">

                    <h3 class="dish-title">
                        Poke Salmon
                    </h3>

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

                <div class="dish">
                    <div class="dish-heart">
                        <i class="fa-solid fa-heart"></i>
                    </div>
                    
                    <img src="imagens/deliciosa-tigela-de-salmao-com-manga-pepino-e-arroz.png" class="dish-image" alt="">

                    <h3 class="dish-title">
                        Poke Manga & Salmão
                    </h3>

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
            </div>
            <a href="{{ route('cardapio.page') }}" class="btn-default btn-ver-mais">
    Ver mais pratos
</a>


        </section>

        <section id="testimonials">
            <img src="imagens/cozinheiro-que-faz-ok-assina-sobre-fundo-branco.png" id="testimonial_chef" alt="">
            <div id="testimonial_content">
                <h2 class="section-title">
                    Depoimentos
                </h2>
                <h3 class="section-subtitle">
                    Experiência dos clientes
                </h3>

                <div id="feedbacks">
                    <div class="feedbacks">
                        <img src="imagens/retrato-de-uma-jovem-mulher-bonita-olhando-e-sorrindo.png" id="feedback-avatar" alt="">
                         
                        <div class="feedback-content">
                            <p>
                                Natália Lima
                                <span>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                            </p>
                            <p>
                                Poke delicioso, ingredientes sempre frescos e atendimento impecável. Sem dúvida o melhor da região, super recomendo!
                            </p>
                        </div>
                    </div>

                                        <div class="feedbacks">
                        <img src="imagens/a-cintura-para-cima-de-um-homem-bonito-confiante-alegre-empreendedor-com-um-grande-sorriso.png" id="feedback-avatar" alt="">
                         
                        <div class="feedback-content">
                            <p>
                                Davi Amaral
                                <span>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                            </p>
                            <p>
                                Atendimento rápido e poke incrível! Ingredientes frescos e sabor excepcional. Recomendo a todos!
                            </p>
                        </div>
                        
                    </div>
                </div>

                <button class="btn-defaul">
                    Ver mais avaliações
                </button>
            </div>
        </section>


      <section id="delivery">
    <h2 class="section-title">
        Delivery
    </h2>

    <h3 class="section-subtitle">
        Peça pelo nosso delivery e 
        <span>receba no conforto da sua casa!</span> 
    </h3>
    <img src="{{ asset('imagens/foto-ifood.jpg') }}" 
                alt="Foto da parte"
                class="imagem-ifood">
    
    <a href="https://wa.me/5511999999999" 
   target="_blank" 
   class="btn-default">
    Peça na loja
    </a>


    <a href="https://www.ifood.com.br/delivery/sua-loja-aqui" 
   target="_blank" 
   class="btn-default">
    Peça no iFood
    </a>

</section>

    <section id="rodape">
    <div class="rodape-container">

        <div class="rodape-item">
            <h3>Contato</h3>
            <p>
                Telefone: (61) 99876-5432 <br>
                Email: exemplo@email.com
            </p>
        </div>

        <div class="rodape-item">
            <h3>Endereço</h3>
            <p>
                Rua Exemplo, 123 <br>
                Cidade, Estado
            </p>
        </div>

        <div class="rodape-item">
            <h3>Redes Sociais</h3>
            <p>
                Instagram <br>
                Whatsapp <br>
                Tiktok
            </p>
        </div>

    </div>
</section>

    
    </main>
</body>
</html>