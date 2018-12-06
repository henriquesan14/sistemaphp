<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="public/css/estilo-login.css" rel="stylesheet">
</head>
<body>
    <div id="form-container">
        <div class="panel" id="form-box">
            <form action="logar.php" method="post">
                <img src="imagens/user.png">
 
                <div class="form-group">
                    <label class="sr-only" for="login">Usuário</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fas fa-user"></i>
                        </div>
                        <input type="email" name="email" class="form-control" placeholder="Seu email">
                    </div>
                </div>
 
                <div class="form-group">
                    <label class="sr-only" for="senha">Senha</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fas fa-lock"></i>
                        </div>
                        <input type="password" name="senha" class="form-control" placeholder="Digite sua senha">
                    </div>
                </div>
 
                <div class="form-group">
                    <input type="submit" value="Entrar" class="btn btn-success form-control">
                </div>
 
                
            </form>
        </div>
    </div>
</body>
</html>