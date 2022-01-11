<section id="info">
            <div class="container">
                <div class="institucional">
                    <h3>Institucional</h3>
                    <ul>
                        <li><a href="#">Empresa</a></li>
                        <li><a href="#">Como comprar</a></li>
                        <li><a href="#">Política de Privacidade</a></li>
                        <li><a href="#">Política de Entrega</a></li>
                        <li><a href="#">Pagamento</a></li>
                        <li><a href="#">Tempo de Garantia</a></li>
                        <li><a href="#">Depoimentos de Clientes</a></li>
                        <li><a href="#">Contato</a></li>
                    </ul>
                </div>
                <div class="contato-info">
                    <h3>Contato</h3>
                    <p>Loja física: 08:00 às 11:30h e 13:00 às 18:00h</p>
                    <p> (24) 9999-9999 / (24) 99999-9999 </p>
                    <p>sac@cordoba.com.br</p>
                </div>
                <div class="pagamento">
                    <h3>Pagamento</h3>
                    <div class="avista">
                        <p>À VISTA</p>
                        <img src="assets/img/icone-pagamentos-avista 1.png" alt="">
                    </div>
                    <div class="prazo">
                        <p>A PRAZO</p>
                        <img src="assets/img/icon-pagamentos-cartao 1.svg" alt="">
                    </div>
                </div>
            </div>
        </section>
    </main>
<footer>
        <div class="container">
            <div class="social">
                <a href="#"><img src="assets/img/icons/instagram.png" alt=""></a>
                <a href="#"><img src="assets/img/icons/facebook.png" alt=""></a>
            </div>
            <div class="footer-text">
                <p>
                    © Copyright 2021 Cordoba. CNPJ: Nº 00.000.000/0001-88. Rua da Sempre da Sorte, N°000 - Sempre Aqui,
                    0000-000, Sempre - RJ.
                </p>
                <p>
                    Todos os preços e condições deste site são válidos apenas para compras no site. Destacamos que os preços
                    previstos no site prevalecem aos demais
                    anunciados em outros meios de comunicação e sites de buscas. Em caso de divergência, o preço válido é do
                    carrinho de compras. Imagens meramente ilustrativas.
                </p>
            </div>
            <div class="footer-logo">
                <img src="/assets/img/cordoba-logo-branco.png" alt="">
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/js/script-slide.js"></script>
    <script src="/assets/js/script.js"></script>

    <!-- Initialize Swiper -->
    <!-- banner principal -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            autoplay: {
                delay: 5000,
            },
        });

        var swiper = new Swiper(".myProducts", {
            slidesPerView: "auto",
            spaceBetween: 30,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>

</body>

</html>