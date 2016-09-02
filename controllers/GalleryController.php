<?php

class GalleryController extends BaseController
{

    function index()
    {
        $this->photos= $this->model->getAll();
    }
    public function comment($img_id)
    {
//        tozi authoruze precakva postvaneto na komentara


            if ($this->isPost) {
                $content = $_POST['content'];
                if (strlen($content) < 1) {
                    $this->setValidationError("content", "Comment too short.");
                }

                $user_id = $_SESSION['user_id'];
                if ($this->formValid()) {

                    if ($this->model->comments($user_id,  $img_id,  $content))
                        $this->addInfoMessage("Successful.");
                        $this->redirect("gallery");
                    }
                else {
                    $this->addErrorMessage("Error: cannot upload comment. Try again");

                }
            }

    }
}
