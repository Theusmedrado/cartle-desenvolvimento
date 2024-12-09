<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página</title>
    <link rel="stylesheet" href="estilo.css"> <!-- Arquivo CSS -->
</head>

<body>
    <!-- Cabeçalho -->
    <header>
        <div class="menu-container">
            <button class="menu-toggle" onclick="toggleMenu()">Menu</button>
            <div class="menu-options" id="menuOptions">
                <a href="../login/login.php">Login</a>
                <a href="../login/registro.php">Registrar</a>
                <a href="#suporte">Suporte</a>
            </div>
        </div>
        <img src="imagens/iocn.png" alt="Logo">
    </header>
    <div class="video-background">
        <video autoplay muted loop id="background-video">
            <source src="imagens/8306452-uhd_4096_2160_25fps.mp4" type="video/mp4">
        </video>
    </div>

    <div class="search-bar search">
        <input type="text" placeholder="O que deseja buscar">
        <button>Buscar</button>
    </div>

    <!-- Aba de Categorias -->
    <div class="categories">
        <ul>
            <li><a href="#masculino">Masculino</a></li>
            <li><a href="#feminino">Feminino</a></li>
            <li><a href="#infantil">Infantil</a></li>
            <li><a href="#esporte">Esporte</a></li>
            <li><a href="#acessorios">Acessórios</a></li>
        </ul>
    </div>
    <section class="destaque">
        <div>
            <div class="titulo-destaque">
                <h2>Destaques</h2>
            </div>
            <div class="listings">
                <div class="card">
                    <a href="..\produtos\pagina-produtos.php" class="link-produto">
                        <img src="imagens/calca-cargo.png" alt="" class="foto"></a>
                    <div class="info">
                        <h3>Calça cargo</h3>
                        <p>ShoppingBuy</p>
                        <p>R$150 </p>
                    </div>
                </div>
                <div class="card">
                    <a href="..\produtos\pagina-produtos.php" class="link-produto">
                        <img src="imagens/calca-cargo.png" alt="" class="foto"></a>
                    <div class="info">
                        <h3>Calça cargo</h3>
                        <p>ShoppingBuy</p>
                        <p>R$150 </p>
                    </div>
                </div>
                <div class="card">
                    <a href="..\produtos\pagina-produtos.php" class="link-produto">
                        <img src="imagens/calca-cargo.png" alt="" class="foto"></a>
                    <div class="info">
                        <h3>Calça cargo</h3>
                        <p>ShoppingBuy</p>
                        <p>R$150 </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php require "../includes/rodape.php"; ?>
    <!-- Fundo Escuro -->
    <div class="overlay" id="overlay" onclick="closeAllModals()"></div>
    <script src="scripit.js"></script> <!-- Arquivo JavaScript -->
</body>


</html>