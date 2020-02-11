<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light">
    <a class="navbar-brand" href="#">Basic Website</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item {{Request::is('/') ? 'active' : ''}}">
                <a class="nav-link " href='http://localhost/basicwebsite/public/'>Home </a>
            </li>
            <li class="nav-item {{Request::is('about') ? 'active' : ''}}">
                <a class="nav-link" href="http://localhost/basicwebsite/public/about">About</a>
            </li>
            <li class="nav-item {{Request::is('contact') ? 'active' : ''}}">
                <a class="nav-link" href="http://localhost/basicwebsite/public/contact">contact</a>
            </li>
            <li class="nav-item {{Request::is('messages') ? 'active' : ''}}">
                <a class="nav-link" href="http://localhost/basicwebsite/public/messages">Messages</a>
            </li>
            <li class="nav-item {{Request::is('todos') ? 'active' : ''}}">
                <a class="nav-link" href="http://localhost/basicwebsite/public/todos">Todos</a>
            </li>
            <li class="nav-item {{Request::is('albums') ? 'active' : ''}}">
                <a class="nav-link" href="http://localhost/basicwebsite/public/albums">Album</a>
            </li>
        </ul>
    </div>
</nav>


