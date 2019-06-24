<?php
  
  $sender=new Sender();

  $sender->setName("loginSuccess")->setSendTo("13048862399")->setParams(['code'=>1111])->setStation(['sms','e_mail'])->send();