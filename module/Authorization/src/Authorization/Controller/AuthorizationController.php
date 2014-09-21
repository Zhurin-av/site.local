<?php
// module/Authorization/src/Authorization/Controller/AuthorizationController.php:
namespace Authorization\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AuthorizationController extends AbstractActionController
{
    public function indexAction()
    {
        return  new ViewModel();
    }
}
