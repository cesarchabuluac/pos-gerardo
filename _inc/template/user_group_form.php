<?php
$permissions = array(
  'report' => array(
    'read_recent_activities' => 'Actividades recientes', 
    'read_dashboard_accounting_report' => 'Dashboard Informe contable', 
    'read_sell_report' => 'Informe de venta', 
    'read_overview_report' => 'Informe general', 
    'read_collection_report' => 'Collec. Reporte',
    'read_full_collection_report' => 'Colección completa Reporte',
    'read_customer_due_collection_report' => 'Cobro al cliente RPT',
    'read_supplier_due_paid_report' => 'Proveedor adeudado RPT',
    'read_analytics' => 'Leer análisis', 
    'read_overview_report' => 'Informe general',
    'read_purchase_report' => 'Informe de compra',
    'read_purchase_payment_report' => 'Informe de pago de compra',
    'read_purchase_tax_report' => 'Informe de impuestos de compra',
    'read_sell_payment_report' => 'Informe de pagos de venta',
    'read_sell_tax_report' => 'Informe de impuestos de venta',
    'read_tax_overview_report' => 'Informe general de impuestos',
    'read_stock_report' => 'Informe de stock',
    'send_report_via_email' => 'Enviar informe por correo electrónico',
  ),
  'accounting' => array(
    'withdraw' => 'Retirar',
    'deposit' => 'Depositar',
    'transfer' => 'Transferir',
    'read_bank_account' => 'Ver cuenta bancaria',
    'read_bank_account_sheet' => 'Ver hoja de cuenta bancaria',
    'read_bank_transfer' => 'Ver transferencia bancaria',
    'read_bank_transactions' => 'Ver transacciones bancarias',
    'read_income_source' => 'Ver fuente de ingresos',
    'create_bank_account' => 'Crear cuenta bancaria',
    'update_bank_account' => 'Actualizar cuenta bancaria',
    'delete_bank_account' => 'Eliminar cuenta bancaria',
    'create_income_source' => 'Crear fuente de ingresos',
    'update_income_source' => 'Actualizar fuente de ingresos',
    'delete_income_source' => 'Eliminar fuente de ingresos',
    'read_income_monthwise' => 'Ingresos mensuales',
    'read_income_monthwise' => 'Ingresos mensuales',
    'read_income_and_expense_report' => 'Ingresos y gastos',
    'read_profit_and_loss_report' => 'Pérdida de beneficios',
    'read_cashbook_report' => 'Libro de pago',
  ),
  'quotation' => array(
    'read_quotation' => 'Leer la lista de cotizaciones',
    'create_quotation' => 'Crear cotización',
    'update_quotation' => 'Actualizar cotización',
    'delete_quotation' => 'Eliminar cotización',
  ),
  'installment' => array(
    'read_installment' => 'Leer la lista de cuotas',
    'create_installment' => 'Crear cuota',
    'update_installment' => 'Actualizar cuota',
    'delete_installment' => 'Eliminar cuota',
    'installment_payment' => 'Pago a plazos',
    'installment_overview' => 'Resumen de plazos',
  ),
  'expenditure' => array(
    'read_expense' => 'Leer gastos',
    'create_expense' => 'Crear gastos',
    'update_expense' => 'Actualizar gastos',
    'delete_expense' => 'Eliminar gastos',
    'read_expense_category' => 'Leer categoría de gastos',
    'create_expense_category' => 'Crear categoría de gastos',
    'update_expense_category' => 'Actualizar categoría de gastos',
    'delete_expense_category' => 'Eliminar categoría de gastos',
    'read_expense_monthwise' => 'Gastos mensuales',
    'read_expense_summary' => 'Resumen de gastos',
  ),
  'sell' => array(
    'read_sell_invoice' => 'Ver factura de venta',
    'read_sell_list' => 'Ver lista de ventas',
    'create_sell_invoice' => 'Crear venta',
    'update_sell_invoice_info' => 'Actualizar información',
    'delete_sell_invoice' => 'Eliminar venta',
    'sell_payment' => 'Pago de venta',
    'create_sell_due' => 'Crear vencimiento',
    'create_sell_return' => 'Create Return',
    'read_sell_return' => 'Ver lista de devoluciones',
    'update_sell_return' => 'Actualizar devoluciones',
    'delete_sell_return' => 'Eliminar devoluciones',
    'sms_sell_invoice' => 'Enviar factura de venta por SMS', 
    'email_sell_invoice' => 'Enviar factura de venta por correo electrónico', 
	  'read_sell_log' => 'Leer registro de venta',
  ),
  'purchase' => array(
    'create_purchase_invoice' => 'Crear factura',
    'read_purchase_list' => 'Ver lista de facturas',
    'update_purchase_invoice_info' => 'Actualizar información',
    'delete_purchase_invoice' => 'Eliminar factura',
    'purchase_payment' => 'Pago',
    'create_purchase_due' => 'Crear vencimiento',
    'create_purchase_return' => 'Crear devolución',
    'read_purchase_return' => 'Ver lista de devoluciones',
    'update_purchase_return' => 'Actualizar devolución',
    'delete_purchase_return' => 'Eliminar devolución',
    'read_purchase_log' => 'Leer registro de compras',
  ),
  'transfer' => array(
    'read_transfer' => 'Leer transferencia',
    'add_transfer' => 'Agregar transferencia',
    'update_transfer' => 'Actualizar transferencia',
    'delete_transfer' => 'Eliminar transferencia',
  ),
  'giftcard' => array(
    'read_giftcard' => 'Leer tarjeta de regalo',
    'add_giftcard' => 'Agregar tarjeta de regalo',
    'update_giftcard' => 'Actualizar tarjeta de regalo',
    'delete_giftcard' => 'Eliminar tarjeta de regalo',
    'giftcard_topup' => 'Tarjeta de regalo de recarga',
    'read_giftcard_topup' => 'Leer tarjeta de regalo de recarga',
    'delete_giftcard_topup' => 'Eliminar tarjeta de regalo de recarga',
  ),
  'product' => array(
    'read_product' => 'Leer lista de productos',
    'create_product' => 'Crear producto', 
    'update_product' => 'Actualizar producto', 
    'delete_product' => 'Eliminar producto',
    'import_product' => 'Importar producto',
    'product_bulk_action' => 'Acción a granel del producto',
    'delete_all_product' => 'Eliminar todo el producto',
    'read_category' => 'Leer lista de categorías',
    'create_category' => 'Crear categoría', 
    'update_category' => 'Actualizar categoría', 
    'delete_category' => 'Eliminar categoría',
    'read_stock_alert' => 'Leer alerta de stock',
    'read_expired_product' => 'Leer la lista de productos vencidos',
    'barcode_print' => 'Imprimir código de barras',
    'restore_all_product' => 'Restaurar todo el producto',
  ),
  'supplier' => array(
    'read_supplier' => 'Leer lista de proveedores',
    'create_supplier' => 'Crear proveedor',
    'update_supplier' => 'Actualizar proveedor',
    'delete_supplier' => 'Eliminar proveedor',
    'read_supplier_profile' => 'Leer perfil de proveedor',
  ),
  'brand' => array(
    'read_brand' => 'Leer lista de marcas',
    'create_brand' => 'Crear marca',
    'update_brand' => 'Actualizar marca',
    'delete_brand' => 'Eliminar marca',
    'read_brand_profile' => 'Leer perfil de marca',
  ),
  'storebox' => array(
    'read_box' => 'Leer caja',
    'create_box' => 'Crear caja',
    'update_box' => 'Actualizar caja',
    'delete_box' => 'Eliminar caja',
  ),
  'unit' => array(
    'read_unit' => 'Leer unidad',
    'create_unit' => 'Crear unidad',
    'update_unit' => 'Actualizar unidad',
    'delete_unit' => 'Eliminar unidad',
  ),
  'taxrate' => array(
    'read_taxrate' => 'Leer impuestos',
    'create_taxrate' => 'Crear impuesto',
    'update_taxrate' => 'Actualizar impuesto',
    'delete_taxrate' => 'Eliminar impuesto',
  ),
  'loan' => array(
    'read_loan' => 'Leer préstamo',
    'read_loan_summary' => 'Leer resumen de préstamo',
    'take_loan' => 'Tomar préstamo',
    'update_loan' => 'Actualizar préstamo',
    'delete_loan' => 'Eliminar préstamo',
    'loan_pay' => 'Pago de préstamo',
  ),
  'customer' => array(
    'read_customer' => 'Leer lista de clientes',
    'read_customer_profile' => 'Leer perfil del cliente',
    'create_customer' => 'Crear cliente', 
    'update_customer' => 'Actualizar cliente', 
    'delete_customer' => 'Eliminar cliente',
    'add_customer_balance' => 'Agregar saldo',
    'substract_customer_balance' => 'Resta de saldo',
    'read_customer_transaction' => 'Leer lista de transacciones',
  ),
  'user' => array(
    'read_user' => 'Leer lista de usuarios',
    'create_user' => 'Crear usuario', 
    'update_user' => 'Actualizad usuario', 
    'delete_user' => 'Eliminar usuario', 
    'change_password' => 'Cambiar contraseña',
  ),
  'usergroup' => array(
    'read_usergroup' => 'Leer lista de grupos de usuario',
    'create_usergroup' => 'Crear grupo de usuario', 
    'update_usergroup' => 'Eliminar grupo de usuario', 
    'delete_usergroup' => 'Eliminar grupo de usuario', 
  ),
  'currency' => array(
    'read_currency' => 'Leer moneda',
    'create_currency' => 'Agregar moneda',
    'update_currency' => 'Actualizar moneda',
    'change_currency' => 'Cambiar moneda',
    'delete_currency' => 'Eliminar moneda',
  ),
  'filemanager' => array(
    'read_filemanager' => 'Leer administrador de archivos',
  ),
  'payment_method' => array(
    'read_pmethod' => 'Leer la lista de métodos de pago',
    'create_pmethod' => 'Crear método de pago',
    'update_pmethod' => 'Actualizar método de pago',
    'delete_pmethod' => 'Eliminar método de pago',
    'updadte_pmethod_status' => 'Active/Inactive',
  ),
  'store' => array(
    'read_store' => 'Leer lista de tiendas',
    'create_store' => 'Crear tienda',
    'update_store' => 'Actualizar tienda',
    'delete_store' => 'Eliminar tienda',
    'activate_store' => 'Activar tienda',
    'upload_favicon' => 'Subir Favicon',
    'upload_logo' => 'Subir logo',
  ),
  'printer' => array(
    'read_printer' => 'Ver impresora',
    'create_printer' => 'Agregar impresora',
    'update_printer' => 'Actualizar impresora',
    'delete_printer' => 'Eliminar impresora',
  ),
  'sms' => array(
    'send_sms' => 'Enviar SMS',
    'read_sms_report' => 'Ver informe de SMS',
    'read_sms_setting' => 'Ver configuración de SMS',
    'update_sms_setting' => 'Actualizar configuración de SMS',
  ),
  'sms' => array(
    'send_email' => 'Enviar correo electrónico',
  ),
  'langauge' => array(
    'read_language' => 'Ver idioma',
    'create_language' => 'Agregar idioma',
    'update_language' => 'Editar información del idioma',
    'delete_language' => 'Eliminar idioma',
    'language_translation' => 'Traducción de idiomas',
    'delete_language_key' => 'Eliminar tecla de idioma',
  ),
  'settings' => array(
    'receipt_template' => 'Plantilla de recibo',
    'read_user_preference' => 'Leer preferencia de usuario',
    'update_user_preference' => 'Actualizar preferencias de usuario',
    'filtering' => 'Filtración',
    'language_sync' => 'Sincronización de idiomas',
    'backup' => 'Copia de seguridad de la base de datos',
    'restore' => 'Restauración de base de datos',
    'reset' => 'Reiniciar',
    'show_purchase_price' => 'Mostrar precio de compra',
    'show_profit' => 'Mostrar beneficio',
    'show_graph' => 'Mostrar gráfico',
  ),
);
?>

<h4 class="sub-title">
  <?php echo trans('text_update_title'); ?>
</h4>

<form class="form-horizontal" id="user-group-form" action="user_group.php" method="post">
  
  <input type="hidden" id="action_type" name="action_type" value="UPDATE">
  <input type="hidden" id="group_id" name="group_id" value="<?php echo $usergroup['group_id']; ?>">
  
  <div class="box-body">
    <div class="form-group">
      <label for="name" class="col-sm-3 control-label">
        <?php echo sprintf(trans('label_name'), null); ?>
      </label>
      <div class="col-sm-7">
        <input type="text" class="form-control" id="name" ng-model="usergroupName" ng-init="usergroupName='<?php echo $usergroup['name']; ?>'" value="<?php echo $usergroup['name']; ?>" name="name" required>
      </div>
    </div>

    <div class="form-group">
      <label for="slug" class="col-sm-3 control-label">
        <?php echo sprintf(trans('label_slug'), null); ?><i class="required">*</i>
      </label>
      <div class="col-sm-7">
        <?php if ( $usergroup['slug'] == 'admin' ||  $usergroup['slug'] == 'cashier'): ?>
          <input type="hidden" class="form-control" id="slug" name="slug" value="<?php echo $usergroup['slug'];?>">
          <h4><b><?php echo $usergroup['slug'];?></b></h4>
        <?php else:?>
          <input type="text" class="form-control" id="slug" value="<?php echo $usergroup['slug'] ? $usergroup['slug'] : "{{ categoryName | strReplace:' ':'_' | lowercase }}"; ?>" name="slug" required<?php echo $usergroup['slug'] == 'admin' ||  $usergroup['slug'] == 'cashier' ? ' disabled' : null;?>>
        <?php endif;?>
      </div>
    </div>

    <hr>

    <div class="form-group mb-0">
      <div class="col-sm-12">
        <h4 class="pull-left">
          <b><?php echo trans('text_permission'); ?></b>
        </h4>
        <button data-form="#user-group-form" data-datatable="#user-group-list" class="btn btn-info btn-lg pull-right user-group-update" name="btn_edit_user" data-loading-text="Updating...">
          <span class="fa fa-fw fa-pencil"></span>
          <?php echo trans('button_update'); ?>
        </button>
      </div>
    </div>

    <hr>

    <?php $the_permissions = unserialize($usergroup['permission']); ?>

    <div class="form-group permission-list">
      <?php foreach ($permissions as $type => $lists) : ?>
      <div class="col-sm-3">
        <h4>
          <input type="checkbox" id="<?php echo $type; ?>_action" onclick="$('.<?php echo $type; ?>').prop('checked', this.checked);">
          <label for="<?php echo $type; ?>_action">
            <?php echo str_replace('_', ' ', $type); ?>
          </label>
        </h4>
        <div class="filter-searchbox">
            <input ng-model="search_<?php echo $type; ?>" class="form-control" type="text" placeholder="<?php echo trans('search'); ?>">
        </div>
        <div class="well well-sm permission-well">
          <div filter-list="search_<?php echo $type; ?>">
            <?php foreach ($lists as $key => $name) : ?>
              <div>
                <input type="checkbox" class="<?php echo $type; ?>" id="<?php echo $key; ?>" value="true" name="access[<?php echo $key; ?>]"<?php echo isset($the_permissions['access'][$key]) ? ' checked' : null; ?>>
                <label for="<?php echo $key; ?>"><?php echo ucfirst($name); ?></label>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="box-footer">
    <div class="form-group">
      <div class="col-sm-12 text-center">
        <button data-form="#user-group-form" data-datatable="#user-group-list" class="btn btn-lg btn-info user-group-update" name="btn_edit_user" data-loading-text="Actualizando...">
          <span class="fa fa-fw fa-pencil"></span>
          <?php echo trans('button_update'); ?>
        </button>
      </div>
    </div>
  </div>
</form>