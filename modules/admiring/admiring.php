<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class Admiring extends Module
{
    public function __construct()
    {
        $this->name = 'admiring';
        $this->tab = 'advertising_marketing';
        $this->version = '0.1.0';
        $this->author = 'François MATHIEU';
        $this->displayName = 'Admiring';
        $this->description = 'Avec ce module, vos clients pourront faire quelque chose !';
        $this->bootstrap = true;
        parent::__construct();
    }

    public function processForm()
    {
        if (Tools::isSubmit('submit_admiring_form')) {
            $enable_comments = Tools::getValue('enable_comments');
            Configuration::updateValue('ADMIRING_COMMENTS', $enable_comments);
            $this->context->smarty->assign('confirmation', 'ok');
        }
    }

    public function getContent()
    {
        $this->context->smarty->assign('form', $this->renderForm());
        $this->processForm();

        return $this->fetch(_PS_MODULE_DIR_ . "admiring/views/templates/hook/getContent.tpl");
    }

    /**
     * @return array
     */
    private function getFormFields()
    {
        return [
            'form' => [
                'legend' => [
                    'title' => $this->l('My Module configuration'),
                    'icon' => 'icon-envelope'
                ],
                'input' => [
                    [
                        'type' => 'switch',
                        'label' => $this->l('Enable grades:'),
                        'name' => 'enable_grades',
                        'desc' => $this->l('Enable grades on products.'),
                        'values' => [
                            [
                                'id' => 'enable_grades_1',
                                'value' => 1,
                                'label' => $this->l('Enabled')
                            ],
                            [
                                'id' => 'enable_grades_0',
                                'value' => 0,
                                'label' => $this->l('Disabled')
                            ]
                        ]
                    ],
                    [
                        'type' => 'switch',
                        'label' => $this->l('Enable comments:'),
                        'name' => 'enable_comments',
                        'desc' => $this->l('Enable comments on products.'),
                        'values' => [
                            [
                                'id' => 'enable_comments_1',
                                'value' => 1,
                                'label' => $this->l('Enabled')
                            ],
                            [
                                'id' => 'enable_comments_0',
                                'value' => 0,
                                'label' => $this->l('Disabled')
                            ]
                        ],
                    ],
                ],
                'submit' => [
                    'title' => $this->l('Save'),
                ]
            ],
        ];
    }

    /**
     * @return string
     */
    private function renderForm()
    {
        $helper = new HelperForm();
        $helper->table = 'admiring_comments';
        $helper->default_form_language = (int)Configuration::get('PS_LANG_DEFAULT');
        $helper->allow_employee_form_lang = (int)Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG');
        $helper->submit_action = 'submit_admiring_form';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false) .
            '&configure=' . $this->name . '&tab_module=' . $this->tab . '&module_name=' . $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = [
            'fields_value' => [
                'enable_grades' => Tools::getValue('enable_grades', Configuration::get('ADMIRING_GRADES')),
                'enable_comments' => Tools::getValue('enable_comments',
                    Configuration::get('ADMIRING_COMMENTS')),
            ],
            'languages' => $this->context->controller->getLanguages()
        ];

        return $helper->generateForm([$this->getFormFields()]);
    }
}
