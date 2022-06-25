<?php
sleep(1);
$valorSeleccion = $_REQUEST['comida'];

if ($valorSeleccion == "Desayunos") { ?>
    <div class="recipe first">
        <img src="img/comidas/desayuno_1.jpeg" alt="Desayuno">
        <div class="wrapper">
            <div class="recipe-header">
                <span>Desayuno Especial</span>
                <div class="rating">4.8</div>
            </div>
            <div class="recipe-info">
                <span>Tortilla de huevos con tocinetas</span>
                <div class="time">15 min</div>
            </div>
        </div>
    </div>
    <div class="recipe first">
        <img src="img/comidas/desayuno_2.jpeg" alt="Desayuno">
        <div class="wrapper">
            <div class="recipe-header">
                <span>Cereal mini</span>
                <div class="rating">4.3</div>
            </div>
            <div class="recipe-info">
                <span>Rico desayuno</span>
                <div class="time">15 min</div>
            </div>
        </div>
    </div>
    <div class="recipe first">
        <img src="img/comidas/desayuno_3.jpeg" alt="Desayuno">
        <div class="wrapper">
            <div class="recipe-header">
                <span>Huevos Alemanes</span>
                <div class="rating">4.5</div>
            </div>
            <div class="recipe-info">
                <span>huevos con toque Aleman</span>
                <div class="time">15 min</div>
            </div>
        </div>
    </div>
    <div class="recipe first">
        <img src="img/comidas/desayuno_4.jpeg" alt="Desayuno">
        <div class="wrapper">
            <div class="recipe-header">
                <span>Desayuno Grupal</span>
                <div class="rating">5.0</div>
            </div>
            <div class="recipe-info">
                <span>Todo incluido</span>
                <div class="time">15 min</div>
            </div>
        </div>
    </div>
<?php } elseif ($valorSeleccion == "Almuerzos") { ?>
    <div class="recipe first">
        <img src="img/comidas/comida_1.jpeg" alt="Almuerzos">
        <div class="wrapper">
            <div class="recipe-header">
                <span>Arroz Mexico Full</span>
                <div class="rating">5.0</div>
            </div>
            <div class="recipe-info">
                <span>Arroz a la Abuela</span>
                <div class="time">20 min</div>
            </div>
        </div>
    </div>
    <div class="recipe first">
        <img src="img/comidas/comida_2.jpeg" alt="Almuerzos">
        <div class="wrapper">
            <div class="recipe-header">
                <span>Taco DC.</span>
                <div class="rating">5.0</div>
            </div>
            <div class="recipe-info">
                <span>Especial de la Casa</span>
                <div class="time">17 min</div>
            </div>
        </div>
    </div>
    <div class="recipe first">
        <img src="img/comidas/comida_3.jpeg" alt="Almuerzos">
        <div class="wrapper">
            <div class="recipe-header">
                <span>Los tortolitos Enamorados</span>
                <div class="rating">5.0</div>
            </div>
            <div class="recipe-info">
                <span>Salad with eggs and tomates</span>
                <div class="time">10 min</div>
            </div>
        </div>
    </div>
<?php } elseif ($valorSeleccion == "Cenas") { ?>
    <div class="recipe first">
        <img src="img/comidas/comida_0.jpeg" alt="Cena">
        <div class="wrapper">
            <div class="recipe-header">
                <span>Cachapa Venezolana</span>
                <div class="rating">4.8</div>
            </div>
            <div class="recipe-info">
                <span>Plato tipito de Venezuela</span>
                <div class="time">10 min</div>
            </div>
        </div>
    </div>
    <div class="recipe first">
        <img src="img/comidas/comida_4.jpeg" alt="Cena">
        <div class="wrapper">
            <div class="recipe-header">
                <span>Trozos de Amor</span>
                <div class="rating">4.8</div>
            </div>
            <div class="recipe-info">
                <span>Especial de la Casa</span>
                <div class="time">15 min</div>
            </div>
        </div>
    </div>
<?php } elseif ($valorSeleccion == "Pizzas") { ?>
    <div class="recipe first" style="background-image: url('img/comidas/pizza_1.webp')">
        <div class="wrapper">
            <div class="recipe-header">
                <span>Pizza Extra Full</span>
                <div class="rating">5.0</div>
            </div>
            <div class="recipe-info">
                <span>Favorita de la Casa</span>
                <div class="time">20 min</div>
            </div>
        </div>
    </div>
    <div class="recipe first">
        <img src="img/comidas/pizza_2.jpg" alt="pizza">
        <div class="wrapper">
            <div class="recipe-header">
                <span>Pizza para parejas</span>
                <div class="rating">4.0</div>
            </div>
            <div class="recipe-info">
                <span>Salad with eggs and tomates</span>
                <div class="time">14 min</div>
            </div>
        </div>
    </div>
<?php } elseif ($valorSeleccion == "Comidas") { ?>
    <div class="recipe first">
        <img src="img/comidas/comida_china_1.jpeg" alt="comida">
        <div class="wrapper">
            <div class="recipe-header">
                <span>WANTON Premium</span>
                <div class="rating">4.8</div>
            </div>
            <div class="recipe-info">
                <span>Favorita</span>
                <div class="time">15 min</div>
            </div>
        </div>
    </div>
    <div class="recipe first">
        <img src="img/comidas/comida_china_2.jpeg" alt="comida">
        <div class="wrapper">
            <div class="recipe-header">
                <span>YOUTIAO Premium</span>
                <div class="rating">4.8</div>
            </div>
            <div class="recipe-info">
                <span>Favorita</span>
                <div class="time">15 min</div>
            </div>
        </div>
    </div>
    <div class="recipe first">
        <img src="img/comidas/comida_china_3.jpeg" alt="comida">
        <div class="wrapper">
            <div class="recipe-header">
                <span>SOPA DE WONTON Premium</span>
                <div class="rating">4.8</div>
            </div>
            <div class="recipe-info">
                <span>Favorita</span>
                <div class="time">15 min</div>
            </div>
        </div>
    </div>
    <div class="recipe first">
        <img src="img/comidas/comida_china_4.jpeg" alt="comida">
        <div class="wrapper">
            <div class="recipe-header">
                <span>POLLO GONG BAO Premium</span>
                <div class="rating">4.8</div>
            </div>
            <div class="recipe-info">
                <span>Favorita</span>
                <div class="time">15 min</div>
            </div>
        </div>
    </div>
    <div class="recipe first">
        <img src="img/comidas/comida_china_5.webp" alt="comida">
        <div class="wrapper">
            <div class="recipe-header">
                <span>CHOP SUEY Premium </span>
                <div class="rating">5.0</div>
            </div>
            <div class="recipe-info">
                <span>Favorita</span>
                <div class="time">15 min</div>
            </div>
        </div>
    </div>
    <div class="recipe first">
        <img src="img/comidas/comida_china_6.jpeg" alt="comida">
        <div class="wrapper">
            <div class="recipe-header">
                <span>HUO GUO Especial</span>
                <div class="rating">4.8</div>
            </div>
            <div class="recipe-info">
                <span>Favorita</span>
                <div class="time">15 min</div>
            </div>
        </div>
    </div>
    <div class="recipe first">
        <img src="img/comidas/comida_china_7.jpeg" alt="comida">
        <div class="wrapper">
            <div class="recipe-header">
                <span>JIAOZI Premium</span>
                <div class="rating">4.8</div>
            </div>
            <div class="recipe-info">
                <span>Favorita</span>
                <div class="time">15 min</div>
            </div>
        </div>
    </div>
    <div class="recipe first">
        <img src="img/comidas/comida_china_8.jpeg" alt="comida">
        <div class="wrapper">
            <div class="recipe-header">
                <span>CHOW MEIN Premium</span>
                <div class="rating">4.8</div>
            </div>
            <div class="recipe-info">
                <span>Favorita</span>
                <div class="time">15 min</div>
            </div>
        </div>
    </div>
    <div class="recipe first">
        <img src="img/comidas/comida_china_9.jpeg" alt="comida">
        <div class="wrapper">
            <div class="recipe-header">
                <span>HUO GUO O HOT POT Premium</span>
                <div class="rating">4.8</div>
            </div>
            <div class="recipe-info">
                <span>Favorita</span>
                <div class="time">15 min</div>
            </div>
        </div>
    </div>
<?php } else { //Decision: Hamburguesas ?>
    <div class="recipe first">
        <img src="img/comidas/hamburguesa_1.jpeg" alt="Hamburguesa">
        <div class="wrapper">
            <div class="recipe-header">

                <span>Hamburguesa Premium</span>
                <div class="rating">4.8</div>
            </div>
            <div class="recipe-info">
                <span>Favorita</span>
                <div class="time">15 min</div>
            </div>
        </div>
    </div>
    <div class="recipe first">
        <div class="wrapper">
            <div class="recipe-header">
                <span>Huevos a la Abela Premium</span>
                <div class="rating">4.8</div>
            </div>
            <div class="recipe-info">
                <span>Estilo Colombiano</span>
                <div class="time">15 min</div>
            </div>
        </div>
    </div>
    <div class="recipe first" style="background-image: url('img/comidas/hamburguesa_1.jpeg')">
        <div class="wrapper">
            <div class="recipe-header">
                <span>Hamburguesa Especial</span>
                <div class="rating">4.2</div>
            </div>
            <div class="recipe-info">
                <span>Especial con tocinetas</span>
                <div class="time">15 min</div>
            </div>
        </div>
    </div>
<?php } ?>