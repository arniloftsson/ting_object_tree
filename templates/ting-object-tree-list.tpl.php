<?php ?>
<?php if(isset($title)) : ?>
<div class="ting-object-tree-title">
    
    <h2 class="pane-title"><?php print $title; ?> </h2>

</div>
<?php endif ?>
<ul class="ting-object-tree">
    <?php foreach ($items as $item) : ?>
      <li class="ting-object-tree-item">
          <?php print $item; ?> 
      </li>

    <?php endforeach; ?>
</ul>
<div class="ting-object-tree-pager">
    <?php print $pager; ?> 
</div> 