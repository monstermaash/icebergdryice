<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class IceOrdersCrudController
 * @package App\Http\Controllers\Admin
 */
class IceOrdersCrudController extends CrudController
{
  use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
  use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
  use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
  use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
  use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

  public function setup()
  {
    CRUD::setModel(\App\Models\IceOrder::class);
    CRUD::setRoute(config('backpack.base.route_prefix') . '/ice-orders');
    CRUD::setEntityNameStrings('ice order', 'ice orders');
  }

  protected function setupListOperation()
  {
    CRUD::column('id');
    CRUD::column('supplier');
    CRUD::column('order_date');
    CRUD::column('amount');
    CRUD::column('cost');
  }

  protected function setupCreateOperation()
  {
    CRUD::setValidation(\App\Http\Requests\IceOrderRequest::class);

    CRUD::field('supplier');
    CRUD::field('order_date');
    CRUD::field('amount');
    CRUD::field('cost');
  }

  protected function setupUpdateOperation()
  {
    $this->setupCreateOperation();
  }
}
