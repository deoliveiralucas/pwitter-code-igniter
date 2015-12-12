<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>
<!-->
<html class="no-js" lang="pt-BR">
<!--<![endif]-->
<head>
    <title>Pwitter</title>
    <base href="">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Cache-Control" content="no-cache, no-store">
    <meta http-equiv="Pragma" content="no-cache, no-store">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="/static/css/css-base.css" media="screen, print" />
    <link rel="stylesheet" type="text/css" href="/static/css/css-layout.css" media="screen, print" />
    <link rel="stylesheet" type="text/css" href="/static/css/css-fontes.css" media="screen, print" />
</head>

<body rel="home">

    <div class="topo">
        <div class="container">
            <a href="/" class="font-black font-size-2em p-off">Pweeter</a>

            <?php if (! isset($removeTopo)) { ?>
                <a href="../../authentication/logout" class="right mar-1em-top sair"> Sair</a>
                <a class="right mar-1em-top" style="padding-right: 1em;">Meus Dados </a>
            <?php } else { ?>
                <p class="right" style="margin-top: 0.5em;"><?= anchor('profile/create','Criar Usuário'); ?></p>
            <?php } ?>
        </div>
    </div>
