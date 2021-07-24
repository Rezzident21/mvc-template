<?php
class IndexController extends Controller
{

    private $pageView = "/views/index.php"; #path to view

    public function __construct()
    {
        $this->model = new IndexModel();
        $this->view = new View();
    }

    public function index()
    {
        $this->view->render($this->pageView, $this->pageData); // Print our page with other data

    }

}

?>