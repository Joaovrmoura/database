<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <!--fim do código-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&family=Roboto+Condensed:ital,wght@1,600&family=Roboto:ital@1&display=swap" rel="stylesheet">
    <title>Portfólio</title>
    <link rel="stylesheet" href="stylesite/style.css">

</head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
<body>
<header>


<div class="interface"><!--interface-->
        
        <div class="logo"><!--logo-->

                <a href="#">
                        <img  src="img/logo07.png" alt="logo" width="115px" >
                </a>

          </div><!--logo-->

<nav class="menu-desktop">
    <ul>
        <li><a href="#">Início</a></li>
        <li><a href="#products">Especialidades</a></li>
        <li><a href="#about">Sobre</a></li>
        <li><a href="#">Tratamentos</a></li>
        <li><a href="#contact">Contato</a></li>
    </ul>
</nav>

<div class="btn-contato">
    <a href="login/cadastro.php">
        <button>Entre em Contato<i class="fa-regular fa-calendar-days"></i>
        </button>
    </a>
</div><!--button-->


</div><!--interface-->
</header>
<main>
<section class="containerproje"><!--topo da página-->
<div class="slide-container active">
    <div class="slide">
        <div class="contentproje">
            <h3>Bela Estética<span>.</span></h3>
            <p>"Bem-vindo à nossa clínica de estética, um refúgio dedicado à sua beleza e bem-estar.
                Aqui, combinamos expertise e cuidado para proporcionar tratamentos personalizados que
                realçam a sua beleza natural.</p>
            <a href="https://ftd.com.br/" class="bntproj">Saiba mais</a>
        </div>
    </div>
</div>

<div class="slide-container">
    <div class="slide">
        <div class="contentproje">
            <h3>Conheça nossos tratamentos<span>.</span></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit aliquid assumenda eaque, inventore
                pariatur molestias hic, aspernatur nihil ipsam eius magni incidunt? Incidunt eveniet non magnam
                reprehenderit beatae doloribus soluta.</p>
            <a href="https://ftd.com.br/" class="bntproj">Saiba mais</a>
        </div>
    </div>
</div>

<div class="slide-container">
    <div class="slide">
        <div class="contentproje">
            <h3>Agende sua avaliação<span>.</span></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi eos, qui obcaecati nulla
                aliquid non iure autem, esse aliquam itaque rerum nostrum
                repudiandae! At eligendi quas provident omnis voluptatem. Dignissimos..</p>
            <a href="https://www.escolasconectadas.org.br/cursos" class="bntproj">Saiba mais</a>
        </div>
    </div>
</div>


<div id="prev" onclick="prev()">
    < </div>
        <div id="next" onclick="next()"> > </div>
</section><!--topo da página-->
<script src="interacao/script.js"></script>

</section>

</main>








<!--Index -------->
<!--Index -------->
<!--Index -------->
<!--Index --------><!--Index --------><!--Index --------><!--Index -------->

<section class="about " id="about">

<h1 class="sobre " > <span> sobre </span> Nós </h1>

<div class="row">

<div class="image">
<a class= "clickaq" data-target="#share">
<img src="img/velhaface.jpg" alt="">
</a>
</div>


<div class="content">
<h3>Oque faz nossa clínica especial?</h3>
<p>Fundada por duas amigas apaixonadas por saúde e beleza, a Clínica Encanto Feminino começou em um pequeno 
    espaço, onde buscavam oferecer algo único. Inspiradas em viagens ao redor do mundo, desenvolveram o
    "Ritual de Renovação", tornando-se rapidamente um refúgio para mulheres em busca de autoestima e equilíbrio. 
     Hoje, a clínica é reconhecida não apenas pelos tratamentos inovadores, mas pela atmosfera 
     acolhedora que oferece às mulheres que buscam uma pausa revitalizante
     em suas vidas agitadas.</p>
    
     <a href="#blogs" class="btn-about">Agendar</a>
    
    
</div>

</div>

</section>




<!-- about section ends -->

<!-- Pesquisa dentro do site -->

<section class="menu" id="menu">

<h1 class="sobre"> oque está <span>procurando?</span> </h1>

<div class="box-container">

<div class="box">
<a class="scroll-trigger" data-target="#blogs" >
<img src="img/rolarpage.png" alt="">
</a>
<h3>Estética facial</h3>
</div>

<div class="box">
<img src="img/rolarpage4.png" alt="">
<h3>Cirurgias</h3>
</div>

<div class="box">
<img src="img/rolarpage3.png" alt="footer.php">
<h3>Estética corporal</h3>
</div>

</div>

</section>
<!-- fim da seção pesquisar dentro do site -->










<!-- inicio da section descontos -->

<section class="products" id="products">

<h1 class="sobre"> Nossas <span>Especialidades</span> </h1>

<div class="box-container">

<div class="box">

<div class="image">
    <a href="admin/tratamentos/tratamentos.php">
        <img src="img/sobrancelhaosd.jpg" alt="">
    </a>
</div>

<div class="content">
  
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
    </div>
    <h3>Micro-pigmentação</h3><br>
    <div class="price">12x $9.99 <span>$20.99</span></div>
</div>
</div>


<div class="box">

<div class="image">
    <img src="img/faceee.jpg" alt="">
</div>
<div class="content">
    
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
    </div>
    <h3>botox</h3><br>
    <div class="price">12x $15.99 <span>$20.99</span></div>
</div>
</div>


<div class="box">
  
<div class="image">
    <img src="img/antntes e depois.jpg" alt="">
</div>

<div class="content">
    
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
    </div>
    <h3>Remoção de manchas</h3><br>
    <div class="price">12x $29.99 <span>$20.99</span></div>
</div>
</div>



</div>
</section>

<!--final da section descontos -->













<!--inicio da section tratamentos-->

<section class="blogs" id="blogs">

<h1 class="sobre">Rejuvenscimento<span>Facial</span> </h1>

<div class="box-container">

<div class="box">
<div class="image">
    <img src="img/facialllk.jpg" alt="">
</div>
<div class="content">
    <a href="#" class="title">Ácido Hialurônico</a>
    <span>ola mundo / horários</span>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dicta.</p>
    <a href="#" class="btn">Agendar/Whatszap</a>
</div>
</div>

<div class="box">
<div class="image">
    <img src="img/botox.jpg" alt="">
</div>
<div class="content">
    <a href="#" class="title">Botox</a>
    <span>ola mundo / horários</span>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dicta.</p>
    <a href="#" class="btn">Agendar/Whatszap</a>
</div>
</div>

<div class="box">
<div class="image">
    <img src="img/faciaalla.jpg" alt="">
</div>
<div class="content">
    <a href="#" class="title">Microagulhamento</a>
    <span>ola mundo / horários</span>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dicta.</p>
    <a href="#" class="btn">Agendar/Whatszap</a>
</div>
</div>

</div>

</section>
<!--final da sectio tratamentyos-->











<!--sobre e imagens grandes section-->
<section class="about" id="about">

<h1 class="sobre" > <span>Solicite </span> Agora </h1>

<div class="row">

<div class="image">
<a href="#contact">
<img src="img/grupo-de-mulheres-tirando-uma-selfie-juntas.jpg" alt="">
</a>

</div>

<div class="content">
<h3>Avaliação Gratuita</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus qui ea ullam, enim tempora ipsum fuga alias quae ratione a officiis id temporibus autem? Quod nemo facilis cupiditate. Ex, vel?</p>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit amet enim quod veritatis, nihil voluptas culpa! Neque consectetur obcaecati sapiente?</p>
<a href="#contact" class="btn-about">Agendar</a>
</div>

</div>

</section>

<!--sobre e imagens grandes section-->








<!--inbicio da sectio tratamentos-->

<section class="blogs" id="blogs">

<h1 class="sobre">Redução de <span>gordura</span> </h1>

<div class="box-container">

<div class="box">
<div class="image">
    <img src="img/lipo33.jpg" alt="">
</div>
<div class="content">
    <a href="#" class="title">Ácido Hialurônico</a>
    <span>ola mundo / horários</span>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dicta.</p>
    <a href="#" class="btn">Agendar/Whatszap</a>
</div>
</div>

<div class="box">
<div class="image">
    <img src="img/lipo32.jpg" alt="">
</div>
<div class="content">
    <a href="#" class="title">Lipoaspiração a laser</a>
    <span>ola mundo / horários</span>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dicta.</p>
    <a href="#" class="btn">Agendar/Whatszap</a>
</div>
</div>

<div class="box">
<div class="image">
    <img src="img/lipo222.jpg" alt="">
</div>
<div class="content">
    <a href="#" class="title">Microagulhamento</a>
    <span>ola mundo / horários</span>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dicta.</p>
    <a href="#" class="btn">Agendar/Whatszap</a>
</div>
</div>

</div>

</section>
<!--final da sectio tratamentyos-->




<!--inicio da sectio tratamentyos-->
<section class="blogs" id="blogs">

<h1 class="sobre"> Rejuvenescimento<span>Facial</span> </h1>

<div class="box-container">

<div class="box">
<div class="image">
    <img src="img/face21.jpg" alt="">
</div>
<div class="content">
    <a href="#" class="title">Ácido Hialurônico</a>
    <span>ola mundo / horários</span>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dicta.</p>
    <a href="#" class="btn">Agendar/Whatszap</a>
</div>
</div>

<div class="box">
<div class="image">
    <img src="img/botox.jpg" alt="">
</div>
<div class="content">
    <a href="#" class="title">Botox</a>
    <span>ola mundo / horários</span>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dicta.</p>
    <a href="#" class="btn">Agendar/Whatszap</a>
</div>
</div>

<div class="box">
<div class="image">
    <img src="img/faciaalla.jpg" alt="">
</div>
<div class="content">
    <a href="#" class="title">Microagulhamento</a>
    <span>ola mundo / horários</span>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dicta.</p>
    <a href="#" class="btn">Agendar/Whatszap</a>
</div>
</div>

</div>

</section>
<!--final da sectio tratamentos-->





</body>
</html>

<?php

include("footer.php")

?>
