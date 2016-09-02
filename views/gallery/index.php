<?php $this->title = 'Gallery'; ?>
<br>
<br>
<br>

<div class="container" id="gallery">

            <!-- Page Header -->
            <div class="row">
                <div class="col-lg-12" style="display: inline-block">
                    <h1 class="page-header">Добре дошли в Галерията</h1>
                    <a  class="btn btn-primary " data-toggle="modal" data-target="#uploadImage-modal" >Качете снимка</a>
                </div>

            </div>
            <!-- /.row -->
    <br>
    <br>

            <!-- Projects Row -->
            <div class="row">
                <?php foreach ($this->photos as $photo) : ?>

                     <?php	echo "<div class=\"col-md-4 portfolio-item\">"; ?>

                        <a href="#">
                            <img  class="thumbnail"  src="<?php echo  $photo["img_path"];?>" height="300" width="300">
                        </a>
                    <h3 id="photoDescription">
                        <?= htmlspecialchars($photo['Title'])?>
                    </h3>
                    <p id="photoIdDate"><?= htmlspecialchars($photo['username'])?> <?= htmlspecialchars($photo['date'])?></p>

                    <?php echo "</div>" ?>


                    <?php endforeach; ?>
                </div>

            <!-- /.row -->



            <!-- Projects Row -->



          
  </div>          <!-- /.row -->

<div tabindex="-1" class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal">×</button>
                <td>
                    <a href="<?=APP_ROOT?>/gallery/comment/<?=$photo['img_id']?>">[Comment]</a>

                </td>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Затвори</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="uploadImage-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="loginmodal-container">
            <h1>Качете снимка</h1><br>

            <form action="posts/uploadphoto" method="POST" enctype="multipart/form-data" >
            <div>Изберете файл :</div>
            <input type="file" required autocomplete="off" name="file_img" />
            <div>Описание :</div>
            <input type="text"   name="title" required />
            <input type="submit"  name="btn_upload" value="Upload">

            </form>



        </div>
    </div>

</div>

