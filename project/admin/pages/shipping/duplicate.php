<?php
/**
 * Duplicate
 * Страница дублирования
 *
 * PHP version 7.3.11
 *
 * @category PHP
 * @package  DARKET
 * @author   Алексей <alexeyheather@gmail.com>
 * @license  https://github.com/Infvmous/htdocs/blob/master/README.md BSD Licence
 * @link     https://darket-shop.ru/panel/shipping/duplicate.html
 */
if ($objShipping->duplicateType($id)) {
    echo Helper::json(array('error' => false));
} else {
    throw new Exception('Запись не может быть клонирована');
}