<?php

?>
<div class="frontpage-layout">
    <div class="panel-pane pane-node-content">
        <ul class="ting-object-tree">
            <?php foreach ($items as $item) : ?>
                <li class="ting-object-tree-item">
                    <?php print $item; ?> 
                </li>

            <?php endforeach; ?>
        </ul>
    </div>
</div>
