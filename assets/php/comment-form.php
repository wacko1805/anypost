<div class="comment-header">
<h2>Comments:</h2>
</div>
<form  action="comment.php"   id="form" accept-charset="utf-8"  method="post">
        <input style="display:none;" type="text" name="post_id" value="<?php echo $id;?>">
      <input type="text"  maxlength="500"  type="text" id="comment" name="comment"  placeholder="Comment" required autocomplete="off" > <br>
      <input style="display:none;" type="text" name="date" value="<?= $date ?>">
      <input style="display:none;" type="text" name="displaydate" value="<?= $displaydate ?> <?= $timezone ?>">
      
<input type="submit" id='submit'   name="submit" value="Submit">
</form>