<?php
/**
 * Created by PhpStorm.
 * User: intro
 * Date: 2019-06-04
 * Time: 23:39
 */
namespace aiqiu506\sender;
/** 定义发送者接口，用于规范需要实现的方法
 * Interface Sender
 */
abstract class  Station
{
       //发送前
        public function beforeSend(){
        	$this->setSendTo($to)
        
        }
        abstract function setSendTo($to);
         //发送
        }
        }
        public function send();
        //发送成功
        public function sendSuccess();
}




