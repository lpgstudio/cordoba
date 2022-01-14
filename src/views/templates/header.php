<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- style / icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Cordoba</title>
</head>

<body>
    <header>
        <div class="card-frete">
            <p>FRETE GRÁTIS APARTIR DE R$200,00</p>
        </div>
        <div class="menu-acesso">
            <a href="#">Acompanhar Pedidos</a>
            <a href="#">Login / Inscreva-se</a>
        </div>
        <nav class="container">
            <div class="logo">
                <img src="assets/img/cordoba-logo.png" alt="Cordoba">
            </div>
            <div class="toggle"></div>
            <div class="menu">
                <ul>
                    <li><a href="#">MASCULINO</a></li>
                    <li><a href="#">FEMININO</a></li>
                    <li><a href="#">LANÇAMENTOS</a></li>
                    <li><a href="#">PROMOÇÕES</a></li>
                </ul>
            </div>
            <div class="busca">
                <input type="text" name="buscar" placeholder="O que você procura?">
                <i class="fas fa-search"></i>
            </div>
            <div class="icons">
                <i class="fas fa-shopping-cart" onclick="toggleCarrinho()"></i>
                <i class="fas fa-user" onclick="toggleModalLogin()"></i>
            </div>
        </nav>
    </header>
    <main>
        <?php
            include_once 'Modal_login.php';
            include_once 'Modal_carrinho.php';
        ?>