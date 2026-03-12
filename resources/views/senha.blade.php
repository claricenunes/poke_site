@extends('layouts.index')

@section('title', 'Esqueci minha senha | Bowl')

@section('content')
<section id="senha">
    <h2 class="sectiontitulo">
        Esqueci minha senha
    </h2>

    <h3 class="sectionsubtitulo">
        Não se preocupe, vamos te ajudar a recuperar sua senha!
    </h3>

<div class="login-form">

<form method="POST" action="{{ route('enviar.codigo') }}">
    @csrf

    <input type="email" name="email" placeholder="Digite seu email" required>

    <button type="submit">Enviar código</button>
</form>

@if(session('erro'))
<p style="color:red;">
    {{ session('erro') }}
</p>
@endif

@if(session('sucesso'))
<p style="color:green;">
    {{ session('sucesso') }}
</p>
@endif

</div>
</section>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('sucesso'))
<script>
document.addEventListener("DOMContentLoaded", function(){

Swal.fire({
    title: 'Digite o código enviado para seu email',
    input: 'text',
    inputPlaceholder: 'Digite o código',
    confirmButtonText: 'Verificar código',
    confirmButtonColor: 'lightsalmon',
    cancelButtonColor: '#999',
    showCancelButton: true,
    cancelButtonText: 'Cancelar'
}).then((result) => {

    if(result.value){

        fetch("{{ route('verificar.codigo') }}",{
            method:'POST',
            headers:{
                'Content-Type':'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body:JSON.stringify({
                codigo: result.value
            })
        })
        .then(response => {
            if(response.redirected){
                window.location = response.url
            }
        })

    }

});

});
</script>
@endif

@endsection