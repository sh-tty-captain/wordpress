<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
  <input type="text" placeholder="Enter key words" value="<?php echo get_search_query() ?>" name="s" id="s" />
  <button type="submit">Search</button>
</form>
