<?php
class Sender extends BaseSender{

   public  static setStation(array $stations){

   	foreach ($stations  as $k =>$v) {
		   		
   			parrent::setStation($v);

   	}
   	static::$stationArr['']

   	return self;

   }

   public 


}