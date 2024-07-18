{{-- This file is used for menu items by any Backpack v6 theme --}}

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Users" icon="la la-user" :link="backpack_url('user')" />
<x-backpack::menu-item title="Orders" icon="la la-shopping-cart" :link="backpack_url('orders')" />

<x-backpack::menu-dropdown title="Lists" icon="la la-list">
  <x-backpack::menu-dropdown-item title="Postal Codes" icon="la la-map" :link="backpack_url('postal-codes')" />
  <x-backpack::menu-dropdown-item title="One-off Orders" icon="la la-shopping-cart" :link="backpack_url('one-off-orders')" />
  <x-backpack::menu-dropdown-item title="Ice Orders" icon="la la-snowflake" :link="backpack_url('ice-orders')" />
  <x-backpack::menu-dropdown-item title="Variables" icon="la la-cogs" :link="backpack_url('variables')" />
  <x-backpack::menu-dropdown-item title="Customers" icon="la la-users" :link="backpack_url('customers')" />
  <x-backpack::menu-dropdown-item title="Log Files" icon="la la-file-alt" :link="backpack_url('log-files')" />
</x-backpack::menu-dropdown>

<x-backpack::menu-dropdown title="Reports" icon="la la-chart-bar">
  <x-backpack::menu-dropdown-item title="Inventory" icon="la la-warehouse" :link="backpack_url('inventory')" />
  <x-backpack::menu-dropdown-item title="Warehouse Sales" icon="la la-dollar-sign" :link="backpack_url('warehouse-sale')" />
</x-backpack::menu-dropdown>

<x-backpack::menu-dropdown title="Others" icon="la la-ellipsis-h">
  <x-backpack::menu-dropdown-item title="Manual Payments" icon="la la-money-bill-wave" :link="backpack_url('manual-payments')" />
  <x-backpack::menu-dropdown-item title="Emails" icon="la la-envelope" :link="backpack_url('emails')" />
</x-backpack::menu-dropdown>