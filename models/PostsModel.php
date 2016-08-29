<?php
class PostsModel extends HomeModel
{
	function getAll()
	{
		$statement = self::$db->query(
			"SELECT * FROM photos ");
		return $statement->fetch_all(MYSQLI_ASSOC);
	}
	function getById(int $id)
	{
		$statement = self::$db->prepare(
			"SELECT * FROM posts WHERE id = ?");
		$statement->bind_param("i", $id);
		$statement->execute();
		$result = $statement->get_result()->fetch_assoc();
		return $result;
	}
	public function create(string $title, string $content, int $user_id) :bool
	{
		$statement = self::$db->prepare(
			"INSERT INTO posts(title, content, user_id) VALUES (?, ?, ?)"
		);
		$statement->bind_param("ssi", $title, $content, $user_id);
		$statement->execute();
		return $statement->affected_rows == 1;
	} 

	public function uploadphoto (string $filename, string $filepath, string $filetype, int $user_id)
	{
		{					
			$statement = self::$db->prepare(
				"INSERT INTO photos(img_name,img_path,img_type,usr_id)  VALUES (?, ?, ?, ?)");
			$statement->bind_param("sssi", $filename, $filepath,$filetype, $user_id);
			$statement->execute();
			return $statement->affected_rows == 1;

		}


	}




}