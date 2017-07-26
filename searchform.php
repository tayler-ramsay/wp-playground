<form role="search" method="get" id="searchform" action=<?php echo home_url('/'); ?>>
<div>
<label for="s"></label>
<input type="text" value="" name="s" id="s" placeholder="<?php the_search_query(); ?>"/>
<input type="hidden" value="1" name="sentence" />
<input type="hidden" value="product" name="post_type" />
<input type="submit" id="searchsubmit" value="Search" />
</div>
</form>
