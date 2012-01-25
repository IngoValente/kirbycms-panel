<?php if(!defined('KIRBY')) die('Direct access is not allowed') ?>
<?php if(!$settings->nocontent): ?>
<?php action::updateContent() ?>
<div class="form">		
  
  <form action="<?php echo showurl('content') ?>" method="post">
    <?php echo form::load($settings->fields); ?>		

    <fieldset class="bottom">
      <div class="buttons">
        <input type="submit" name="update-content" value="<?php echo l::get('content.save') ?>" />
      </div>
    </fieldset>
  </form>

  <div class="pagination">
    <?php if($page->hasPrev()): ?>
    <a class="prev" href="<?php echo $page->prev()->url() ?>/show:content">&lsaquo; <?php echo l::get('content.previous') ?></a>
    <?php endif ?>
  
    <?php if($page->hasNext()): ?>
    <a class="next" href="<?php echo $page->next()->url() ?>/show:content"><?php echo l::get('content.next') ?> &rsaquo;</a>
    <?php endif ?>
  </div>
      
</div>

<?php else: ?>
<div class="form">
  <h3><?php echo l::get('nocontent.title') ?></h3>
  <em class="empty"><?php echo l::get('nocontent.text') ?></em>
</div>
<?php endif ?>