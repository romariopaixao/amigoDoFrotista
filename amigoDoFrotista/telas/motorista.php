<div class="container">
    <div class="row-sm"><br><br><br><br><br><br></div>
    <div class="row">
        <div class="col-sm">
            <img src="../img/cliente.png" alt="" width="300px">

        </div>
        <div class="col-sm">


            <form action="../controle/salvarMotorista.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Primeio nome" required>

                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Sobrenome:</label>
                    <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Segundo nome" required>

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">CPF:</label>
                    <input type="text" class="form-control" pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}" id="cpf" name="cpf" placeholder="XXX.XXX.XXX-XX" required>
                </div>

                <!-- <button type="submit" class="btn btn-primary">Criar Conta</button> -->
                <button type="submit" class="btn btn-primary" style="width: 100%;"> Cadastrar</button>
            </form>
        </div>
    </div>
</div>