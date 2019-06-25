<?php

use aiqiu506\sender\Sender;

$sender=new Sender();
//Sender::registerStation("test", new MyStation());

  $re=$sender->setName("loginSuccess")->setStation('sms')->setSendTo("13048862399")->setParams(['code'=>1111])->send();