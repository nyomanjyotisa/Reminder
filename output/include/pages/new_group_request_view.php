<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'details' => array( 'group_agenda' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'group_agenda_type' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'group_member' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'group_member_checkin' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'group_member_order' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'group_member_order_detail' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'group_operation_off' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'group_product' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'lookup_stok' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'lookup_token' => array( 'displayPreview' => 2,
'previewPageId' => '' ) ),
'master' => array( 'business_type' => array( 'preview' => false ),
'membership_type' => array( 'preview' => false ) ),
'fields' => array( 'gridFields' => array( 'group_id',
'group_name',
'description',
'logo',
'token_type',
'membership_type',
'business_type',
'open_time',
'close_time',
'off_day',
'valid',
'member_id' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'group_id' => array( 'integrated_edit_field' ),
'group_name' => array( 'integrated_edit_field1' ),
'description' => array( 'integrated_edit_field2' ),
'logo' => array( 'integrated_edit_field3' ),
'token_type' => array( 'integrated_edit_field4' ),
'membership_type' => array( 'integrated_edit_field6' ),
'business_type' => array( 'integrated_edit_field7' ),
'open_time' => array( 'integrated_edit_field8' ),
'close_time' => array( 'integrated_edit_field9' ),
'off_day' => array( 'integrated_edit_field10' ),
'valid' => array( 'integrated_edit_field5' ),
'member_id' => array( 'integrated_edit_field11' ) ) ),
'pageLinks' => array( 'edit' => true,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'view_header' ),
'above-grid' => array(  ),
'below-grid' => array( 'view_back_list',
'view_close',
'hamburger' ),
'grid' => array( 'integrated_edit_field',
'integrated_edit_field3',
'integrated_edit_field6',
'integrated_edit_field5',
'integrated_edit_field1',
'integrated_edit_field4',
'integrated_edit_field7',
'integrated_edit_field10',
'integrated_edit_field2',
'integrated_edit_field9',
'integrated_edit_field8',
'integrated_edit_field11' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'view_header' => 'top',
'view_back_list' => 'below-grid',
'view_close' => 'below-grid',
'hamburger' => 'below-grid',
'integrated_edit_field' => 'grid',
'integrated_edit_field3' => 'grid',
'integrated_edit_field6' => 'grid',
'integrated_edit_field5' => 'grid',
'integrated_edit_field1' => 'grid',
'integrated_edit_field4' => 'grid',
'integrated_edit_field7' => 'grid',
'integrated_edit_field10' => 'grid',
'integrated_edit_field2' => 'grid',
'integrated_edit_field9' => 'grid',
'integrated_edit_field8' => 'grid',
'integrated_edit_field11' => 'grid' ),
'itemLocations' => array( 'integrated_edit_field' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field3' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field6' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field5' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field1' => array( 'location' => 'grid',
'cellId' => 'c' ),
'integrated_edit_field4' => array( 'location' => 'grid',
'cellId' => 'c' ),
'integrated_edit_field7' => array( 'location' => 'grid',
'cellId' => 'c' ),
'integrated_edit_field10' => array( 'location' => 'grid',
'cellId' => 'c' ),
'integrated_edit_field2' => array( 'location' => 'grid',
'cellId' => 'c4' ),
'integrated_edit_field9' => array( 'location' => 'grid',
'cellId' => 'c4' ),
'integrated_edit_field8' => array( 'location' => 'grid',
'cellId' => 'c4' ),
'integrated_edit_field11' => array( 'location' => 'grid',
'cellId' => 'c4' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'view_header' => array( 'view_header' ),
'view_back_list' => array( 'view_back_list' ),
'view_close' => array( 'view_close' ),
'hamburger' => array( 'hamburger' ),
'view_edit' => array( 'view_edit' ),
'integrated_edit_field' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field4',
'integrated_edit_field6',
'integrated_edit_field7',
'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field10',
'integrated_edit_field5',
'integrated_edit_field11' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field',
'integrated_edit_field3',
'integrated_edit_field6',
'integrated_edit_field5' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field1',
'integrated_edit_field4',
'integrated_edit_field7',
'integrated_edit_field10' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field2',
'integrated_edit_field9',
'integrated_edit_field8',
'integrated_edit_field11' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 3,
'height' => 1 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'misc' => array( 'type' => 'view',
'breadcrumb' => false,
'nextPrev' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'view',
'type' => 'view',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'view-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'view_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'view-above-grid',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'view-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'view_back_list',
'view_close' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'hamburger' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c3' ),
array( 'cell' => 'c' ),
array( 'cell' => 'c4' ) ),
'section' => '' ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field',
'integrated_edit_field3',
'integrated_edit_field6',
'integrated_edit_field5' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field1',
'integrated_edit_field4',
'integrated_edit_field7',
'integrated_edit_field10' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c4' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field2',
'integrated_edit_field9',
'integrated_edit_field8',
'integrated_edit_field11' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'columnCount' => 3,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'view_header' => array( 'type' => 'view_header' ),
'view_back_list' => array( 'type' => 'view_back_list' ),
'view_close' => array( 'type' => 'view_close' ),
'hamburger' => array( 'type' => 'hamburger',
'items' => array( 'view_edit' ) ),
'view_edit' => array( 'type' => 'view_edit' ),
'integrated_edit_field' => array( 'field' => 'group_id',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field1' => array( 'field' => 'group_name',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field2' => array( 'field' => 'description',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field3' => array( 'field' => 'logo',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field4' => array( 'field' => 'token_type',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field6' => array( 'field' => 'membership_type',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field7' => array( 'field' => 'business_type',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field8' => array( 'field' => 'open_time',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field9' => array( 'field' => 'close_time',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field10' => array( 'field' => 'off_day',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field5' => array( 'field' => 'valid',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field11' => array( 'field' => 'member_id',
'type' => 'integrated_edit_field',
'orientation' => 0 ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>