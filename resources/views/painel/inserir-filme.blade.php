@include('template-painel.head')

@include('template-painel.top')

@include('template-painel.menu')

@include('template-painel.content-main')

@section('title', 'Inserir Filmes')


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

        <form action="input-filme" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleInputEmail1">Nome:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nome" placeholder="Nome do Filme">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Categoria:</label>
            <select name="categoria" id="selector1" class="form-control1" >
                <option value="Selecione">Selecione</option>
				<option>Ação</option>
				<option>Aventura</option>
				<option>Animação</option>
				<option>Comédia</option>
				<option>Ficção Científica</option>
				<option>Suspense</option>
				<option>Drama</option>
				<option>Nacionais</option>
				<option>Terror</option>
				<option>Maiores de 18</option>
			</select>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Link:</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="link" placeholder="http://www.exemplo.com.br">
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
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="customFile" name="image" onchange="imagePrincipal(this);">
              <label class="custom-file-label" for="nome">Escolha a Imagem</label>
            </div>
        </div>

          <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
      </div>
     </form>



</body>
</html>
