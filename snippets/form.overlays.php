<?php if(!defined('KIRBY')) die('Direct access is not allowed') ?>

<div id="form-overlay-link" class="form-overlay overlay modal" data-tag="link">
  <form method="post">
    <fieldset>
      <h3><?php echo l::get('form.overlay.link.title') ?></h3>

      <div class="field">
        <label><?php echo l::get('form.overlay.link.link') ?></label>
        <input type="url" name="link" class="input" placeholder="http://" />      
      </div>  
      <div class="field">
        <label><?php echo l::get('form.overlay.link.text') ?></label>
        <input type="text" name="text" class="input" />      
      </div>  
      <div class="buttons">
        <input type="submit" name="ok" value="<?php echo l::get('form.overlay.link.button') ?>" />
        <input class="cancel" type="submit" value="<?php echo l::get('cancel') ?>" />
      </div>
    </fieldset>
  </form>
</div>

<div id="form-overlay-email" class="form-overlay overlay modal" data-tag="email">
  <form method="post">
    <fieldset>
      <h3><?php echo l::get('form.overlay.email.title') ?></h3>

      <div class="field">
        <label><?php echo l::get('form.overlay.email.link') ?></label>
        <input type="email" name="link" class="input" />      
      </div>  
      <div class="field">
        <label><?php echo l::get('form.overlay.email.text') ?></label>
        <input type="text" name="text" class="input" />      
      </div>  
      <div class="buttons">
        <input type="submit" name="ok" value="<?php echo l::get('form.overlay.email.button') ?>" />
        <input class="cancel" type="submit" value="<?php echo l::get('cancel') ?>" />
      </div>
    </fieldset>
  </form>
</div>

<div id="form-overlay-image" class="form-overlay overlay modal" data-tag="image">
  <form method="post">
    <fieldset>
      <h3><?php echo l::get('form.overlay.image.title') ?></h3>
      <p><?php echo l::get('form.overlay.image.help') ?></p>
      <div class="field">
        <label><?php echo l::get('form.overlay.image.name') ?></label>
        <select name="src">
          <?php foreach($page->images() AS $image): ?>
            <option value="<?php echo html($image->filename()) ?>"><?php echo html($image->filename()) ?></option>
          <?php endforeach ?>
        </select>
      </div>  
      <div class="field">
        <label><?php echo l::get('form.overlay.image.text') ?></label>
        <input type="text" name="text" class="input" />      
      </div>  
      <div class="buttons">
        <input type="submit" name="ok" value="<?php echo l::get('form.overlay.image.button') ?>" />
        <input class="cancel" type="submit" value="<?php echo l::get('cancel') ?>" />
      </div>
    </fieldset>
  </form>
</div>