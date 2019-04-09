<?php

function gf_price_request_settings_form($form){

  $form['gf_price_request_recipient_addresses'] = array(
    '#type' => 'textfield',
    '#title' => t('Recipient Addresses'),
    '#description' => t('Email addresses to which price change requests will be sent. If there are several addresses, separate them with a comma.'),
    '#required' => TRUE,
    '#default_value' => variable_get('gf_price_request_recipient_addresses', ''),
    '#element_validate' => ['_gf_price_request_multiple_email_validator'],
  );

  return system_settings_form($form);
}

function _gf_price_request_multiple_email_validator($element, &$form_state) {
  $emails = explode(',', $element['#value']);
  foreach($emails as $email) {
    $email = trim($email);
    if (!valid_email_address($email)) {
    form_error($element, t('The "!name" is not valid email.', array('!name' => t($email))));
    }
  }
}
