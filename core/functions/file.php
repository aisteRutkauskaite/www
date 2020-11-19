<?php
/**
 * Save array to file in JSON format
 *
 * @param array $array
 * @param string $file_name
 * @return bool
 */
function array_to_file($array, $file_name) {
    $data = json_encode($array);
    $files = file_put_contents($file_name, $data);
    return $files !== false;
}

/**
 * Gets file and decodes it back to array
 *
 * @param string $file_path
 */
function file_to_array(string $file_path) {
    if (file_exists($file_path)) {
        $data = file_get_contents($file_path);
        if ($data !== false) {
            return json_decode($data, true) ?? [];
        }
        return [];
    }
    return false;
}
