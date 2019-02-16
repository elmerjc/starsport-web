<?php
/**
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA

*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

use PrestaShop\PrestaShop\Core\Module\WidgetInterface;

require_once _PS_MODULE_DIR_.'ttcmssubbanner/classes/ttcmssubbannerinfo.php';

class Ttcmssubbanner extends Module implements WidgetInterface
{
    private $templateFile;

    public function __construct()
    {
        $this->name = 'ttcmssubbanner';
		$this->tab = 'front_office_features';
        $this->author = 'TemplateTrip';
        $this->version = '1.0.5';
        $this->need_instance = 0;

        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->trans('TT - CMS Sub Banner block', array(), 'Modules.CustomText');
        $this->description = $this->trans('Integrates custom text blocks anywhere in your store front', array(), 'Modules.CustomText');

        $this->ps_versions_compliancy = array('min' => '1.7.0.0', 'max' => _PS_VERSION_);

        $this->templateFile = 'module:ttcmssubbanner/views/templates/hook/ttcmssubbanner.tpl';
    }

    public function install()
    {
        return  parent::install() &&
            $this->installDB() &&
            $this->registerHook('displayHome') &&
            $this->installFixtures();
    }

    public function uninstall()
    {
        return parent::uninstall() && $this->uninstallDB();
    }

    public function installDB()
    {
        $return = true;
        $return &= Db::getInstance()->execute('
                CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'ttsubbannerinfo` (
                `id_ttsubbannerinfo` INT UNSIGNED NOT NULL AUTO_INCREMENT,
                `id_shop` int(10) unsigned DEFAULT NULL,
                PRIMARY KEY (`id_ttsubbannerinfo`)
            ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8 ;'
        );

        $return &= Db::getInstance()->execute('
                CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'ttsubbannerinfo_lang` (
                `id_ttsubbannerinfo` INT UNSIGNED NOT NULL,
                `id_lang` int(10) unsigned NOT NULL ,
                `text` text NOT NULL,
                PRIMARY KEY (`id_ttsubbannerinfo`, `id_lang`)
            ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8 ;'
        );

        return $return;
    }

    public function uninstallDB($drop_table = true)
    {
        $ret = true;
        if ($drop_table) {
            $ret &=  Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'ttsubbannerinfo`') && Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'ttsubbannerinfo_lang`');
        }

        return $ret;
    }

    public function getContent()
    {
        $output = '';

        if (Tools::isSubmit('savettcmssubbanner')) {
            if (!Tools::getValue('text_'.(int)Configuration::get('PS_LANG_DEFAULT'), false)) {
                $output = $this->displayError($this->trans('Please fill out all fields.', array(), 'Admin.Notifications.Error')) . $this->renderForm();
            } else {
                $update = $this->processSaveCustomText();

                if (!$update) {
                    $output = '<div class="alert alert-danger conf error">'
                        .$this->trans('An error occurred on saving.', array(), 'Admin.Notifications.Error')
                        .'</div>';
                }

                $this->_clearCache($this->templateFile);
            }
        }

        return $output.$this->renderForm();
    }

    public function processSaveCustomText()
    {
        $info = new ttcmssubbannerinfo(Tools::getValue('id_ttsubbannerinfo', 1));

        $text = array();
        $languages = Language::getLanguages(false);
        foreach ($languages as $lang) {
            $text[$lang['id_lang']] = Tools::getValue('text_'.$lang['id_lang']);
        }

        $info->text = $text;

        if (Shop::isFeatureActive() && !$info->id_shop) {
            $saved = true;
            $shop_ids = Shop::getShops();
            foreach ($shop_ids as $id_shop) {
                $info->id_shop = $id_shop;
                $saved &= $info->add();
            }
        } else {
            $saved = $info->save();
        }

        return $saved;
    }

    protected function renderForm()
    {
        $default_lang = (int)Configuration::get('PS_LANG_DEFAULT');

        $fields_form = array(
            'tinymce' => true,
            'legend' => array(
                'title' => $this->trans('CMS block', array(), 'Modules.CustomText'),
            ),
            'input' => array(
                'id_info' => array(
                    'type' => 'hidden',
                    'name' => 'id_info'
                ),
                'content' => array(
                    'type' => 'textarea',
                    'label' => $this->trans('Text block', array(), 'Modules.CustomText'),
                    'lang' => true,
                    'name' => 'text',
                    'cols' => 40,
                    'rows' => 10,
                    'class' => 'rte',
                    'autoload_rte' => true,
                ),
            ),
            'submit' => array(
                'title' => $this->trans('Save', array(), 'Admin.Actions'),
            ),
            'buttons' => array(
                array(
                    'href' => AdminController::$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules'),
                    'title' => $this->trans('Back to list', array(), 'Admin.Actions'),
                    'icon' => 'process-icon-back'
                )
            )
        );

        if (Shop::isFeatureActive() && Tools::getValue('id_ttsubbannerinfo') == false) {
            $fields_form['input'][] = array(
                'type' => 'shop',
                'label' => $this->trans('Shop association', array(), 'Admin.Global'),
                'name' => 'checkBoxShopAsso_theme'
            );
        }


        $helper = new HelperForm();
        $helper->module = $this;
        $helper->name_controller = 'ttcmssubbanner';
        $helper->identifier = $this->identifier;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        foreach (Language::getLanguages(false) as $lang) {
            $helper->languages[] = array(
                'id_lang' => $lang['id_lang'],
                'iso_code' => $lang['iso_code'],
                'name' => $lang['name'],
                'is_default' => ($default_lang == $lang['id_lang'] ? 1 : 0)
            );
        }

        $helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;
        $helper->default_form_language = $default_lang;
        $helper->allow_employee_form_lang = $default_lang;
        $helper->toolbar_scroll = true;
        $helper->title = $this->displayName;
        $helper->submit_action = 'savettcmssubbanner';

        $helper->fields_value = $this->getFormValues();

        return $helper->generateForm(array(array('form' => $fields_form)));
    }

    public function getFormValues()
    {
        $fields_value = array();
        $id_info = 1;

        foreach (Language::getLanguages(false) as $lang) {
            $info = new ttcmssubbannerinfo((int)$id_info);
            $fields_value['text'][(int)$lang['id_lang']] = $info->text[(int)$lang['id_lang']];
        }

        $fields_value['id_info'] = $id_info;

        return $fields_value;
    }

    public function renderWidget($hookName, array $configuration)
    {
        if (!$this->isCached($this->templateFile, $this->getCacheId('ttcmssubbanner'))) {
            $this->smarty->assign($this->getWidgetVariables($hookName, $configuration));
        }

        return $this->fetch($this->templateFile, $this->getCacheId('ttcmssubbanner'));
    }
    public function getWidgetVariables($hookName, array $configuration)
    {
        $sql = 'SELECT r.`id_ttsubbannerinfo`, r.`id_shop`, rl.`text`
            FROM `'._DB_PREFIX_.'ttsubbannerinfo` r
            LEFT JOIN `'._DB_PREFIX_.'ttsubbannerinfo_lang` rl ON (r.`id_ttsubbannerinfo` = rl.`id_ttsubbannerinfo`)
            WHERE `id_lang` = '.(int)$this->context->language->id.' AND  `id_shop` = '.(int)$this->context->shop->id;

        return array(
            'cms_infos' => Db::getInstance()->getRow($sql),
        );
    }

    public function installFixtures()
    {
        $return = true;
        $tab_texts = array(
            array(
                'text' => '<div class="ttsubbannerblock container">
<div class="row">
<div class="ttsubbanner1 ttbanner col-xs-6 col-sm-6">
<div class="ttsubbanner-img"><a href="#"><img src="../img/cms/subbanner-1.jpg" alt="subbanner-1.jpg" /><span class="hover hover1">test</span> <span class="hover hover2">test</span> <span class="hover hover3">test</span> <span class="hover hover4">test</span></a></div>
</div>
<div class="ttsubbanner2 ttbanner col-xs-6 col-sm-6">
<div class="ttsubbanner-img"><a href="#"><img src="../img/cms/subbanner-2.jpg" alt="subbanner-2.jpg" /><span class="hover hover1">test</span> <span class="hover hover2">test</span> <span class="hover hover3">test</span> <span class="hover hover4">test</span> </a></div>
</div>
</div>
</div>'
            ),
        );

        $shops_ids = Shop::getShops(true, null, true);

        foreach ($tab_texts as $tab) {
            $info = new ttcmssubbannerinfo();
            foreach (Language::getLanguages(false) as $lang) {
                $info->text[$lang['id_lang']] = $tab['text'];
            }
            foreach ($shops_ids as $id_shop) {
                $info->id_shop = $id_shop;
                $return &= $info->add();
            }
        }

        return $return;
    }
}