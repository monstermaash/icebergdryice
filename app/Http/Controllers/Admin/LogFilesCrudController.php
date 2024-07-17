<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class LogFilesCrudController
 * @package App\Http\Controllers\Admin
 */
class LogFilesCrudController extends CrudController
{
  use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
  use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
  use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
  use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
  use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

  public function setup()
  {
    CRUD::setModel(\App\Models\LogFile::class);
    CRUD::setRoute(config('backpack.base.route_prefix') . '/log-files');
    CRUD::setEntityNameStrings('log file', 'log files');
  }

  protected function setupListOperation()
  {
    CRUD::column('id');
    CRUD::column('file_name');
    CRUD::column('created_at');
  }

  protected function setupCreateOperation()
  {
    CRUD::setValidation(\App\Http\Requests\LogFileRequest::class);

    CRUD::field('file_name');
  }

  protected function setupUpdateOperation()
  {
    $this->setupCreateOperation();
  }
}
