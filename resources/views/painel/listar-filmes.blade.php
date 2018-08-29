@include('template-painel.head')

@include('template-painel.top')

@include('template-painel.menu')

@include('template-painel.content-main')

@section('title', 'Listar Filme')


<!--gallery-->
<div class="gallery">
    <h3 id="forms-example" class="">@yield('title')</h3>
    @if(Session::has('message'))
        <div class="alert alert-success">
              <button type="button" class="btn btn-success warning_2" data-dismiss="alert" aria-hidden="true">×</button>
              {!! Session::get('message') !!}
              <a href="inserir-filme" class="alert-link">Inserir outro Filme?</a>
        </div>
    @endif

   @foreach( $filme as $filme )
       <div class="col-md-3">
           <div class="gallery-img">
           <a href="{{URL::to('filmes/' .$filme->id. '/edit')}}" class="b-link-stripe b-animate-go  swipebox"  title="Image Title" >
                <img class="img-responsive " src="img-filmes/{{$filme->image}}" alt="" />
                   <span class="zoom-icon"> </span> </a>
           </a>
           </div>
           <div class="text-gallery">
               <h6>{{$filme->nome}}</h6>
           </div>
       </div>
    @endforeach


    <div class="clearfix"> </div>
</div>

<!--//gallery-->
