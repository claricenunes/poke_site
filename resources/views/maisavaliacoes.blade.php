@extends('layouts.index')

@section('title', 'Avaliações | Bowl')

@section('content')

<div class="pagina-avaliacoes">

    <div class="titulo-avaliacoes">
        <h3 class="section-subtitle">
            Experiência dos clientes
        </h3>
    </div>


<!-- seção de avaliações gerais  -->
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


<!-- galeria de fotos dos clientes  -->

    <div class="galeria-clientes">

    <div class="foto-cliente">
        <img src="{{ asset('imagens/avaliacao01.jfif') }}">
        <p>Natália Lima</p>
    </div>

    <div class="foto-cliente">
        <img src="{{ asset('imagens/avaliacao02.jfif') }}">
        <p>João Pedro</p>
    </div>

    <div class="foto-cliente">
        <img src="{{ asset('imagens/avaliacao03.jfif') }}">
        <p>Ana Clara</p>
    </div>


    <div class="filtros">

    <button class="btn">Todas</button>
    <button class="btn">5 ⭐</button>
    <button class="btn">4 ⭐</button>
    <button class="btn">Com foto</button>

    </div>

<!-- formulário de avaliação -->  


<!-- seção de avaliações em destaque  -->
    <div class="avaliacao-destaque">

    <h3>⭐ Avaliação em destaque</h3>

    <div class="feedbacks destaque">

    <img src="{{ asset('imagens/pessoa01.png') }}" id="feedback-avatar">

    <div class="feedback-content">
    <p>Maria Silva ⭐⭐⭐⭐⭐</p>

    <p>
    Melhor poke que já comi! Ingredientes frescos e atendimento incrível.
    </p>

    </div>

    </div>
    </div>

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
                                    <i class="fa-solid fa-star"></i>
                                </span>
                            </p>
                            <p>
                                Meu lugar favorito para comer poke! Indico para todos que conheço, nota 10!
                            </p>
                            <img src="imagens/foto_poke_avaliação.jpg" id="foto-avaliacao" alt="Foto da avaliação do poke">
                        </div>
                        
                
            </div>
        </section>

</section>

</div>

