<?php
class MainController
{
    private function genererPage($data)
    {
        extract($data);
        ob_start();
        require_once($view);
        $page_content = ob_get_clean();
        require_once($template);
    }

    public function accueil()
    {
        $data_page = [
            "page_description" => "Description de la page d'accueil",
            "page_title" => "Titre de la page d'accueil",
            "view" => "views/accueil.view.php",
            "template" => "views/common/template.php",
        ];
        $this->genererPage($data_page);
    }

    public function page1()
    {
        $data_page = [
            "page_description" => "Description de la page1",
            "page_title" => "Titre de la page1",
            "view" => "views/page1.view.php",
            "template" => "views/common/template.php",
        ];
        $this->genererPage($data_page);
    }
    public function page2()
    {
        $data_page = [
            "page_description" => "Description de la page2",
            "page_title" => "Titre de la page2",
            "view" => "views/page2.view.php",
            "template" => "views/common/template.php",
        ];
        $this->genererPage($data_page);
    }
    public function page3()
    {
        $data_page = [
            "page_description" => "Description de la page3",
            "page_title" => "Titre de la page3",
            "view" => "views/page3.view.php",
            "template" => "views/common/template.php",
        ];
        $this->genererPage($data_page);
    }

    public function pageErreur($msg)
    {
        $data_page = [
            "page_description" => "Page permettant de gerer les erreurs",
            "page_title" => "Page d'erreur",
            "msg" =>$msg,
            // "nolan" => "Tout est possible à qui rêve, ose, travaille et n'abandonne jamais.",
            // "rayan" => " Ceux qui ne font rien ne se trompent jamais.",
            // "nisma" => "Je ne perds jamais. Soit je gagne, soit j'apprends.",
            // "datas"=> ["Si vous ne risquez rien, vous prenez encore plus de risque.","Quand on ose, on se trompe souvent. Quand on n’ose pas, on se trompe toujours."],
            "view" => "views/erreur.view.php",
            "template" => "views/common/template.php",
        ];
        $this->genererPage($data_page);
    }
}
