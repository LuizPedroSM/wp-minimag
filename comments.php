<?php 
if (post_password_required()) {
    return;
}
if (have_comments()) {
    foreach ($comments as $comment ) {
        ?>
<div class="comentario panel">
    <div class="comentario_foto img-thumbnail">
        <?php echo get_avatar($comment, 60);?>
    </div>
    <div class="comentario_area">
        <strong><?php comment_author();?></strong> -
        <?php comment_date();?> <br />
        <?php comment_text();?>
    </div>
</div>
<?php 
    }
    the_comments_pagination();
}
comment_form(array(
    'title_reply' =>'Deixe um comentário',
    'comment_field' => 'Comentário:<br/><textarea name="comment" class="form-control"></textarea> <br/>',
    'fields' => array(
        'author' => '<div class="form-group"> <label for="nome">Nome* :</label><input type="text" class="form-control" name="author" placeholder="Digite seu nome" id="nome" /> </div>',
        'email' => '<div class="form-group"> <label for="email">E-mail* :</label><input type="email" class="form-control" name="email" placeholder="Digite seu e-mail" id="email" /> </div>',
        'url' => '<div class="form-group"> <label for="url">Url :</label><input type="text" class="form-control"  name="url" placeholder="Digite seu site" /> </div>',
    ),
    'class_submit' => 'btn btn-primary',
    'label_submit' => 'Envie seu comentário'
));
?>