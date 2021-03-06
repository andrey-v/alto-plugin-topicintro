<?php
/*---------------------------------------------------------------------------
 * @Project: Alto CMS
 * @Project URI: http://altocms.com
 * @Description: Advanced Community Engine
 * @Copyright: Alto CMS Team
 * @License: GNU GPL v2 & MIT
 *----------------------------------------------------------------------------
 */

class PluginTopicintro extends Plugin {

    protected $aDelegates = array(
        'template' => array(
            'modals/modal.upload_preview.tpl',
        ),
    );

    protected $aInherits = array(
        'entity' => array(
            'ModuleTopic_EntityTopic',
        ),
        'module' => array(
            'ModuleTopic',
        ),
        'action' => array(
            'ActionContent',
            'ActionAjax',
        ),
    );

    /**
     * Активация плагина
     */
    public function Activate() {

        return true;
    }

    /**
     * Инициализация плагина
     */
    public function Init() {

        //$this->Viewer_AppendScript(Plugin::GetTemplateDir(__CLASS__) . 'assets/js/script.js');
        $this->Viewer_AppendScript(Plugin::GetTemplateUrl(__CLASS__) . 'assets/js/script.js');
        $this->Viewer_AppendStyle(Plugin::GetTemplateDir(__CLASS__) . 'assets/css/style.css');
        return true;
    }
}

// EOF