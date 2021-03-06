<?php

wp_reset_postdata();
wp_reset_query();

$titulo = get_the_title();
$descricao = get_bloginfo("description");
$url = get_home_url();
$nomeSite = get_bloginfo('name');
$palavraschave = get_field('palavras_chave','option');
$imagem = get_the_post_thumbnail_url();

if(!isset($palavraschave))
    $palavraschave = "";
if(!isset($imagem) || $imagem=="")
    $imagem = get_field('imagem_compartilhamento','option');
$facebook = get_field('facebook', 'option');
$instagram = get_field('instagram', 'option');
$twitter = get_field('twitter', 'option');
$linkdin = get_field('linkdin', 'option');
$youtube = get_field('youtube', 'option');
$tracking = get_field('script_tracking', 'option');
$temAlgum = false;
$socialSchema = "";
if(isset($facebook)){
    $socialSchema = "\"".$facebook."\"";
    $temAlgum = true;
}
if(isset($instagram)){
    if($temAlgum){
        $socialSchema .= ",";
    }
    $socialSchema .= "\"".$instagram."\"";
    $temAlgum = true;
}
if(isset($twitter)){
    if($temAlgum){
        $socialSchema .= ",";
    }
    $socialSchema .= "\"".$twitter."\"";
    $temAlgum = true;
}
if(isset($linkdin)){
    if($temAlgum){
        $socialSchema .= ",";
    }
    $socialSchema .= "\"".$linkdin."\"";
    $temAlgum = true;
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-tit=no"/>
    <title><?php echo $nomeSite;?> - <?php echo $titulo;?></title>
    <meta name="keywords" content="<?php echo $palavraschave;?>" />

    <?php wp_site_icon(); ?>

    <meta name="description" content="<?php echo $descricao;?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="<?php echo $nomeSite;?> - <?php echo $titulo;?>" />
    <meta property="og:site_name" content="<?php echo $nomeSite;?>" />
    <meta property="og:url" content="<?php echo $url;?>" />
    <meta property="og:description" content="<?php echo $descricao;?>" />
    <meta property="og:locale" content="pt_BR" />
    <meta property="og:image" content="<?php echo $imagem;?>"/>
    <meta name="author" content="Lucas Salvino">
    <meta name="format-detection" content="telephone=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="<?php echo bloginfo("template_url");?>/assets/js/soundcloudapi.js?v=1.0"></script>
    <script>
        var radioplayer = new Audio("https://radio.saopaulo01.com.br/8278/stream");
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous"></script>
    <script src="<?php echo bloginfo("template_url");?>/assets/js/main.js?v=1.2"></script>
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;300;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="<?php  echo bloginfo("template_url");?>/assets/css/main.css?v=1.9">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-PVD7YQMXN2"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-PVD7YQMXN2');
    </script>
</head>
<header>
    <div class="d-flex menu-topo">
        <div class="d-flex justify-content-center">
            <a href="<?php echo get_home_url();?>">
                <img class="" src="<?php  echo bloginfo("template_url");?>/assets/imagens/iconvirus.png" alt="Logo 5 na ciencia" id="logo-site">
            </a>
        </div>

        <div class="" id="opcoes-menu-desktop">
            <div class="d-flex conteiner-menu">
                <div class="show-mobile w-100">
                    <div class="d-flex justify-content-between w-100">
                        <div class="d-flex">
                            <a href="<?php echo get_home_url();?>">
                                <img class="" src="<?php  echo bloginfo("template_url");?>/assets/imagens/iconvirus.png" alt="Logo 5 na ciencia" id="logo-site">
                            </a>
                        </div>
                        <div class="d-flex">
                            <div id="close-menu">
                                <img src="<?php  echo bloginfo("template_url");?>/assets/imagens/close.svg" alt="Close menu">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex menu-opcao" id="home">
                    <a href="<?php echo get_home_url();?>">
                        HOME
                    </a>
                </div>
                <div class="d-flex menu-opcao" id="eventos">
                    <a href="<?php echo get_home_url();?>/artigos">
                        ARTIGOS
                    </a>
                </div>
                <div class="d-flex menu-opcao" id="podcast">
                    <a href="<?php echo get_home_url();?>/podcasts">
                        PODCAST
                    </a>
                </div>
                <div class="d-flex menu-opcao" id="contato">
                    <a href="<?php echo get_home_url();?>/contato">
                        CONTATO
                    </a>
                </div>
                <div class="d-flex menu-opcao" id="sobre">
                    <a href="<?php echo get_home_url();?>/sobre">
                        SOBRE
                    </a>
                </div>
                <div class="show-mobile w-100">
                    <div class="d-flex mobile-social">
                        <div class="d-flex social-opcao">
                            <a href="https://soundcloud.com/user-413136801" target="_blank">
                                <img src="<?php  echo bloginfo("template_url");?>/assets/imagens/soundcloud.svg" alt="soundcloud">
                            </a>
                        </div>
                        <div class="d-flex social-opcao">
                            <a href="https://www.instagram.com/5naciencia/" target="_blank">
                                <img src="<?php  echo bloginfo("template_url");?>/assets/imagens/instagram.svg" alt="icone social facebook">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex">
            <div class="d-flex social-opcao">
                <a href="https://soundcloud.com/user-413136801" target="_blank">
                    <img src="<?php  echo bloginfo("template_url");?>/assets/imagens/soundcloud.svg" alt="soundcloud">
                </a>
            </div>
            <div class="d-flex social-opcao">
                <a href="https://www.instagram.com/5naciencia/" target="_blank">
                    <img src="<?php  echo bloginfo("template_url");?>/assets/imagens/instagram.svg" alt="icone social facebook">
                </a>
            </div>
        </div>

        <div class="d-none" id="icone-menu-mobile">
            <div id="btn-mobile">
                <img src="<?php  echo bloginfo("template_url");?>/assets/imagens/menu.svg" alt="Icone Menu">
            </div>
        </div>
    </div>
</header>
<body>
    <div class="fundo-defalt">
