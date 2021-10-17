<div class="modal fade bd-example-modal-lg" id="bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="">
                <h5 class="modal-title" id="exampleModalLabel">Novo funcionário</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <input type="hidden" name="id" name="id">      
                    <div class="form-group">
                        <label for="nome" class="col-form-label">Nome:</label>
                        <input type="text" class="form-control" name="nome" id="nome">
                    </div>
                    <div class="form-grid" style="display: grid; grid-template-columns: 3fr 2fr 2fr">
                        <div class="form-group">
                                <label for="email" class="col-form-label">E-mail:</label>
                                <input type="email" class="form-control form-group" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="senha" class="col-form-label">Senha:</label>
                            <input type="password" class="form-control form-group" name="senha" id="senha">
                        </div>
                        <div class="form-group">
                            <label for="tipo_acesso" class="col-form-label">Tipo acesso:</label>
                            <select name="tipo_acesso" id="tipo_acesso" class="form-control form-group">
                                <option value="G">Gestor</option>
                                <option value="C">Colaborador</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-grid" style="display: grid; grid-template-columns: 2fr 3fr 3fr">
                        <div class="form-group">
                                <label for="cpf" class="col-form-label">CPF:</label>
                                <input type="text" class="form-control form-group" name="cpf" id="cpf">
                        </div>
                        <div class="form-group">
                            <label for="telefone" class="col-form-label">Telefone:</label>
                            <input type="text" class="form-control form-group" name="telefone" id="telefone">
                        </div>
                        <div class="form-group">
                            <label for="data_admissao" class="col-form-label">Data Admissão:</label>
                            <input type="date" class="form-control" name="data_admissao" id="data_admissao">
                        </div>
                    </div>
                    <div class="right-nav">
                        <button class="btn btn-action  copy-content setinha-toggle" type="button" name="cadastrar" id="cadastrar_novo_funcionario"><i class="fas fa-save"></i>&nbsp;Cadastrar</button>
                    </div>
            </div>
        </div>
    </div>
</div>