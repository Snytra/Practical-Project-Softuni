<?php

class MyProfileModel extends BaseModel {

	public function uploadAvatar (string $filename, string $filepath, string $filetype,string $title,int $user_id,bool $avatar)
	{
		{
			$statement = self::$db->prepare(
				"INSERT INTO photos(img_name,img_path,img_type,Title,usr_id,avatarPhoto)  VALUES (?, ?, ?, ?, ?, ?)");
			$statement->bind_param("ssssis", $filename, $filepath,$filetype,$title ,$user_id,$avatar);
			$statement->execute();
			return $statement->affected_rows == 1;

		}


	}
}