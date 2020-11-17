<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <form method="POST" action="logar.php">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel">Login Vale Adotar </h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">E-mail</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Digite seu e-mail" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Senha</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="senha" placeholder="Digite sua senha" required>
                        </div>
                    
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #f4aa24; color:white; border: 1px solid #f4aa24;" value="Fechar"></input>
                    <input type="submit" class="btn btn-primary" style="background-color:#613488; color:white; border: 1px solid #684686;" value="Logar"></input>
                </div>
                </form>
            </div>
        </div>
    </div>