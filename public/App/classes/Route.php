<?php

namespace App\classes;

class Route
{
    protected string $userRole;
    public function definitionUserRole($firstSegmentURL):void
    {
      switch ($firstSegmentURL){
          case 'client':
              $this->userRole = 'client';
              break;
          case 'admin':
              $this->userRole = 'admin';
              break;
          default:
              $this->userRole = 'guest';
              break;
      }
    }

    public function dispatchByRole()
    {
        switch ($this->userRole){
            case 'client':
                $this->clientRoute();
                break;
            case 'admin':
                $this->adminRoute();
                break;
            default:
                $this->guestRoute();
                break;
        }
    }
    public function guestRoute()
    {
        echo 'Гости';
    }

    public function clientRoute()
    {
        echo 'Зарегистрированные пользователи';
    }

    public function adminRoute()
    {
        echo 'Администраторы';
    }
}