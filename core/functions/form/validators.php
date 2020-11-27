<?php

/**
 * Funkcija patikrina ar input'o laukelis nebuvo paliktas tuščias.
 *
 * Jeigu rasta tuščia vertė - input'o duomenų masyve 'error' indeksu įrašoma
 * kilusi klaida.
 * Funkcija klaidos atveju grąžina false, kitu - true.
 *
 * @param string $field_value išvalyto input'o vertė.
 * @param array $field vieno input'o duomenų masyvas.
 * @return bool
 */

function validate_field_not_empty($field_value, &$field)
{
    if ($field_value === '') {
        $field['error'] = 'Tuščias laukelis turi buti užpildytas';
        return false;
    }
    return true;
}

/**
 * Funkcija patikrina ar input'o laukelyje įrašytas skaičiai atitinka $params duotus masyve.
 *
 * Funkcija klaidos atveju grąžina false, kitu - true.
 *
 * @param  $field_value input'o vertė.
 * @param array $field vieno input'o duomenų masyvas.
 * @param array $params esančios vertės.
 * @return bool
 */
function validate_field_range($field_value, array &$field, $params): bool
{
    if ($field_value < $params['min'] || $field_value > $params['max']) {
        $field['error'] = 'Neteisingas skaičius';
        return false;
    }

    return true;
}

/**
 *
 * f-cija tikrina ar visi laukai ivesti vienodi,
 * jei ne - grazina false ir priraso klaida - input'o duomenų masyve 'error' indeksu
 *
 * @param array $form_values
 * @param array $form
 * @param array $params
 * @return bool
 */
function validate_fields_match(array $form_values, array &$form, array $params): bool
{
    foreach ($params as $field_index) {
        if ($form_values[$params[0]] !== $form_values[$field_index]) {
            $form['fields'][$field_index]['error'] = strtr('Laukelis nesutampa su @laukas', [
                '@laukas' => $form['fields'][$params[0]]['label']
            ]);
            return false;
        }
    }
    return true;
}

/**
 * f-cija tikrina ar selecte pateikta verte yra viena is option pateiktu.
 *
 * @param $field_input
 * @param array $field
 * @return bool
 * jei ne - grazina false ir priraso klaida - input'o duomenų masyve 'error' indeksu
 */

function validate_select($field_input, &$field)
{
    if (!isset($field['options'][$field_input])) {
        $field['error'] = 'Tokio pasirinkimo nėra';
        return false;
    }

    return true;
}

/**
 *
 * f-cija tikrina ar pateiktas email input turi visus emailui budingus sibolius.
 * @param $field_input
 * @param array $field
 * @return bool
 * jei ne - grazina false ir priraso klaida - input'o duomenų masyve 'error' indeksu
 */

function validate_email($field_input, &$field)
{
    if (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', strtolower($field_input))) {
        $field['error'] = 'Blogas email formatas';
        return false;
    }
    return true;
}

/**
 *
 * f-cija tikrina ar pateiktos koordinates jau egzistuoja duombazėje.
 * @param $form_values
 * @param array $form
 * @return bool
 * jei ne - grazina false ir priraso klaida - input'o duomenų masyve 'error' indeksu
 */

function validate_coordinates_pixels($form_values, &$form): bool
{
    $data = new FileDB(DB_FILE);
    $data->load();
    $coordinates_exist = $data->getRowWhere('coordinates', [
        'coordinateX' => $form_values['coordinateX'],
        'coordinateY' => $form_values['coordinateY']]);
    if ($coordinates_exist) {
        $form['error'] = 'Tokios koordinates jau egzistuoja';
        return false;
    }
    return true;
}