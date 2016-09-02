<?php $this->title = 'Upload Photo'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>

<form  method="POST" enctype="multipart/form-data" ">
    <div>Изберете файл :</div>
    <input type="file" required autocomplete="off" name="file_img" />
    <div>Описание :</div>
    <input type="text"   name="title" />
    <input type="submit"  name="btn_upload" value="Upload">
<a href="<?=APP_ROOT?>/gallery">[Cancel]</a></div>

</form>



