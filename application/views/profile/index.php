<div class="container">
    <div class="lateral">
        <a href="/profile/view"><div class="foto"></div></a>
        <h4 class="mar-0_5em-bottom"><?php echo ucfirst($user->username); ?></h4>
        <a href="mailto:<?php echo $user->email; ?>"><?php echo $user->email; ?></a>
        <p><a href="#">Pweets: <?php echo count($pweets) ?></a></p>
        <p><a href="#">Seguindo: <?php echo count($followers) ?></a> | <a href="#">Seguidores: <?php echo count($following); ?></a></p>
    </div>
    <div class="twittar">
        <form class="formulario" action="/pweets/newpweet" method="POST">
            <h3 class="mar-off">Pweet</h3>

            <div class="form-inline">
                <div class="form-inline">
                    <textarea class="txt size-10 size-hei-10" id="iptMensagem" name="content" value="" required /></textarea>
                </div>

                <div class="form-inline">
                    <input type="submit" class="btn bg-azul" id="btnEnviar" name="btnEnviar" value="Enviar" />
                </div>
            </div>
            <input type="hidden" name="user_id" value="<?php echo $user->id; ?>" />
            <input type="hidden" name="username" value="<?php echo $user->username; ?>" />
        </form>
    </div>
</div>

<div class="container">
    <div class="timeline">
        <h4 class="txt-center">TIMELINE</h4>

        <?php foreach ($timeline as $content): ?>
            <div class="posts">
                <a href="/profile/view/<?php echo $content['user']->username; ?>"><div class="foto"> </div></a>
                <div class="post">
                    <p>
                        <?php echo $content['content'] ?><br>
                        <i style="color: #666;"><?php echo $content['user']->username; ?></i>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>
