<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class OneOffOrdersCrudController
 * @package App\Http\Controllers\Admin
 */
class OneOffOrdersCrudController extends CrudController
{
  use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
  use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
  use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
  use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
  use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

  public function setup()
  {
    CRUD::setModel(\App\Models\OneOffOrder::class);
    CRUD::setRoute(config('backpack.base.route_prefix') . '/one-off-orders');
    CRUD::setEntityNameStrings('one-off order', 'one-off orders');
  }

  protected function setupListOperation()
  {
    CRUD::column('id');
    CRUD::column('customer_name');
    CRUD::column('order_details');
    CRUD::column('total_cost');
  }

  protected function setupCreateOperation()
  {
    CRUD::setValidation(\App\Http\Requests\OneOffOrderRequest::class);

    CRUD::field('customer_name');
    CRUD::field('order_details');
    CRUD::field('total_cost');
  }

  protected function setupUpdateOperation()
  {
    $this->setupCreateOperation();
  }
}
