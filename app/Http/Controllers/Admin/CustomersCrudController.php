<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CustomersCrudController
 * @package App\Http\Controllers\Admin
 */
class CustomersCrudController extends CrudController
{
  use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
  use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
  use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
  use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
  use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

  public function setup()
  {
    CRUD::setModel(\App\Models\Customer::class);
    CRUD::setRoute(config('backpack.base.route_prefix') . '/customers');
    CRUD::setEntityNameStrings('customer', 'customers');
  }

  protected function setupListOperation()
  {
    CRUD::column('id');
    CRUD::column('name');
    CRUD::column('email');
    CRUD::column('phone');
  }

  protected function setupCreateOperation()
  {
    CRUD::setValidation(\App\Http\Requests\CustomerRequest::class);

    CRUD::field('name');
    CRUD::field('email');
    CRUD::field('phone');
  }

  protected function setupUpdateOperation()
  {
    $this->setupCreateOperation();
  }
}
