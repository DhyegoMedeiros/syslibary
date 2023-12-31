<?php require'../assets/config.php';verificalogado();?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <link rel="shortcut icon" href="<?php echo($host.'/assets/img/icone.ico');?>" type="image/x-icon"/>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php $file = ucfirst($file); $file = substr($file, 0, -4); echo($file.'|'.$title);?></title>  
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
        <link rel="stylesheet" href="../assets/css/style_sistema.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-custom navbar-mainbg">
            <a class="navbar-brand navbar-logo" href="<?php echo($host);?>"><?php echo($title);?></a>
            <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars text-white"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                    <li class="nav-item <?php echo ($file == 'home.php' || $file=='Home') ? 'active' : ''; ?>">
                        <a class="nav-link" href="home"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    </li>
                    <li class="nav-item <?php echo ($file == 'cadastros.php') ? 'active' : ''; ?>">
                        <a class="nav-link" href="cadastros"><i class="far fa-address-book"></i>Cadastros</a>
                    </li>
                    <li class="nav-item <?php echo ($file == 'pesquisa.php') ? 'active' : ''; ?>">
                        <a class="nav-link" href="pesquisa"><i class="fas fa-search"></i>Pesquisa</a>
                    </li>
                    <li class="nav-item <?php echo ($file == 'emprestimos.php') ? 'active' : ''; ?>">
                        <a class="nav-link" href="emprestimo"><i class="far fa-calendar-alt"></i>Emprestimos</a>
                    </li>
                    <li class="nav-item <?php echo ($file == 'relatorios.php') ? 'active' : ''; ?>">
                        <a class="nav-link" href="relatorios"><i class="far fa-chart-bar"></i>Relatorios</a>
                    </li>
                    <li class="nav-item <?php echo ($file == 'documentos.php') ? 'active' : ''; ?>">
                        <a class="nav-link" href="documentos"><i class="far fa-copy"></i>Documentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" id="sair-link"><i class="fas fa-times-circle"></i>Sair</a>
                    </li>
                </ul>
            </div>
        </nav>
        