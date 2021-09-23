<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <a class="navbar-brand" href="#"></a>
    <a href="./app.php"><img src="./img/logo.fw.png" width="200" class="d-inline-block align-top" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">

        <ul class="navbar-nav ml-auto">

            <li class="nav-item ml-3">
                <a class="nav-link" href="?p=pg/pastas/index.php"><i class="fas fa-book"></i>&nbsp;&nbsp;Pastas Funcioais</a>
            </li>
            <li class="nav-item ml-3">
                <a class="nav-link" href="?p=pg/relatorios/index.php"><i class="fas fas fa-file-alt"></i>&nbsp;&nbsp;Relatórios</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navCadastro" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-cog"></i> Gerenciar</a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navCadastro">
                    <a class="dropdown-item" href="?p=pg/prateleiras/index.php"><i class="fas fa-book"></i>&nbsp;&nbsp;Criar Prateleiras</a>
                    <a class="dropdown-item" href="?p=pg/caixas/index.php"><i class="fas fa-book"></i>&nbsp;&nbsp;Criar Caixas</a>
                    <a class="dropdown-item" href="?p=pg/documentos/index.php"><i class="fas fa-book"></i>&nbsp;&nbsp;Criar Documentos</a>
                </div>
            </li>
            <li class="nav-item ml-3">
                <a class="nav-link" href="./"><i class="fas fa-door-closed"></i> Sair</a>
            </li>

        </ul>
    </div>
</nav>