@extends('layouts.index')

@section('title', 'Avaliações | Bowl')

@section('content')

<div class="pagina-avaliacoes">

    <div class="titulo-avaliacoes">
        <h3 class="section-subtitle">
            Experiência dos clientes
        </h3>
    </div>


    <div class="avaliacao-media">
        <h2>⭐ 4.8 / 5</h2>
        <p>Baseado em 127 avaliações</p>
    </div>

    <div class="distribuicao-estrelas">

        <div class="linha-estrela">
            ⭐⭐⭐⭐⭐
            <div class="barra">
                <div class="progresso" style="width:80%"></div>
            </div>
        </div>

        <div class="linha-estrela">
            ⭐⭐⭐⭐
            <div class="barra">
                <div class="progresso" style="width:15%"></div>
            </div>
        </div>
    </div>





<div class="avaliacao-destaque-titulo">
    <h3>Avaliações em destaque</h3>
</div>

<div class="avaliacoes-destaque-container">
    

    <div class="avaliacao-destaque">
        <img src="{{ asset('imagens/pessoa06.jpg') }}" id="feedback-avatar" alt="Foto do cliente">

        <div class="feedback-content">
            <p>Maria Silva ⭐⭐⭐⭐⭐</p>
            <p>Melhor poke que já comi! Ingredientes frescos e atendimento incrível.</p>
            <img src="{{ asset('imagens/poke07.webp') }}" id="foto-avaliacao" alt="Foto da avaliação do poke">
        </div>
    </div>

    <div class="avaliacao-destaque">
        <img src="{{ asset('imagens/pessoa07.png') }}" id="feedback-avatar" alt="Foto do cliente">

        <div class="feedback-content">
            <p>Pedro Henrique ⭐⭐⭐⭐⭐</p>
            <p>O lugar preferido da minha esposa, comida saborosa, ótimo atendimento além da localização impecável!</p>
            <img src="{{ asset('imagens/poke08.webp') }}" id="foto-avaliacao" alt="Foto da avaliação do poke">
        </div>
    </div>

</div>

<div class="avaliacao-destaque-titulo">
    <h3>Filtro de Busca</h3>
</div>

<div>
    <!-- deixe no centro -->
    <div class="filtros">

    <button class="btn">Todas</button>
    <button class="btn">5 ⭐</button>
    <button class="btn">4 ⭐</button>
    <button class="btn">Com foto</button>
    </div>

</div>

<!-- formulário de avaliação -->  


<!-- seção de avaliações  -->
<section id="avaliacoes">
            </section>

        <section id="testimonials">
            <img src="imagens/cozinheiro-que-faz-ok-assina-sobre-fundo-branco.png" id="testimonial_chef" alt="">
            <div id="testimonial_content">
                <h2 class="section-subtitle">
                    Depoimentos
                </h2>

                <div id="feedbacks">
                    <div class="feedbacks">
                        <img src="imagens/pessoa05.jpg" id="feedback-avatar" alt="">
                         
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
                        <img src="imagens/pessoa04.jpg" id="feedback-avatar" alt="">
                         
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
                    
                    <div class="feedbacks">
                        <img src="imagens/pessoa001.jpg" id="feedback-avatar" alt="">
    
                        <div class="feedback-content">
                            <p>
                                Ana Clara
                                <span>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                            </p>
                            <p>
                            Poke fresquinho, com ótimas variedades e ótima qualidade. Sem palavras pra agradecer! O atendimento também foi impecável! 
                            </p>
                        </div>
                        </div> 
                                        <div class="feedbacks">
                        <img src="imagens/pessoa02.jpg" id="feedback-avatar" alt="">
                         
                        <div class="feedback-content">
                            <p>
                                Gustavo Silva
                                <span>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                            </p>
                            <p>
                                Um dos melhores pokes que já experimentei! Ingredientes frescos, sabor incrível e atendimento excelente. Super recomendo para quem ama poke!
                            </p>
                        </div>

                         </div>
                
                                        <div class="feedbacks">
                        <img src="imagens/pessoa03.jpg" id="feedback-avatar" alt="">
                         
                        <div class="feedback-content">
                            <p>
                                Vitor Hugo
                                <span>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                            </p>
                            <p>
                                Meu lugar favorito para comer poke! O único defeito foi quando pedi ifood e o poke veio todo misturado, mas ir na loja é uma experiência sensacional!
                            </p>
                            <img src="imagens/foto_poke_avaliação.jpg" id="foto-avaliacao" alt="Foto da avaliação do poke">
                        </div>
                        
                
            </div>
        </section>

</section>

</div>

