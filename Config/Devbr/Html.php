<?php
/**
 * Config\Devbr\Html
 * PHP version 7
 *
 * @category  Html
 * @package   Config
 * @author    Bill Rocha <prbr@ymail.com>
 * @copyright 2016 Bill Rocha <http://google.com/+BillRocha>
 * @license   <https://opensource.org/licenses/MIT> MIT
 * @version   GIT: 0.0.2
 * @link      https://github.com/devbr/
 */

namespace Config\Devbr;

/**
 * Config\Devbr\Html Class
 *
 * @category Html
 * @package  Config
 * @author   Bill Rocha <prbr@ymail.com>
 * @license  <https://opensource.org/licenses/MIT> MIT
 * @link     https://github.com/devbr
 */
class Html
{
    private $name =             'default';
    private $cached =           false;
    private $mode =             'dev'; //pro|dev

    private $pathHtml =         '';
    private $pathHtmlCache =    '';
    private $pathWww =          '';
    private $pathStyle =        '';
    private $pathScript =       '';

    private $header =           null;
    private $footer =           null;

    private $forceCompress =    false;
    private $tag =              'x:';


    /**
     * Boot settings
     */
    function __construct()
    {
        $this->pathWww  = defined('_PHPPATH') ? _PHPPATH : dirname(dirname(dirname(__DIR__)));
        $this->pathHtml = defined('_HTMLPATH') ? _HTMLPATH: __DIR__.'/Html';
        
        $this->pathHtmlCache = $this->pathHtml.'/cache/';
        $this->pathStyle = $this->pathWww.'/css/';
        $this->pathScript = $this->pathWww.'/js/';

        $this->header = $this->pathHtml.'/header.html';
        $this->footer = $this->pathHtml.'/footer.html';
    }

    /*
     * Return all parameters
     */
    public function getParams()
    {
        foreach ($this as $k => $v) {
            $cfg[$k] = $v;
        }
        return $cfg;
    }
}
