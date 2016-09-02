<?php

class GalleryModel extends BaseModel
{

    function getAll()
    {
        $statement = self::$db->query(
            "select img_id,img_name, img_path, Title, date, users.username  FROM photos inner join users on users.id=photos.usr_id where avatarphoto is FALSE ");
        return $statement->fetch_all(MYSQLI_ASSOC);
    }
    
    public function comments(int $user_id, int $photo_id, string $content)
    {
        $statement = self::$db->prepare(
            "INSERT INTO comments(user_id, photo_id, content) VALUES (?, ?, ?)");
		$statement->bind_param("iis", $user_id,  $photo_id,  $content);
		$statement->execute();
//		return $statement->affected_rows == 1;
     }
//    function getPhotoById(int $id){
//        $statement = self::$db->prepare(
//            "SELECT * FROM photos where img_id = ?");
//        $statement->bind_param("i", $id);
//        $statement->execute();
//        $result = $statement->get_result()->fetch_assoc();
//        return $result;
//    }
}
