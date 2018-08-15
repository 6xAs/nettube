@include('template-painel.head')

@include('template-painel.top')

@include('template-painel.menu')

@include('template-painel.content-main')

@section('title', 'Inserir Filme')


<!--grid-->
<div class="grid-form" role="alert">


    <div class="grid-form1">
       <h3 id="forms-example" class="">Inserir Filme</h3>
        <form action="{{ url('/input-filme') }}" method="POST" enctype="multipart/form-data">
             {{ csrf_field() }}

            <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
        </form>
    </div>
</div>
<!----->
