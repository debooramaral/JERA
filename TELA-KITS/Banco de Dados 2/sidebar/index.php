<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jera Sidebar</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="imgs/favicon.svg">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
</head>
<body>
    <aside class="sidebar">
        <div class="logoJera">
            <img src="imgs/logo.svg" alt="Logo Jera" id="logoJera">
        </div>
        <nav class="navigation">
            <div class="contain-perfil-menu">
                <div class="perfil">
                    <a href="#" target="_top">
                        <img src="imgs/minha_fota.png" alt="Foto de Perfil" id="fotoPerfil">
                    </a>
                    <div class="user-sino">
                        <a href="#" id="userName" target="_top">Débora Amaral</a>
                        <a href="#"><img src="imgs/notificacao.svg" alt="Sino de Notificação" id="iconSino"></a>
                    </div>
                    <div class="nivel-engrenagem">
                        <p id="userLevel">Administrador</p>
                        <div class="engrenagem">
                            <a href="#" target="_top"><img src="imgs/engrenagem.svg" alt="Engrenagem" id="iconEngrenagem"></a>
                        </div>
                    </div>
                </div>
                <div class="menu">
                    <ul>
                        <li>
                            <a href="../main_content/index.html" target="_top" class="menu-a">
                                <img class="icons" src="imgs/home.svg" alt="Icone Início">
                                Início
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_top" class="menu-a">
                                <img class="icons" src="imgs/equipamento.svg" alt="Icone Equipamentos">
                                Equipamentos
                            </a>
                            <div class="submenu">
                                <a href="#">Meu Histórico</a>
                            </div>
                        </li>
                        <li>
                            <a href="#" target="_top" class="menu-a">
                                <img class="icons" src="imgs/brinde.svg" alt="Icone Brindes">
                                Brindes
                            </a>
                            <div class="submenu">
                                <a href="#">Kits</a>
                            </div>
                        </li>
                        <li>
                            <a href="#" target="_top" class="menu-a">
                                <img class="icons" src="imgs/usuarios.svg" alt="Icone Usuários">
                                Usuários
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="logout">
                <a href="#" class="menu-a">
                    <img src="imgs/sair.svg" alt="Icone Sair">
                    Sair
                </a>
            </div>
        </nav>
    </aside>
</body>
</html>