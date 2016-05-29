<form role="form" method="get" id="searchform" class="search-form" action="<?php echo home_url( '/' ); ?>" >
    <input type="text" value="" name="s" id="s" class="form-control search-box" placeholder="<?php esc_html_e( 'Blog Search', 'bloga' ); ?>"
           autocomplete="off" />
    <button class="blog-search-button"><i class="fa fa-search"></i></button>
</form>