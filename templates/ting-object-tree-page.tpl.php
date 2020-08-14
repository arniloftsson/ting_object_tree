<?php ?>
<div class="frontpage-layout">
    <div class="panel-pane pane-node-content">
        <div class="ting-object-tree-breadcrumb">
            <?php print $breadcrumb; ?> 
        </div>
        <ul class="ting-object-tree-links">
            <?php foreach ($links as $link) : ?>
              <li class="ting-object-tree-link">
                  <?php print $link; ?> 
              </li>

            <?php endforeach; ?>
        </ul>
        <ul class="ting-object-tree">
            <?php foreach ($items as $item) : ?>
              <li class="ting-object-tree-item">
                  <?php print $item; ?> 
              </li>

            <?php endforeach; ?>
        </ul>
    </div>
</div>
