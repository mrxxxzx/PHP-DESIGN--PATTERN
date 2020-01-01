<?php

abstract class Template {

    protected $_config = '';

    protected $_text = '';

    abstract function init($config);

    final function __construct($config)
    {
      // 初始化配置
      $this->init($config);
    }

    abstract function do();

}