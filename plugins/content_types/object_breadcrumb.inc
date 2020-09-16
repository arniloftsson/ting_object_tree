<?php
/**
 * @file
 * Panels render to display search results.
 */


$plugin = array(
  'title' => t('Ting object tree breadcrumb'),
  'description' => t("Add object tree breadcrumb"),
  'single' => TRUE,
  'render callback' => 'ting_object_tree_object_breadcrumb_content_type_render',
  'category' => t('Ting'),
  'content_types' => array('ting_object'),
  'required context' => new ctools_context_required(t('Ting object'), 'ting_object'),
  'render last' => True,
);

/**
 * Render the custom content type.
 */
function ting_object_tree_object_breadcrumb_content_type_render($subtype, $conf, $panel_args, $context) {
  $object = isset($context->data) ? ($context->data) : NULL;
  // Build the content type block.
  $content = ting_object_tree_get_breadcrumb($object);
  $block = new stdClass();
  $block->content = $content;



  return $block;
}

/**
 * Implements hook_ID_content_type_edit_form().
 */
function ting_object_tree_object_breadcrumb_content_type_edit_form($form, &$form_state) {
  return $form;
}



