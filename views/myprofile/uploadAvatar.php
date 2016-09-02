<?php $this->title = 'Upload Avatar Photo'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>

<form  method="POST" enctype="multipart/form-data" ">
<div>Изберете файл :</div>
<input type="file" name="file_img" />
<div>Описание :</div>
<input type="text" name="title" />
<input type="submit" name="btn_upload" value="Upload">

</form>

