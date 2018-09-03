@include('template-painel.head')

@include('template-painel.top')

@include('template-painel.menu')

@include('template-painel.content-main')

@section('title', 'Editar Filmes')


 	<!--grid-->
<div class="grid-form">

    <div class="grid-form1">
        @if(count($errors) > 0)
            <div class="alert alert-warningr">
                <ul>
                    @foreach($errors->all() as $error)

                        <p><b>{!!$error!!}</b></p>

                    @endforeach
                </ul>
            </div>
        @endif

        <h3 id="forms-example" class="">@yield('title')</h3>

        {!! Form::model($filme,['route' =>  ['editfilme.update', $filme->id], 'class' => '','method'=>'PUT','files'=>true]) !!}
            <div class="form-group">
             {!! Form::label('nome', 'Nome: *' ) !!}
             {!! Form::text('nome', null, ['class' => 'form-control', 'placeholder' => ''] ) !!}
            </div>
            <div class="form-group">
             {!! Form::label('categoria', 'Categoria: *' ) !!}
             {!! Form::text('categoria', null, ['class' => 'form-control', 'placeholder' => ''] ) !!}
            </div>
            <div class="form-group">
             {!! Form::label('link', 'Link: *' ) !!}
             {!! Form::text('link', null, ['class' => 'form-control', 'placeholder' => ''] ) !!}
            </div>
            <div class="form-group">

                <iframe width="560" height="315" src="{{ $filme->link }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

            </div>
            <div class="form-group">

                <div class="row">
                            <div class="col-xs-6 col-md-12">
                              <a href="#" class="thumbnail">

                                  <img  id="visualizar" width="200" height="300"  src="#" alt="Resolução Ideal: 100 X 1481 px" />
                              </a>
                            </div>
                </div>

            </div>

             <div class="form-group">
                 <input type="file" id="exampleInputFile"  name="image" onchange="imagePrincipal(this);">
             </div>
             {!!Form::submit('ATUALIZAR', ['class' => 'btn btn-lg btn-primary'])!!}


        {!! Form::close() !!}

        @include('painel.modal-delete')
        <div class="form-group">
            <button type="button" class="btn btn-lg btn-danger" data-toggle="modal" data-target="#myModal">
             Deletar Filme
            </button>
        </div>


</html>
