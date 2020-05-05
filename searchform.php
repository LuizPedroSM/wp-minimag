<form action="<?php site_url();?>" method="get">
    <input type="text" name="s" class="search_input" placeholder="<?php echo __('Type something', 'minimag');?>"
        value="<?php the_search_query();?>" />
    <input type="submit" class="search_submit" value="<?php echo __('Search', 'minimag');?>">
</form>