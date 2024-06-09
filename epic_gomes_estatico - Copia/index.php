<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Epic Gomes</title>
    <script type="module" src="./index.js"></script>
    <link rel="shortcut icon" type="image/ico" href="./favicon.ico"/>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./checkbox.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <section name="menus">
        <header>
            <nav class="menu_horizontal" >
                <ul>
                    <li><a href="./" class="active">Loja</a></li>
                    <li><a href="./carrinho.html">Carrinho</a></li>
                    <li><a href="./biblioteca.html">Biblioteca</a></li>
                </ul>
                <input type="button" value="conta_button" id="conta_button" class="invisivel">
                <label for="conta_button" class="naoselecionavel">
                    <div style="right: 0px;">
                        <img src="./user.png" alt="user">
                    </div>
                </label>
        
                <input type="button" value="voltar" id="voltar" onclick="history.go(-1)" class="invisivel">
                <label for="voltar" class="naoselecionavel">
                    <div style="left: 0px;">
                        <i class="bi bi-arrow-left-short"></i>
                    </div>
                </label>
            </nav>
        </header>
        <input type="checkbox" name="menu_vertical_chec" id="menu_vertical_chec" class="invisivel">
        <label for="menu_vertical_chec" id="menu_vertical_chec_label"><i class="bi bi-list"></i></label>
        <nav class="menu_vertical">
            <ul>
                <li><form action="#" method="post" id="pesquisa"><input type="text" name="procura" id="procura" placeholder="Search..."></form></li>
                <div class="separator"><svg><g><path d="M0 5 L500 5" style="stroke: rgb(32, 43, 61); stroke-width: 1px;"></path></g></svg></div>
                <li>
                    <input type="checkbox" name="chec_price" id="price" class="invisivel filtros" checked>
                    <label for="price">
                        <header>Filtrar por preço</header>
                    </label>
                    <div class="caixa_filtros_container" id="price_container">
                        <div class="caixa_filtros">
                            <ul>
                                <li class="preco"><div class="range_preco"><form><input class="naoselecionavel" type="range" name="preco" id="preco" min="0" max="130" step="10"oninput="x.value=preco.value" value="130"><br><p id="preco_output">Por até <output name="x" for="preco"></output>,00 R$</p><p id="qualquer">Qualquer preço</p><p id="gratis">Gratuito</p></form></div></li>
                                <label for="specials"><li><div class="checkbox naoselecionavel"><input class="price_filtro filtro" type="checkbox" name="&specials=1" id="specials"><label for="specials">Ofertas especiais</label></div></li></label>
                                <label for="hidef2p"><li><div class="checkbox naoselecionavel"><input class="price_filtro filtro" type="checkbox" name="&hidef2p=1" id="hidef2p"><label for="hidef2p">Ocultar gratuitos</label></div></li></label>
                            </ul>
                        </div>
                    </div>
                </li>
                <div class="separator"><svg><g><path d="M0 5 L500 5" style="stroke: rgb(32, 43, 61); stroke-width: 1px;"></path></g></svg></div>
                <li>
                    <input type="checkbox" name="chec_gen" id="gen" class="invisivel filtros" checked>
                    <label for="gen">
                        <header>Fitrar por genero</header>
                    </label>
                    <div class="caixa_filtros_container" id="gen_container">
                        <div class="caixa_filtros">
                            <ul>
                                <label for="genero1"><li><div class="checkbox naoselecionavel"><input class="gen_filtro filtro" type="checkbox" name="1663" id="genero1"><label for="genero1">FPS</label></div></li></label>
                                <label for="genero2"><li><div class="checkbox naoselecionavel"><input class="gen_filtro filtro" type="checkbox" name="176981" id="genero2"><label for="genero2">Battle Royale</label></div></li></label>
                                <label for="genero3"><li><div class="checkbox naoselecionavel"><input class="gen_filtro filtro" type="checkbox" name="1775" id="genero3"><label for="genero3">PVP</label></div></li></label>
                                <label for="genero4"><li><div class="checkbox naoselecionavel"><input class="gen_filtro filtro" type="checkbox" name="1718" id="genero4"><label for="genero4">MOBA</label></div></li></label>
                                <label for="genero5"><li><div class="checkbox naoselecionavel"><input class="gen_filtro filtro" type="checkbox" name="122" id="genero5"><label for="genero5">RPG</label></div></li></label>
                                <label for="genero6"><li><div class="checkbox naoselecionavel"><input class="gen_filtro filtro" type="checkbox" name="21" id="genero6"><label for="genero6">Aventura</label></div></li></label>
                                <label for="genero7"><li><div class="checkbox naoselecionavel"><input class="gen_filtro filtro" type="checkbox" name="599" id="genero7"><label for="genero7">Simulação</label></div></li></label>
                            </ul>
                        </div>
                    </div>
                </li>
                <div class="separator"><svg><g><path d="M0 5 L500 5" style="stroke: rgb(32, 43, 61); stroke-width: 1px;"></path></g></svg></div>
                <li>
                    <input type="checkbox" name="chec_idm" id="idm" class="invisivel filtros">
                    <label for="idm">
                        <header>Fitrar por idioma</header>
                    </label>
                    <div class="caixa_filtros_container" id="idm_container">
                        <div class="caixa_filtros">
                            <ul>
                                <label for="idioma1"><li><div class="checkbox naoselecionavel"><input class="idm_filtro filtro" type="checkbox" name="brazilian" id="idioma1"><label for="idioma1">Português (Brasil)</label></div></li></label>
                                <label for="idioma2"><li><div class="checkbox naoselecionavel"><input class="idm_filtro filtro" type="checkbox" name="schinese" id="idioma2"><label for="idioma2">Chinês simplificado</label></div></li></label>
                                <label for="idioma3"><li><div class="checkbox naoselecionavel"><input class="idm_filtro filtro" type="checkbox" name="tchinese" id="idioma3"><label for="idioma3">Chinês tradicional</label></div></li></label>
                                <label for="idioma4"><li><div class="checkbox naoselecionavel"><input class="idm_filtro filtro" type="checkbox" name="japanese" id="idioma4"><label for="idioma4">Japonês</label></div></li></label>
                                <label for="idioma5"><li><div class="checkbox naoselecionavel"><input class="idm_filtro filtro" type="checkbox" name="koreana" id="idioma5"><label for="idioma5">Coreano</label></div></li></label>
                                <label for="idioma6"><li><div class="checkbox naoselecionavel"><input class="idm_filtro filtro" type="checkbox" name="thai" id="idioma6"><label for="idioma6">Tailandês</label></div></li></label>
                                <label for="idioma7"><li><div class="checkbox naoselecionavel"><input class="idm_filtro filtro" type="checkbox" name="bulgarian" id="idioma7"><label for="idioma7">Búlgaro</label></div></li></label>
                                <label for="idioma8"><li><div class="checkbox naoselecionavel"><input class="idm_filtro filtro" type="checkbox" name="czech" id="idioma8"><label for="idioma8">Tcheco</label></div></li></label>
                                <label for="idioma9"><li><div class="checkbox naoselecionavel"><input class="idm_filtro filtro" type="checkbox" name="danish" id="idioma9"><label for="idioma9">Dinamarquês</label></div></li></label>
                                <label for="idioma10"><li><div class="checkbox naoselecionavel"><input class="idm_filtro filtro" type="checkbox" name="german" id="idioma10"><label for="idioma10">Alemão</label></div></li></label>
                                <label for="idioma11"><li><div class="checkbox naoselecionavel"><input class="idm_filtro filtro" type="checkbox" name="english" id="idioma11"><label for="idioma11">Inglês</label></div></li></label>
                                <label for="idioma12"><li><div class="checkbox naoselecionavel"><input class="idm_filtro filtro" type="checkbox" name="spanish" id="idioma12"><label for="idioma12">Espanhol (Espanha)</label></div></li></label>
                                <label for="idioma13"><li><div class="checkbox naoselecionavel"><input class="idm_filtro filtro" type="checkbox" name="latam" id="idioma13"><label for="idioma13">Espanhol (América Latina)</label></div></li></label>
                                <label for="idioma14"><li><div class="checkbox naoselecionavel"><input class="idm_filtro filtro" type="checkbox" name="greek" id="idioma14"><label for="idioma14">Grego</label></div></li></label>
                                <label for="idioma15"><li><div class="checkbox naoselecionavel"><input class="idm_filtro filtro" type="checkbox" name="french" id="idioma15"><label for="idioma15">Francês</label></div></li></label>
                                <label for="idioma16"><li><div class="checkbox naoselecionavel"><input class="idm_filtro filtro" type="checkbox" name="italian" id="idioma16"><label for="idioma16">Italiano</label></div></li></label>
                            </ul>
                        </div>
                    </div>
                </li>
                <div class="separator"><svg><g><path d="M0 5 L500 5" style="stroke: rgb(32, 43, 61); stroke-width: 1px;"></path></g></svg></div>
                <li>
                    <input type="checkbox" name="chec_os" id="os" class="invisivel filtros">
                    <label for="os">
                        <header>Fitrar por SO</header>
                    </label>
                    <div class="caixa_filtros_container" id="os_container">
                        <div class="caixa_filtros">
                            <ul>
                                <label for="os1"><li><div class="checkbox naoselecionavel"><input class="os_filtro filtro" type="checkbox" name="win" id="os1"><label for="os1">Windows</label></div></li></label>
                                <label for="os2"><li><div class="checkbox naoselecionavel"><input class="os_filtro filtro" type="checkbox" name="mac" id="os2"><label for="os2">macOS</label></div></li></label>
                                <label for="os3"><li><div class="checkbox naoselecionavel"><input class="os_filtro filtro" type="checkbox" name="linux" id="os3"><label for="os3">SteamOS + Linux</label></div></li></label>
                            </ul>
                        </div>
                    </div>
                </li>
                <div class="separator"><svg></svg></div>
                </ul>
        </nav>
    </section>
    <section id="painel">
        <form action="processa_dados.php" method="post">
            <input type="submit" value="ikofbhdiobhjbfgio">
        </form>
        <!-- <div class="jogo">
            <div onclick="redirecionar('https://store.steampowered.com/app/1030300/Hollow_Knight_Silksong/')">
                <img src="./silksong.png" alt="caneta">
                <div>
                    <h1>Hollow Knight: Silksong</h1>
                    <p class="preco_antigo">R$ 46,99</p>
                    <p class="preco_atual">R$ 4,70 <span>90%</span></p>
                    <p class="avaliacao">&#9733;&#9733;&#9733;&#9733;&#9733;</p>
                </div>
            </div>
        </div> -->
    </section>
    <section id="painel_filtro">
    </section>
    <script src="./script.js"></script>
    <script src="./loja.js"></script>
</body>
</html>