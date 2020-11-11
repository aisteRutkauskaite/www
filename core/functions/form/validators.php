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
 * Funkcija patikrina ar input'o laukelyje įrašytas vardas ir pavardė yra atskirti tarpu.
 *
 * Jeigu rasta tuščia vertė - input'o duomenų masyve 'error' indeksu įrašoma
 * kilusi klaida.
 * Funkcija klaidos atveju grąžina false, kitu - true.
 *
 * @param string $field_value išvalyto input'o vertė.
 * @param array $field vieno input'o duomenų masyvas.
 * @return bool
 */
function validate_field_has_space($field_value, array &$field): bool {
    {
        if (str_word_count($field_value) < 2) {
            $field['error'] = 'Vardas ir pavardė turi būti atskirti';
            return false;
        }

        return true;
    }
}
/**
 * Funkcija patikrina ar input'o laukelyje įrašytas amžius yra nuo 18 iki 100.
 *
 * Jeigu rasta tuščia vertė - input'o duomenų masyve 'error' indeksu įrašoma
 * kilusi klaida.
 * Funkcija klaidos atveju grąžina false, kitu - true.
 *
 * @param string $field_value išvalyto input'o vertė.
 * @param array $field vieno input'o duomenų masyvas.
 * @return bool
 */
function validate_age(string $field_value, array &$field): bool{
    if ($field_value < 18 || $field_value > 100) {
        $field['error'] = 'Tavo amželis neatitinka standartų, deja';
        return false;
    }

    return true;
}



