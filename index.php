<?php get_header();?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 maincontent">
                <div class="postscontent">
                    <?php if(have_posts()): ?>
                    <?php 
                        while(have_posts()){
                            the_post();
                            get_template_part('template-parts/post');
                        }
                    ?>
                </div>
                <div class="pag">
                    <?php 
                    // global $wp_query;
                    // echo paginate_links(array(
                    //     'current' => max(1, get_query_var('paged')),
                    //     'total' => $wp_query->max_num_pages,
                    //     'show_all' => false,
                    //     'end_size' => 2,
                    //     'mid_size' => 2,
                    //     'prev_next' => true,
                    //     'prev_text' => '«',
                    //     'next_text' => '»',
                    //     'before_page_number' => '[',
                    //     'after_page_number' => ']',
                    // ));
                    ?>
                    <!-- <div class="previous_pag"> <?php previous_posts_link('< Anterior')?> </div>
                    <div class="next_pag"> <?php next_posts_link('Proxima >')?> </div> -->
                    <div class="btn btn-primary loadmoreButton">Carregar Mais</div>
                    <div style="clear:both"></div>
                </div>
                <?php endif;?>
            </div>
            <?php get_sidebar();?>
        </div>
    </div>
</section>
<?php get_footer();?>