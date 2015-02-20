<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
if (!function_exists('admin_url')) {

    function admin_url($path = '') {
        return site_url(ADMIN_PATH . '/' . $path);
    }

    if (!function_exists('admin_image_url')) {

        function admin_image_url() {
            return base_url() . 'assets/images/';
        }

    }

    if (!function_exists('br')) {

        function br() {
            return '<br/>';
        }

    }

//    if (!function_exists('manager_url')) {
//
//        function manager_url($path = '') {
//            return site_url(MANAGER_PATH . '/' . $path);
//        }
//
//    }
}

function my_date($date){
    return date('Y-m-d H:i:s',$date);
}
function hr(){
return "<hr/>";
    
}

function getStartAndEndDate($week, $year)
{

    $time = strtotime("1 January $year", time());
    $day = date('w', $time);
    $time += ((7*$week)+1-$day)*24*3600;
    $return[0] = date('Y-n-j', $time);
    $time += 6*24*3600;
    $return[1] = date('Y-n-j', $time);
    return $return;
}
 function getWeeks($timestamp)
{
    $maxday    = date("t",$timestamp);
    $thismonth = getdate($timestamp);
    $timeStamp = mktime(0,0,0,$thismonth['mon'],1,$thismonth['year']);    //Create time stamp of the first day from the give date.
    $startday  = date('w',$timeStamp);    //get first day of the given month
    $day = $thismonth['mday'];
    $weeks = 0;
    $week_num = 0;

    for ($i=0; $i<($maxday+$startday); $i++) {
        if(($i % 7) == 0){
            $weeks++;
        }
        if($day == ($i - $startday + 1)){
            $week_num = $weeks;
        }
      }     
    return $week_num;
}


function get_month_weeks($year, $month){

    $days_in_month = date("t", mktime(0, 0, 0, $month, 1, $year));
    $weeks_in_month = 1;
    $weeks = array();

    //loop through month
    for ($day=1; $day<=$days_in_month; $day++) {

        $week_day = date("w", mktime(0, 0, 0, $month, $day, $year));//0..6 starting sunday

        $weeks[$weeks_in_month][$week_day] = $day;

        if ($week_day == 6) {
            $weeks_in_month++;
        }

    }

    return $weeks;

}
?>
