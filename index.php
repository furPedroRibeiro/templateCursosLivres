    <?php
        get_header();
    ?>
    <main class="main">
        <div class="defaultContent">
            <h2>Seja bem vindo ao nosso site,</h2>
            <p>os nossos cursos oferecem tudo de bom e de melhor para você que quer ser especialista em determinado assunto da modernidade. Veja abaixo alguns posts sobre nossos principais cursos e propostas, além de conhecer melhor a nossa corporação e como ela trabalha.</p>
            <!-- <button class="btn">
                Curso
            </button> -->
            <div class="img">
            <img src="<?=get_template_directory_uri();?>/assets/imgRetangulo.png" alt="Logo de exemplo" width="350px">
        </div>
        </div>
        <div class="posts">
            <?php
                if(have_posts()){
                    while(have_posts()){
                        the_post();
            ?>
                <h2><?php the_title();?></h2>
                <div class="img">
                    <?php the_post_thumbnail();?>
                </div>
                <p><?php the_excerpt();?></p>
                <a href="<?php the_permalink(); ?>">Leia mais</a>
            <?php
                    }//fim do while
                }//fim do if loop wordpress
            ?>
        </div>
    <footer>

    </footer>
    
    <?php
        get_footer();
    ?>