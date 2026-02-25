@extends('layouts.index')

@section('title', 'Avaliações | Bowl')

@section('content')
<section id="avaliacoes">
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
                    
                                        <div class="feedbacks">
                        <img src="{{ asset('imagens/usuario.png') }}" id="feedback-avatar" alt="">
                         
                        <div class="feedback-content">
                            <p>
                                Rafael Costa
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
                        <img src="{{ asset('imagens/usuario.png') }}" id="feedback-avatar" alt="">
                         
                        <div class="feedback-content">
                            <p>
                                Ana Lívia 
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
        </section>

</section>

