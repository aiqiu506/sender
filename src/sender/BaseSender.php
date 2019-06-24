<?php
  /**
   * 
   */
 namespace aiqiu506\sender;
  
  abstract class BaseSender 
  {

  	public function __construct(){
  		// 注册默认的station
  		self::$stationArr['sms']=SmsStation::class;
  		self::$stationArr['app']=AppStation::class; //采用jpush方式
  		self::$stationArr['siteMsg']=SiteStation::class;
  	}

  	
  	protected static $stationArr=[];

  	//用于扩展自定义的static 
  	public static registerStation($name,Station $station){
  		if(!isset(self::$stationArr[$name])){
			self::$stationArr[$name]=$stationArr;
  		}

  	}
 	
 	//激活station
 	protected static  function setStation(array $a){

 		foreach ($self::$stationArr as $key => $v) {
				  if(strtolower($key)==strtolower($a)){
				  		$self::$stationArr[$key]=new $v;
				  }
  			}	

 	}
  	public static send(){
  		foreach ($self::$stationArr as $key => $v) {
  				if(is_callable($v)){
  					$v->send();
  				}
  				
  			}	
  	}



  }