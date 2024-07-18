<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Http\Requests\OrderRequest;
use App\Models\Order;

class OrderCrudController extends CrudController
{
  use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
  use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
  use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
  use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
  use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

  public function setup()
  {
    CRUD::setModel(Order::class);
    CRUD::setRoute(config('backpack.base.route_prefix') . '/orders');
    CRUD::setEntityNameStrings('order', 'orders');
  }

  protected function setupListOperation()
  {
    CRUD::column('id')->label('Order #');
    CRUD::column('customer_name')->label('Customer Name');
    CRUD::addColumn([
      'name' => 'delivery_date',
      'type' => 'datetime',
      'label' => 'Delivery Date',
      'format' => 'YYYY-MM-DD HH:mm'
    ]);
    CRUD::column('status')->label('Status');
    CRUD::column('total_cost')->label('Total');
    CRUD::column('origin')->label('Origin');
    CRUD::column('recurring')->label('Recurring');

    // CRUD::addButtonFromView('line', 'view', 'order_view_button', 'beginning');
  }

  protected function setupCreateOperation()
  {
    CRUD::setValidation(OrderRequest::class);

    CRUD::field('customer_name');
    CRUD::field('email');
    CRUD::field('phone');
    CRUD::field('amount_of_ice');
    CRUD::field('amount_of_boxes');
    CRUD::field('origin')->type('enum')->options(['online' => 'Online', 'manual' => 'Manual']);
    CRUD::field('recurring')->type('enum')->options(['recurring' => 'Recurring', 'non-recurring' => 'Non-recurring']);
    CRUD::field('location_name');
    CRUD::field('address');
    CRUD::field('unit')->label('Unit');
    CRUD::field('city');
    CRUD::field('postal_code');
    CRUD::field('province')->type('enum')->options(['BC' => 'BC', 'AB' => 'AB']);
    CRUD::field('country')->label('Country');
    CRUD::field('pickup_delivery')->type('enum')->options(['pickup' => 'Pickup', 'delivery' => 'Delivery']);
    CRUD::field('status')->type('enum')->options(['valid' => 'Valid', 'skip' => 'Skip', 'cancelled' => 'Cancelled']);
    CRUD::field('delivery_date')->type('datetime')->format('YYYY-MM-DD HH:mm');
    CRUD::field('notes')->type('textarea');
    CRUD::field('total_cost');
  }

  protected function setupUpdateOperation()
  {
    $this->setupCreateOperation();
  }
}
