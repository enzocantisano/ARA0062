<?php 


// se usuario esta autenticado, mostra menu completo
if ( isset($_SESSION["autenticado"]) ){
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Veterinária</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/index.php">Blog</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/sobre.php">Sobre</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contato.php">Contato</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/usuario/cadastro.php">Cadastro de Usuarios</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/blog/cadastro.php">Cadastro de Postagens</span></a>
            </li>

        </ul>
    </div>
    <span class="navbar-text">
        <a class="nav-link" href="/servico/logout.php">Sair</a>
    </span>
</nav>


<?php 
    } else { 
    // se nao estiver autenticado, mostra form de login
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand">Veterinária</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/index.php">Blog</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contato.php">Contato</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/sobre.php">Sobre</span></a>
            </li>
        </ul>
    </div>
    <form class="form-inline" action="servico/verifica.php" method="POST">
        <input class="form-control mr-sm-2" type="text" placeholder="Digite seu login" name="login" autocomplete="off">
        <input class="form-control mr-sm-2" type="password" placeholder="Digite sua senha" name="senha" autocomplete="off">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
    </form>
</nav>

<?php } ?>





<!-- <li class="nav-item">
                <a class="nav-link active" href="usuario/ConsultaUsuario.php">Cadastro de Usuários</a>
              </li> 
-->