<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
    <ul class="nav" id="side-menu">

        <li>
            <a href="{{ url('/home-painel') }}" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">HOME</span> </a>
        </li>

        <li>
            <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-play nav_icon"></i> <span class="nav-label">Filmes</span><span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="{{ url('/inserir-filme') }}" class=" hvr-bounce-to-right"> <i class="fa fa-save nav_icon"></i>Inserir</a></li>

                <li><a href="{{ url('/listar-filmes') }}" class=" hvr-bounce-to-right"><i class="fa fa-list-ul nav_icon"></i>Listar</a></li>

           </ul>
        </li>

         <li>
            <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-image nav_icon"></i> <span class="nav-label">Banner</span><span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="{{ url('/inserir-banner') }}" class=" hvr-bounce-to-right"> <i class="fa fa-save nav_icon"></i>Inserir</a></li>

                <li><a href="{{ url('/listar-banner') }}" class=" hvr-bounce-to-right"><i class="fa fa-list-ul nav_icon"></i>Listar</a></li>
           </ul>
        </li>

        <li>
            <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-paperclip nav_icon"></i> <span class="nav-label">Contato</span><span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="{{ url('/listar-contato') }}" class=" hvr-bounce-to-right"><i class="fa fa-list-ul nav_icon"></i>Listar</a></li>>
            </ul>
        </li>

        <li>
            <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon"></i> <span class="nav-label">User</span><span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="{{ url('/listar-user') }}" class=" hvr-bounce-to-right"><i class="fa fa-list-ul nav_icon"></i>Listar</a></li>>
            </ul>
        </li>

    </ul>
</div>
</div>
</nav>
