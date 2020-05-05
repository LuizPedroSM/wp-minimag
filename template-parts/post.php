<article <?php post_class();?>>
    <a href="<?php the_permalink()?>">
        <div class="post_item">
            <div class="post_comment_area">
                <?php comments_number('0', '1', '%');?>
            </div>
            <div class="post_info">
                <?php 
                if(get_post_format() == 'video'){
                    $content = apply_filters('the_content', get_the_content());
                    $video = get_media_embedded_in_content($content, array('iframe', 'embed', 'object', 'video'));
                    if ($video) {
                        ?>
                <div class="post_video">
                    <?php 
                        echo $video[0];
                        ?>
                </div>
                <?php 
                    }
                } elseif(get_post_format() == 'audio'){
                    $content = apply_filters('the_content', get_the_content());
                    $audio = get_media_embedded_in_content($content, array('iframe', 'audio'));
                    if ($audio) {
                        ?>
                <div class="post_audio">
                    <?php 
                        echo $audio[0];
                        ?>
                </div>
                <?php 
                    }
                } elseif(has_post_thumbnail()){
                    the_post_thumbnail('medium', array( 'class' => 'post_thumb' ));
                }
                ?>
                <div class="post_date">
                    <?php echo get_the_date();?>
                </div>
                <div class="post_title">
                    <?php the_title();?>
                </div>
                <div class="post_excerpt">
                    <?php the_excerpt();?>
                </div>
            </div>
        </div>
    </a>
</article>