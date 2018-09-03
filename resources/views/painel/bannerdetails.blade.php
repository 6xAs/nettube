@include('template-painel.head')

@include('template-painel.top')

@include('template-painel.menu')

@include('template-painel.content-main')

@section('title', 'Editar banner')


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

       {!! Form::model($banner,['route' =>  ['editbanner.update', $banner->id], 'class' => '','method'=>'PUT','files'=>true]) !!}
           <div class="form-group">
            {!! Form::label('nome', 'Nome: *' ) !!}
            {!! Form::text('nome', null, ['class' => 'form-control', 'placeholder' => ''] ) !!}
           </div>
           <div class="form-group">

                <img id="mostra" src="/../img-banner/{{ $banner->image }}" width="840" height="300" alt="" />

           </div>

            <div class="form-group">
                <input type="file" id="exampleInputFile"  name="image" placeholder="">
            </div>
           {!!Form::submit('ATUALIZAR', ['class' => 'btn btn-lg btn-primary'])!!}

       {!! Form::close() !!}


@include('painel.modal-banner-delete')
   <div class="form-group">
       <button type="button" class="btn btn-lg btn-danger" data-toggle="modal" data-target="#myModal">
       Deletar banner
       </button>
   </div>


</html>
