<?php

/**
 * Modelo de página do site.
 * Copie este modelo para gerar novas páginas para o site.
 */

/* Carrega as configurações da página */
require '_config.php';

/* Configura esta página */

// Define o <title></title> desta página.
// Deixe vazio para a 'index'.
$T['pageTitle'] = 'Sobre nós';

// Define as folhas de estilo desta página.
// Deixe vazio para não usar CSS adicional nesta página.
$T['pageCSS'] = '/css/sobre.css';

// Define o JavaScript desta página.
// Deixe vazio para não usar JavaScript adicional nesta página.
$T['pageJS'] = '';

/* Aqui entram todos os seus códigos PHP desta página */

/* Aqui terminam todos os seus códigos PHP desta página */

/* Carrega o header e o nav da página */
require '_header.php';

?>

            <article>

                <h2>Quem somos?</h2>
                <p>A Eminent é sua mais nova loja de roupa.Criada por dois grandes amigos, a Eminent chegou para lhe apresentar a nova moda.
                
                </p>
                <picture>
                    <img class="flush" src="/img/logo.jpg" alt="Imagem aleatória">
                </picture>
                <p><a href="/">Link de teste</a></p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium ut ex voluptatibus, quibusdam,
                    consectetur neque enim iure aliquid cum dolore alias error facere deserunt quos itaque dolorem
                    inventore officiis fugit.</p>

            </article>

            <aside>

                <h3>Explore nosso site</h3>
                <p>Temos o mundo da moda para lhe apresentar.</p>

            </aside>

<?php

require '_footer.php';