<?php
/**
 * =====================================================================
 * Vista Crear Nuevos Productos de la App
 * =====================================================================
 * @author    ComercialSEO GrupoAltaEmpresas S.L.
 * @copyright 2019 ComercialSEO Todos los derechos resevados
 * @link      https://www.comercialseo.es Projects
 * @version   CakePHP/CRM.dscs.es v-1.01
 * @since     3.7
 * @property  \App\Model\Table\AppProductosTable $AppProductos
 * @method    \App\Model\Entity\AppProducto[]|
 * =====================================================================
*/
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav ds-flex lst-sty-n">
        <li class="pdd-laterales-10"><?= $this->Html->link(__('<i class="fa fa-undo"></i> Volver al listado'), ['action' => 'index'], ['class' => 'btn btn-success btn-xs', 'escape' => false]) ?></li>
    </ul>
</nav>

<div class="col-md-12 appProductos view large-9 medium-8 columns content">
<div class="x_panel">
<div class="x_content">
  <?= $this->Form->create($appProducto, ['class' => 'form-horizontal form-label-left', 'novalidate']) ?>
  <span class="section">Datos del nuevo Producto</span>
  <p><small>Los campos marcados con <span class="required">*</span> son necesarios.</small></p>
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nombre <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <?=
      $this->Form->control('pr_nombre', [
                      'class'                      => 'form-control col-md-7 col-xs-12',
                      'label'                      => false,
                      'data-validate-words'        => '1',
                      'data-validate-length-range' => '50',
                      'required'                   => 'required'
                  ]);
      ?> 
    </div>
  </div>
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Descripción
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <?=
      $this->Form->control('pr_descripcion', [
                      'class'                      => 'form-control col-md-7 col-xs-12',
                      'label'                      => false,
                      'data-validate-words'        => '3',
                      'required'                   => false
                  ]);
      ?> 
    </div>
  </div>
  <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tipo <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <?=
          $this->Form->select('pr_tipo', [
                                          'empty' => '(selecciona uno...)',
                                          'pr'    => 'Producto',
                                          'sr'    => 'Servicio',
                                          'ot'    => 'Otros'
                                    ],
                      [
                          'value'    => 'empty',
                          'class'    => 'form-control col-md-7 col-xs-12',
                          'label'    => false,
                          'required' => 'required'
                      ]);
          ?> 
         </div>
  </div>
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Base Imponible <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <?=
      $this->Form->control('pr_base_imponible', [
                      'class'                => 'form-control col-md-7 col-xs-12',
                      'label'                => false,
                      'data-validate-minmax' => '0,1000000',
                      'required'             => 'required'
                  ]);
      ?> 
    </div>
  </div>

  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Departamento Asignado <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <?=
      $this->Form->control('app_departamentos_id', [
                      'class'                      => 'form-control col-md-7 col-xs-12',
                      'label'                      => false,
                      'options'                    => $appDepartamentos,
                      'required'                   => 'required'
                  ]);
      ?>
    </div>
  </div>
  <div class="ln_solid"></div>
  <div class="form-group">
    <div class="col-md-6 col-md-offset-3">
      <button type="submit" class="btn btn-primary">Cancelar</button>
      <button id="send" type="submit" class="btn btn-success">Enviar</button>
    </div>
  </div>
 <?= $this->Form->end() ?>
</div>
</div>
</div>