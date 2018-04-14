<!DOCTYPE html>
<html lang="pt-br">
<!--head-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ItaSite. - www.itasite.com.br">
    <title>Instituto Bruno Almeida | Saiba como o coaching pode transformar sua vida!</title>
    
    <!-- core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet"> -->
    <link href="<?php echo base_url(); ?>assets/css/font-awesome/web-fonts-with-css/css/fontawesome-all.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/images/ico/apple-touch-icon-57-precomposed.png">
    <style>
        .iframe-rwd  {position: relative;padding-bottom:300px;padding-top: 30px;height: 0;overflow: hidden;}
        .iframe-rwd iframe {position: absolute;top: 0;left: 0;width: 100%;height:350px;}
    </style>  
</head>
<!--/head-->
<div class="modal fade" id="modalLogin">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Área de acesso restrita</h4>
            </div>
            <div class="modal-body modal-form">
                <form id="form-login" class="active" action="<?php echo base_url(); ?>index.php/site/login" method="POST">
                    <label>Email</label>
                    <input class="form-control email" type="text" name="login-email" placeholder="email@email.com">
                    <label>Senha</label>
                    <input class="form-control" type="password" name="login-senha" placeholder="********">
                    <span>Não tem login? Cadastre-se <a href="#" class="selector-cadastro">aqui</a></span>
                </form>
                <form id="form-cadastro" class="" action="<?php echo base_url(); ?>index.php/site/cadastro" method="POST" style="display: none; opacity: 0;">
                    <label>Nome *</label>
                    <input type="text" name="cadastro-nome" class="form-control">
                    <label>Email *</label>
                    <input type="text" name="cadastro-email" class="form-control email">
                    <label>Senha *</label>
                    <input type="password" name="cadastro-senha" class="form-control">
                    <label>Repita a senha *</label>
                    <input type="password" name="cadastro-senha-confirm" class="form-control">
                    <span>Já possui cadastro? Clique <a href="#" class="selector-login">aqui</a></span>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-success btn-login-cadastro btn-login">Login</button>
            </div>
        </div>
    </div>
</div>

<!--body-->
<body class="homepage" id="Principal">
    <div class="loader hidden"></div>

    <header id="header">        
        <!--/.nav-bar-->
        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/logo2.png" class="selector-img-logo" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li>
                            <!-- Split button -->
                            <div class="btn-group">
                                <a href="<?php echo base_url(); ?>" class="btn btn-default dropdown-toggle <?php echo $botao == 'home' ? 'btn-selecionado' : 'btn-deselecionado' ?> btn-padrao">Instituto Bruno Almeida</a>
                                <button type="button" class="btn btn-default dropdown-toggle btn-dropdown-lateral btn-reset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url(); ?>#SuperandoDesafios">Superando Desafios</a></li>
                                    <li><a href="<?php echo base_url(); ?>#Coaching">Coaching</a></li>
                                    <li><a href="<?php echo base_url(); ?>#Depoimentos">Depoimentos</a></li>
                                    <li><a href="<?php echo base_url(); ?>#SaiuMidia">Saiu na Mídia</a></li>
                                    <li><a href="#Clientes">Quem já Contratou</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?php echo base_url(); ?>#Contatos">Contatos</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="<?php echo base_url(); ?>index.php/site/cursos" class="<?php echo $botao == 'cursos' ? 'btn-selecionado' : 'btn-deselecionado' ?> btn-padrao">Cursos</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/site/solucoes" class="<?php echo $botao == 'solucoes' ? 'btn-selecionado' : 'btn-deselecionado' ?> btn-padrao">Soluções</a></li>
                        <!-- <li class="active"><a href="#Principal">Principal</a></li> -->
                        <!-- <li><a href="#SuperandoDesafios">Superando Desafios</a></li> -->
                        <!-- <li><a href="#Coaching">Coaching</a></li> -->
                        <!-- <li><a href="#Certificados">Certificados</a></li> -->
                        <!-- <li><a href="#Depoimentos">Depoimentos</a></li> -->
                        <!-- <li><a href="#SaiuMidia">Saiu na Mídia</a></li> -->
                        <!-- <li><a href="#Clientes">Quem já Contratou</a></li> -->
                        <!-- <li><a href="#Contatos">Contatos</a></li> -->
                        <?php if (!empty($this->session->userdata('usuario')['isLogado']) && $this->session->userdata('usuario')['isLogado']): ?>
                            <li><a id="btn-material" class="btn btn-default <?php echo $botao == 'material' ? 'btn-selecionado-white' : '' ?> selector-btns" href="<?php echo base_url('index.php/site/material'); ?>">Ver material</a></li>
                            <li><a id="btn-logout" class="btn btn-danger selector-btns" href="<?php echo base_url('index.php/site/logout'); ?>">Logout</a></li>
                        <?php else: ?>               
                            <li><a id="btn-login" class="btn btn-success selector-btns" data-toggle="modal" href='#modalLogin'>Login</a></li>
                        <?php endif ?>  
                    </ul>
                </div>
            </div>
        </nav>      
    </header>   