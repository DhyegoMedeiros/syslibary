<div class="container">
    <h1>Central de Cadastro</h1>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cadastroAutorModal">
        <i class="fas fa-user"></i> Cadastrar Autor
    </button>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cadastroEditoraModal">
        <i class="fas fa-building"></i> Cadastrar Editora
    </button>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cadastroGeneroModal">
        <i class="fas fa-book"></i> Cadastrar Gênero
    </button>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cadastroIdiomaModal">
        <i class="fas fa-language"></i> Cadastrar Idioma
    </button>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cadastroLivroModal">
        <i class="fas fa-book-open"></i> Cadastrar Livro
    </button>



    <!-- Modal de Cadastro de Autor -->
    <div class="modal fade" id="cadastroAutorModal" tabindex="-1" role="dialog" aria-labelledby="cadastroAutorModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cadastroAutorModalLabel">Cadastro de Autor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="cadastroAutorForm" method="post">
                        <div class="form-group">
                            <label for="autor_nome">Nome do Autor</label>
                            <input type="text" class="form-control" id="autor_nome" name="autor_nome" required>
                        </div>
                        <div class="form-group">
                            <label for="paisAutor">País do Autor</label>
                            <select id="paisAutor" name="paisAutor" class="form-control">
                                <option value="">Selecione um país</option>
                            </select>
                        </div>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Fechar</button>
                        <button type="submit" class="btn btn-primary">Salvar Autor</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="cadastroEditoraModal" tabindex="-1" role="dialog" aria-labelledby="cadastroEditoraModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cadastroEditoraModalLabel">Cadastrar Editora</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="cadastroEditoraForm">
                        <div class="form-group">
                            <label for="editora_nome">Nome da Editora</label>
                            <input type="text" class="form-control" id="editora_nome" name="editora_nome" required>
                        </div>
                        <div class="form-group">
                            <label for="editora_cidade">Cidade da Editora</label>
                            <input type="text" class="form-control" id="editora_cidade" name="editora_cidade" required>
                        </div>
                        <div class="form-group">
                            <label for="paisEditora">País da Editora</label>
                            <select id="paisEditora" name="paisEditora" class="form-control">
                                <option value="">Selecione um país</option>
                            </select>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-primary" >Salvar Editora</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal de Sucesso -->
    <div class="modal fade" id="modalSucesso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ALERTA!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="modalSucessoMessage"></p> <!-- Elemento para exibir a mensagem de sucesso -->
                </div>
            </div>
        </div>
    </div>

    </div>
<script src="../assets/js/country.min.js"></script>