<?php

namespace App\AdminModels;

use App\AdminModel;

class CreateNewsPush extends AdminModel
{
    const string SQL = '';

    public function proofIsset($headlineNews, $mainPartNews): bool
    {
        if (isset($headlineNews) && isset($mainPartNews)) {
            return true;
        } else {
            return false;
        }
    }

    public function formNewsIsEmpty($headlineNews, $mainPartNews): bool
    {
        if (!empty($headlineNews) && !empty($mainPartNews)) {
            return true;
        } else {
            return false;
        }
    }

    public function validateNewsTitle($headlineNews): bool
    {
        $len = mb_strlen($headlineNews, 'utf8');
        if ($len >= 5 && $len <= 250) {
            return true;
        } else {
            return false;
        }
    }

    public function validateNewsLength($mainPartNews): bool
    {
        $len = mb_strlen($mainPartNews, 'utf8');
        if ($len >= 600 && $len <= 1500) {
            return true;
        } else {
            return false;
        }
    }

    /**
     *   Проверяем способ отправки данных из формы на соответствию методу POST
     * со страницы  createNews.pnp
     **/
    public function validateMethodPost(): bool
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param bool $validateMethodPost
     * @return void
     * Принимает булево значение, если условие true, продолжаем валидацию входящих данных из формы.
     * Если false, генерируем страниццу и указываем ошибку.
     */
    public function predicateMethodPost(bool $validateMethodPost): void
    {
        if ($validateMethodPost !== true) {

        } else {

        }

    }
}
