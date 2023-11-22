<?php

if (!function_exists('formatRupiah')) {
    function rupiah($angka)
    {
        $rupiah = "Rp " . number_format($angka, 0, ',', '.');
        return $rupiah;
    }
}
if (!function_exists('formatRupiah')) {
    function rupiahx2($angka)
    {
        $data = $angka * 2;
        $rupiah = "Rp " . number_format($data, 0, ',', '.');
        return $rupiah;
    }
}

if (!function_exists('storageProductUrl')) {
    function storageRoute($filename)
    {
        return asset("storage/{$filename}");
    }
}

if (!function_exists('formatCategories')) {
    function formatCategories($categories)
    {
        $result = '';

        foreach ($categories as $key => $value) {
            $result .= $value->name;

            // Add a comma after each element except the last one
            if ($key < count($categories) - 1) {
                $result .= ', ';
            }
        }

        return $result;
    }
}
if (!function_exists('formatTags')) {
    function formatTags($tags)
    {
        $result = '';

        foreach ($tags as $key => $value) {
            $result .= $value->name;

            // Add a comma after each element except the last one
            if ($key < count($tags) - 1) {
                $result .= ', ';
            }
        }

        return $result;
    }
}

