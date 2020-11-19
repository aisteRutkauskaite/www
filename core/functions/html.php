<?php
/**
 * Iš duoto duomenų masyvo sukuria atributus
 * deklaruojantį tekstą HTML elementui. (pavadinimas="vertė")
 * @param array $attr masyvas HTML atributų porų.
 * @return string HTML atributai.
 */

function html_attr(array $attr): string {
    $string = '';
    foreach ($attr as $name => $value) {
        $string .= "$name=\"$value\"";
    }
    return $string;
}

/**
 * Iš duoto duomenų masyvo sukuria input atributus
 * deklaruojantį tekstą skirtą HTML input elementui.
 *
 * Sumuojami atributai yra name, type, value ir visi likę
 * atributai iš $field['extra']['attr'] masyvo.
 *
 * @param string $field_name HTML input'o pavadinimas.
 * @param array $field masyvas HTML input atributų.
 * @return string input elemento atributai.
 */

function input_attr(string $field_name, array $field): string {
    $attributes = [
            'name' => $field_name,
            'type' => $field['type'],
            'value' => $field['value'] ?? '',
        ] + ($field['extra']['attr'] ?? []);
    return html_attr($attributes);
}

/**
 * Iš duoto duomenų masyvo sukuria atributus mygtukams
 * deklaruojantį tekstą HTML button elementui.
 *
 * name atributas visad turi likti 'action'.
 *
 * @param string $button_id HTML button'o value atributas.
 * @param array $button masyvas HTML button atributų.
 * @return string input elemento atributai.
 */

function button_attr(string $button_id, array $button): string {
    $attributes = [
            'name' => 'action',
            'type' => $button['type'],
            'value' => $button_id,
        ] + ($button['extra']['attr'] ?? []);
    return html_attr($attributes);
}

/**
 * funkcija kuri isspausdina formos tago atributus.
 *
 * @param $form
 * @return string
 */

function form_attr($form) {
    return html_attr(($form['attr'] ?? []) + [
            'method' => 'POST'
        ]);
}

/**
 * Iš duoto duomenų masyvo sukuria atributus select.
 * deklaruojantį tekstą HTML button elementui.
 *
 * name atributas visad turi likti 'action'.
 *
 * @param string $select_id HTML button'o value atributas.
 * @param array $select masyvas HTML button atributų.
 * @return string input elemento atributai.
 */

function select_attr(string $select_id, array $select): string {
    $attributes = [
            'name' => $select_id,
        ] + ($select['extra']['attr'] ?? []);
    return html_attr($attributes);
}

/**
 * Iš duoto duomenų masyvo sukuria atributus option.
 * deklaruojantį tekstą HTML button elementui.
 *
 * name atributas visad turi likti 'action'.
 *
 * @param string $select_id HTML button'o value atributas.
 * @param array $select masyvas HTML button atributų.
 * @return string input elemento atributai.
 */
function option_attr(string $option_id, array $option): string {
    $attributes = [
        'value' => $option_id,
    ];
    if ($option['value'] == $option_id) {
        $attributes['selected'] = 'selected';
    }
    return html_attr($attributes);
}


/**
 * Funkcija kuri išspausdina textarea atributus.
 *
 * name atributas visad turi likti 'action'.
 *
 * @param string $textarea_id HTML button'o value atributas.
 * @param array $textarea masyvas HTML button atributų.
 * @return string input elemento atributai.
 */

function textarea_attr(string $textarea_id, array $textarea): string {
    $attributes = [
            'name' => $textarea_id,
        ] + ($textarea['extra']['attr'] ?? []);
    return html_attr($attributes);
}



