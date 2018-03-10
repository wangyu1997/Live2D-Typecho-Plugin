<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;?>
<?php
/**
 * 把可爱的 Pio 捉到博客上吧！
 *  
 * 
 * @package Live2D
 * @author 熊猫小A
 * @version 1.0
 * @link https://imalan.cn
 */

define('Live2D_Plugin_VERSION', '1.0');
class Live2D_Plugin implements Typecho_Plugin_Interface
{   
    /**
     * 激活插件方法,如果激活失败,直接抛出异常
     * 
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function activate()
    {
        Typecho_Plugin::factory('Widget_Archive')->header = array('Live2D_Plugin', 'header');
        Typecho_Plugin::factory('Widget_Archive')->footer = array('Live2D_Plugin', 'footer');
    }
    
    /**
     * 禁用插件方法,如果禁用失败,直接抛出异常
     * 
     * @static
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function deactivate(){}
   
    /**
     * 获取插件配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form 配置面板
     * @return void
     */
    public static function config(Typecho_Widget_Helper_Form $form){
        $homeURL = new Typecho_Widget_Helper_Form_Element_Textarea('homeURL', NULL, '', _t('主页链接'), _t('主页链接，以“/”结尾'));
        $form->addInput($homeURL);
        $nCustom = new Typecho_Widget_Helper_Form_Element_Textarea('nCustom', NULL, '3', _t('你有多少个模型？'), _t('把模型放在插件目录的Model文件夹下，命名按照 model1.json，model2.json 这样来，在这里填模型总数。默认有三套衣服。'));
        $form->addInput($nCustom);
    }
    
    /**
     * 个人用户的配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form
     * @return void
     */
    public static function personalConfig(Typecho_Widget_Helper_Form $form){}
    
    /**
     * 输出头部css
     * 
     * @access public
     * @return void
     */
    public static function header(){
        echo '
        <link rel="stylesheet" href="/usr/plugins/Live2D/css/live2d.min.css?v='.Live2D_Plugin_VERSION.'" />
        ';
    }

    /**
     * 在底部输出所需 JS
     * 
     * @access public
     * @return void
     */
	public static function footer(){
        self::insertLive2D();
        echo '
            <script type="text/javascript" src="/usr/plugins/Live2D/js/live2d.min.js?v='.Live2D_Plugin_VERSION.'"></script>
            <script type="text/javascript" src="/usr/plugins/Live2D/js/initlive2d.min.js?v='.Live2D_Plugin_VERSION.'"></script>
        ';
    }


    /**
     * 在 Body 标签内插入 Live2D 块
     * @access public
     * @return void
     */
    public static function insertLive2D(){
        $html='<canvas data="'.Typecho_Widget::widget('Widget_Options')->plugin('Live2D')->nCustom.'" id="live2d" class="live2d" width="280" height="250"></canvas>
        <div id="landlord" homeurl="'.Typecho_Widget::widget('Widget_Options')->plugin('Live2D')->homeURL.'">
        <div id="message" class="message"></div>
        <div id="live2d-button-padding"></div>
        <div id="homeButton"><a href="/"><i class="live2d-button glyphicon glyphicon-home"></i></a></div>       
        <div id="changeButton"><i class="live2d-button glyphicon glyphicon-random"></i></div>
        <div id="messageButton"><i onclick="showHitokoto();" class="live2d-button glyphicon glyphicon-comment"></i></div>
        <div id="hideButton"><i class="live2d-button glyphicon glyphicon-remove"></i></div>
        </div>';
        echo $html;
    }
}
?>
