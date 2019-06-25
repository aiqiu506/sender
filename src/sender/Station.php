<?php
/**
 * Created by PhpStorm.
 * User: intro
 * Date: 2019-06-04
 * Time: 23:39
 */

namespace aiqiu506\sender;

abstract class  Station
{
    public $to;
    public $content;
    public $businessName = "";
    public $params = "";

    /**
     * @throws ParamsErrorException
     */
    public function send()
    {
        $this->beforeSend();
        $this->invoke();
        $this->sendSuccess();
    }


    /**发送前检测
     * @throws ParamsErrorException
     */
    public function beforeSend()
    {
        if(!$this->to){
            throw new ParamsErrorException("缺少发送对象");
        }
        if(!$this->businessName){
            throw new ParamsErrorException("缺少业务名称");
        }


    }

    public function setSendTo($to)
    {
        $this->to=$to;

    }

    public function setParams($params)
    {
        $this->params=$params;

    }

    public function setName($name)
    {
      $this->businessName=$name;

    }

    //发送
    abstract function invoke();

    //发送成功
    public function sendSuccess()
    {
        //写入日志
    }

    public function getTemplateByType($type){

    }

    public function getTemplateParams($tplContent, $paramsReg = null){

    }

    protected function getContent($paramsContent, $tplContent, $paramsReg = null)
    {
        return preg_replace_callback($paramsReg ?? '/\{(.*)\}/', function ($m) use ($paramsContent) {
            return $paramsContent[ltrim(rtrim($m[0], "}"), "{")];
        }, $tplContent);
    }
}




