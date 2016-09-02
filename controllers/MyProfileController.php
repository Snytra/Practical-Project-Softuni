<?php
class MyProfileController extends BaseController{
	
	
	function uploadAvatar()
	{
		if ($this->isPost) {

			$filetmp = $_FILES["file_img"]["tmp_name"];

			$filename = $_FILES["file_img"]["name"];
			$filetype = $_FILES["file_img"]["type"];
			$filepath = "content/photos/" . $filename;
			$fileTitle = $_POST['title'];
			$user_id = $_SESSION['user_id'];
			$avatar = true;

			move_uploaded_file($filetmp, $filepath);

			$this->model->uploadAvatar($filename, $filepath, $filetype, $fileTitle, $user_id, $avatar);
		}
	}

}