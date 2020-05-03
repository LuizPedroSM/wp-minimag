<form action="<?php site_url();?>" method="get">
    <input type="text" name="s" class="search_input" placeholder="Pesquisa" value="<?php the_search_query();?>" />
    <input type="submit" class="search_submit" value="Pesquisar">
</form>