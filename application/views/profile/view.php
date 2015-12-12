<div class="container">
    <div class="lateral-view">
        <div class="foto"></div>
        <h4 class="mar-0_5em-bottom"><?php echo ucfirst($user->username); ?></h4>
        <a href="mailto:<?php echo $user->email; ?>"><?php echo $user->email; ?></a>
        <p><a href="#">Pweets: <?php echo count($pweets) ?></a></p>
        <p><a href="#">Seguindo: <?php echo count($followers) ?></a> | <a href="#">Seguidores: <?php echo count($following); ?></a></p>
        <p><b>About:</b> <a href="#"><?php echo $user->about; ?></a></p>
    </div>
</div>

<hr />

<div class="container">
    <div class="timeline">
        <h4 class="txt-center">MEUS PWITES</h4>

        <?php foreach ($pweets as $content): ?>
            <div class="posts">
                <div class="foto"> </div>
                <div class="post">
                    <p>
                        <?php echo $content['content'] ?><br>
                        <i style="color: #666;"><?php echo $content['username']; ?></i>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>
