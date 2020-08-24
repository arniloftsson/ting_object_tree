<?php ?>
<div class="ting-object-tree-page">
    <aside class="secondary-content">
        <div class="ting-object-tree-menu">
            <?php print $menu; ?> 
        </div>
    </aside>
    <div class="ting-object-tree-main">
        <div class="ting-object-tree-breadcrumb">
            <?php print $breadcrumb; ?> 
        </div>
        <h2 class="pane-title"><?php print $title; ?> </h2>
<!--        <ul class="ting-object-tree-links">
            <?php foreach ($links as $link) : ?>
              <li class="ting-object-tree-link">
                  <?php print $link; ?> 
              </li>

            <?php endforeach; ?>
        </ul>-->
        <ul class="ting-object-tree">
            <?php foreach ($items as $item) : ?>
              <li class="ting-object-tree-item">
                  <?php print $item; ?> 
              </li>

            <?php endforeach; ?>
        </ul>
    </div>
</div>
