<br>
<br>
<br>

<?php $this->title = 'Post comment'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>



<form method="post">

    <h1>Content:<h1>
    <textarea rows="10" name="content"></textarea>

    <div><input type="submit" value="Enter">
        <a href="<?=APP_ROOT?>/gallery">[Cancel]</a></div>
</form>


