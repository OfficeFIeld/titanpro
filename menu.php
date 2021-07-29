<nav class="menu main-menu head-item">
	<ul id="menu-menu-main-header" class="sm sm-clean">

            <li id="menu-item-1542" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1542"><a href="javascript:boid(0)">Home</a></li>
            <li id="menu-item-1542" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1542"><a href="javascript:boid(0)">Recently Added</a></li>
            <li id="menu-item-57" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-has-children menu-item-57">
                  <a href="javascript:void(0)">Categories</a>
                  <ul class="sub-menu">
                  	<?php foreach($cat as $category) { ?>
                  			<li id="menu-item-896" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-896"><a href="javascript:void(0)"><?= $category ?></a></li>
              		<?php } ?>
                  	}
                  </ul>
               </li>
            <li id="menu-item-1542" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1542"><a href="javascript:boid(0)">Shows</a></li>
            <li id="menu-item-1542" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1542"><a href="javascript:boid(0)">People</a></li>
            <li id="menu-item-1542" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1542"><a href="javascript:boid(0)">Contact</a></li>
</ul>
            <div class="menu-mobile-add"></div>
         </nav>