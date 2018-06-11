<?php

include_once _PS_MODULE_DIR_ . 'admiring/classes/AdmiringComment.php';

class Search extends SearchCore
{
    public static function find($id_lang, $expr, $page_number = 1, $page_size = 1, $order_by = 'position',
                                $order_way = 'desc', $ajax = false, $use_cookie = true, Context $context = null)
    {
        $find = parent::find($id_lang, $expr, $page_number, $page_size, $order_by, $order_way, $ajax, $use_cookie, $context);

        // AJOUT DES NOTES AU RESULTAT
        if (isset($find['result']) && !empty($find['result']) && Module::isInstalled('admiring')) {

            $findProducts = $find['result'];
            $id_produits = [];
            foreach ($findProducts as $prod) {
                $id_produits[] = $prod['id_product'];
            }

            $requete = "SELECT `id_product`, AVG(`grade`) as grade_avg, COUNT(`id_admiring_comment`) as nb_comments
        FROM `" . _DB_PREFIX_ . "admiring_comment` WHERE `id_product` IN (" . implode(',', $id_produits) . ") GROUP BY `id_product`";
            $productsWithNotation = Db::getInstance()->executeS($requete);


            foreach ($productsWithNotation as $prodNote) {
                $id_prod = $prodNote['id_product'];
                foreach ($findProducts as $kp => $prod) {
                    if ($prod['id_product'] == $id_prod) {
                        $findProducts[$kp]['admiring']['grade_avg'] = $prodNote['grade_avg'];
                        $findProducts[$kp]['admiring']['nb_comments'] = $prodNote['nb_comments'];
                    }
                }

            }

            $find['result'] = $findProducts;
        }

        return $find;
    }

}