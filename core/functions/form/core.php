<?php

/**
 * Filtruojami pateikti inputai ir tikrinami ar nėra netinkamų simbolių.
 *
 * @param array $form Formos masyvas.
 */
function get_clean_input($form) {
    $filter_params = [];
    foreach ($form['fields'] as $index => $input) {
        $filter_params[$index] = FILTER_SANITIZE_SPECIAL_CHARS;
    }
    return filter_input_array(INPUT_POST, $filter_params);
}

/**
 * Tikrinama pateikta forma pritaikant kiekvieno laukelio validatorius.
 *
 * @param array $form Formos masyvas.
 * @param array $form_values Išvalytos input'ų vertės.
 * @return bool
 */
function validate_form(array &$form , array $form_values): bool {
    $is_valid = true;

    foreach ($form['fields'] as $field_id => &$field) {
        foreach ($field['validators'] ?? [] as $function_id => $function_name) {
            if (is_array($function_name)) {
                $params = $function_name;
                $field_is_valid = $function_id($form_values[$field_id], $field, $params = $function_name);
            } else {
                $field_is_valid = $function_name($form_values[$field_id], $field);
            }

            if (!$field_is_valid) {
                $is_valid = false;
                break;
            }
        }
    }

    foreach ($form ['validators'] as $validator_index => $validator) {
        if (is_array($validator)) {
            $params = $validator;
            $field_is_valid = $validator_index($form_values, $form , $params);;
        } else {
            $field_is_valid = $validator($form_values, $form);
        }

        if (!$field_is_valid) {
            $is_valid = false;
            break;
        }
    }


    return $is_valid;
}
