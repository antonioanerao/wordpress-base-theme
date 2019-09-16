<style>
    /* enable absolute positioning */
    .inner-addon {
        position: relative;
    }

    /* style icon */
    .inner-addon .fa {
        position: absolute;
        padding: 0px;
        pointer-events: none;
    }

    /* align icon */
    .left-addon .fa  { left:  0px;}
    .right-addon .fa { right: 0px;}

    /* add padding  */
    .left-addon input  { padding-left:  30px; }
    .right-addon input { padding-right: 30px; }
</style>
<div class="block">
    <div class="block-inner">

        <form method="get" id="searchform" action="<?php echo esc_url(home_url('/')) ?>">
            <div class="inner-addon right-addon">
                <input value="<?php echo get_search_query(); ?>" name="s" id="s" type="text" class="form-control input-lg"
                       placeholder="Busque um post ou notícia "/>
            </div>
        </form>
    </div>
</div>