<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\WarehouseSaleRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Models\WarehouseSale;

/**
 * Class WarehouseSaleCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class WarehouseSaleCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\WarehouseSale::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/warehouse-sales');
        CRUD::setEntityNameStrings('warehouse sale', 'warehouse sales');

        $this->crud->setListView('admin.warehouse_sales');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('date');
        CRUD::column('sold');
        CRUD::column('income');
        CRUD::column('bought');
        CRUD::column('expense');
        CRUD::column('net');

        // Fetch entries to pass to the view
        $entries = WarehouseSale::paginate(10);
        view()->share('entries', $entries);

        // Add action buttons
        CRUD::addButtonFromModelFunction('line', 'preview', 'getPreviewButton', 'beginning');
        CRUD::addButtonFromModelFunction('line', 'edit', 'getEditButton', 'end');
        CRUD::addButtonFromModelFunction('line', 'delete', 'getDeleteButton', 'end');
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(WarehouseSaleRequest::class);

        CRUD::field('date');
        CRUD::field('sold');
        CRUD::field('income');
        CRUD::field('bought');
        CRUD::field('expense');
        CRUD::field('net');
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
