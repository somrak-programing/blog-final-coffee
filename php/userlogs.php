 <?php
    require_once 'mobile_detect.php';
    require_once 'connect.php';
    $page = basename($_SERVER['SCRIPT_FILENAME'],".php");
    if($page == 'userlogs'){
        header('location: ../index.php');
    }
    
    $detect = new Mobile_Detect;

    $deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
    $scriptVersion = $detect->getScriptVersion();


    $iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
    $iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
    $iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
    $Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
    $webOS   = stripos($_SERVER['HTTP_USER_AGENT'],"webOS");
    $msie = strpos($_SERVER["HTTP_USER_AGENT"], 'MSIE');
    $firefox = strpos($_SERVER["HTTP_USER_AGENT"], 'Firefox');

    $user_agent     =   $_SERVER['HTTP_USER_AGENT'];
    function getOS() { 
        global $user_agent;
        $os_platform    =   "Unknown OS Platform";
        $os_array       =   array(
                                '/windows nt 10/i'     =>  'Windows 10',
                                '/windows nt 6.3/i'     =>  'Windows 8.1',
                                '/windows nt 6.2/i'     =>  'Windows 8',
                                '/windows nt 6.1/i'     =>  'Windows 7',
                                '/windows nt 6.0/i'     =>  'Windows Vista',
                                '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                                '/windows nt 5.1/i'     =>  'Windows XP',
                                '/windows xp/i'         =>  'Windows XP',
                                '/windows nt 5.0/i'     =>  'Windows 2000',
                                '/windows me/i'         =>  'Windows ME',
                                '/win98/i'              =>  'Windows 98',
                                '/win95/i'              =>  'Windows 95',
                                '/win16/i'              =>  'Windows 3.11',
                                '/macintosh|mac os x/i' =>  'Mac OS X',
                                '/mac_powerpc/i'        =>  'Mac OS 9',
                                '/linux/i'              =>  'Linux',
                                '/ubuntu/i'             =>  'Ubuntu',
                                '/iphone/i'             =>  'iPhone',
                                '/ipod/i'               =>  'iPod',
                                '/ipad/i'               =>  'iPad',
                                '/android/i'            =>  'Android',
                                '/blackberry/i'         =>  'BlackBerry',
                                '/webos/i'              =>  'Mobile'
                            );

        foreach ($os_array as $regex => $value) { 

            if (preg_match($regex, $user_agent)) {
                $os_platform    =   $value;
            }
        }   
        return $os_platform;
    }

    $user_os = getOS();

    if( $iPhone ){
        $device = "iPhone";
        if($detect->is('Chrome')) {
            $browser = "Chrome";
          
        }
        if($detect->is('Safari')) {
            $browser = "Safari";
          
        }else{
            $browser = "other browsers";
        }

    }else if($detect->version('iPad')) {
        $device = "iPad";
        if($detect->is('Chrome')) {
            $browser = "Chrome";
          
        }else if($detect->is('Safari')) {
            $browser = " Safari";
        }else{
            $browser = "other browsers";
        }

    }else if($Android){
        $device = "Android Phone";

        if($detect->is('Chrome')) {
            $browser = "Chrome";
        }else{
            $browser = 'other browsers';
        }
    }else{
        $device = "Computer";
        if(strpos($_SERVER['HTTP_USER_AGENT'],"Chrome") !== FALSE){
            $browser = "Chrome";
           
        }else if(strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') !== FALSE){
            $browser = "Safari";
        }else{
            if ($msie) {
                $browser = 'ie';
            }else if ($firefox) {
                $browser = 'firefox';
            }else{
                $browser = 'other browsers';
            }
        }
    }

    $sql = "INSERT INTO `userlogs` (`ip`, `device`, `os`, `browser`, `page`, `created_at`) 
            VALUES ('".$_SERVER['REMOTE_ADDR']."',
                '".$device."', 
                '".$user_os."', 
                '".$browser."', 
                '".$page."',
                '".date("Y-m-d H:i:s")."');"; 
    $result = $conn->query($sql) or die($conn->error);
?>


