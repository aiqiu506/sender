<?php
namespace aiqiu506\sender;


class SiteMsgStation extends Station{

    public $uid;
    public $to;
    public $content;
    public $data;
    public $sendResult = false;

    function setSendTo($to)
    {
       $this->to=$to;

    }

    function setParams($params)
    {

    }

    function setName($name)
    {

    }

    function send()
    {
        // TODO: Implement send() method.
    }

    function getTemplateByType($type)
    {
        // TODO: Implement getTemplateByType() method.
    }

    function getTemplateParams($tplContent, $paramsReg = null)
    {
        // TODO: Implement getTemplateParams() method.
    }
}