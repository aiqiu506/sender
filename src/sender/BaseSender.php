<?php
  /**
   * 
   */
 namespace aiqiu506\sender;
  
  abstract class BaseSender 
  {
    protected static $stationArr=[];
    public static $businessName="";
    public static $sendTo=[];
    public static $params="";

  	public function __construct(){
  		// 注册默认的station
  		self::$stationArr['sms']=SmsStation::class;
  		self::$stationArr['app']=AppStation::class;
  		self::$stationArr['siteMsg']=SiteMsgStation::class;
  	}

  	//用于扩展自定义的station
  	public static function registerStation($name,Station $station){
        self::$stationArr[$name]=$station;
  	}
 	
 	//激活station
 	protected static  function activateStation(string $a){
 		foreach (self::$stationArr as $key => $v) {
				  if(strtolower($key)==strtolower($a)){
				  		self::$stationArr[$key]=new $v;
				  		return false;
				  }
  			}	
        return false;
 	}
 	private function checkSetting(){
  	    return count(self::$stationArr)==count(self::$sendTo)?true:false;
    }
  	public function send(){
  	    //检查设置是否有误
        $this->checkSetting();

  		foreach (self::$stationArr as $key => $v) {
  				if($v instanceof Station){
  					$v->setName(self::$businessName);
  					$v->setSendTo(self::$sendTo);
  					$v->setParams(self::$params);
                    $v->send();
  				}
  				
  			}	
  	}

  }