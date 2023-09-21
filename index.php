<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="shortcut icon" href="/assets/img/icone.ico" type="image/x-icon"/>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>SysLIBARY - Início</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<style type="text/css">
		body {
 			background-image: url("assets/img/fundo.png");
 			background-repeat: no-repeat;
 			background-size: 100%;
        }
	</style>
</head>
<body>
	<nav class="navbar navbar-success bg-success text-white">
		<a class="navbar-brand text-white" href="#">SysLibary</a>
	  	<button class="btn btn-outline-success text-white" type="button" data-toggle="modal" data-target="#modalLoginForm">Acessar</button>
	</nav>
	<div><!-- Encolhe o sistema Modal-->
	    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
	  aria-hidden="true" style="top: 15%;">
	        <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <div class="modal-header text-center">
	                    <h4 class="modal-title w-100 font-weight-bold">Acesso Restrito:</h4>
	                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                        <span aria-hidden="true">&times;</span>
	                    </button>
	                </div>
	                <form action="pags/control/vflogiin.php" method="POST">
	                    <div class="modal-body mx-3">
	                        <div class="md-form mb-5">
	                            <i class="fas fa-envelope prefix grey-text"></i>
	                                <label data-error="wrong" data-success="right" for="defaultForm-email">Nº de Registro: </label>
	                                <input type="text" name="matricula" id="defaultForm-email" class="form-control validate">
	                        </div>
	                        <div class="md-form mb-4">
	                            <i class="fas fa-lock prefix grey-text"></i>
	                            <label data-error="wrong" data-success="right" for="defaultForm-pass">Senha de acesso: </label>
	                            <input type="password" name="senha" id="defaultForm-pass" class="form-control validate">
	                        </div>
	                    </div>
	                    <div class="modal-footer d-flex justify-content-center">
	                        <button class="btn btn-outline-success" type="submit" style="width: 100%">Login</button>
                        </div>
    	            </form>
	            </div>
	        </div>
        </div>
    </div>
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>