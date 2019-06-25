<?php
namespace aiqiu506\sender;

class Sender extends BaseSender {

    public function setName($name){
        if(!static::$businessName){
            static::$businessName=$name;
        }
        return $this;
    }

    public function setSendTo($to){
        static::$sendTo[]=$to;
        return $this;
    }
    public function setParams($params){
        static::$params=$params;
        return $this;
    }

    public function setStation($station){
        if(static::activateStation($station)){
            return $this;
        }else{
            //不存在，要报错
            return false;
        }


    }

}