
<form class="form-inline my-2 my-lg-0" role="search" method="get"  action="<?php echo esc_url( home_url( '/' ) ); ?>">


      <div class="input-group searchBtn">
         <i class="fa fa-search text-danger " 
                    type="submit" 
                    value="<?php echo esc_attr_x( 'Search', 'submit i', 'radiate' ); ?>">
        </i>        
         <input class="form-control "
                 type="search"
                 placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'radiate' ); ?>" 
                 value="<?php echo esc_attr( get_search_query() ); ?>" 
                 name="s" 
                 aria-label="Search"
                  required
        >
      </div>
    </div>


</form>