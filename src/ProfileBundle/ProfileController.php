<?php

namespace Src\ProfileBundle\Controller;

use Src\CoreBundle\Utils\RenderPage;

class ProfileController{
    private $renderPage;
    public function __construct(){
        $this->renderPage = new RenderPage;
    }
    public function show()
    {
        $this->renderPage->renderPage(["profile/profile.php", "profile/profileRate.php"]);
    }
}
