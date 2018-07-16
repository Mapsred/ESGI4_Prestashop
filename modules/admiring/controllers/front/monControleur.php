<?php
/** @noinspection PhpUndefinedClassInspection */

include_once _PS_MODULE_DIR_ . 'admiring/classes/AdmiringComment.php';

class admiringMoncontroleurModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();
        $this->initList();
        $this->setTemplate('module:admiring/views/templates/front/list.tpl');
    }

    public $product;

    public function initList()
    {

        // création de l'objet Product
        $id_product = Tools::getValue('id_product');
        $this->product = new Product((int)$id_product, false, $this->context->cookie->id_lang);


        // Récupération du nombre de commentaires
        $nb_comments = AdmiringComment::countByProductId(Tools::getValue('id_product'));

        //PAGINATION

        $nb_per_page = 10;
        $nb_pages = ceil($nb_comments / $nb_per_page);
        $page = Tools::getValue('page') != '' ? (int)Tools::getValue('page') : 1;

        $limit_start = ($page - 1) * $nb_per_page;
        $limit_end = $nb_per_page;
        $comments = AdmiringComment::findByProductIdLimit((int)$this->product->id, $limit_start, $limit_end);

        // envoyer les commentaires et le produit au smarty
        $this->context->smarty->assign('product', $this->product);
        $this->context->smarty->assign('comments', $comments);

        // envoyer la page courante et le nombre de pages au smarty
        $this->context->smarty->assign('pageEnCours', $page);
        $this->context->smarty->assign('nb_pages', $nb_pages);
    }

}