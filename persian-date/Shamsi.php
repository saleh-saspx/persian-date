<?php
// full package => http://jdf.scr.ir/rahnama/?t=jdate
// github => https://github.com/mims77/persian-date
namespace iraninShamsi;
require ('jdf.php');
class Shamsi
{
    public $type;
    function shamsi(){
        switch ($this->type){
            case 'normal': echo jdate('Y/m/d');break; // show year and month and day //  1396/04/18
            case 'year': echo jdate('Y');break; // show year //  1396
            case 'year2': echo jdate('y');break; // show year type2 //  96
            case 'month': echo jdate('m');break; // show month type //  04
            case 'month-name': echo jdate('F');break; // show month name // tir
            case 'day-name': echo jdate('I');break; // show day name // DuShanbe
            case 'summary': echo jdate('a');break; // show the day of the day in summary // ب.ظ
            case 'time-zone': echo jdate('e');break; // show the time zone for setting global clock differences. // Asia/Tehran
            case 'season': echo jdate('f');break; // show the name of the season is from Farsi // "بهار" یا "تابستان" یا "پاییز" یا "زمستان"
            case 'hours': echo jdate('g');break; // Show hours per day //  12
            case 'minutes': echo jdate('i');break; // Show minutes per hour // 59
            case 'seconds': echo jdate('s');break; // Show seconds per minute // 60
            case 'year-name': echo jdate('V F J');break;  // show year and month and day name //
            case 'time': echo jdate('H:i:s');break; // show time from H:i:s // 12:59:60
            case 'date-season': echo jdate('Y/F/j');break; // show date from season name // 1396/tir/18
            case 'date-time-zone': echo jdate('c');break; // 1396/4/18,12:59:60, +3:30
            case 'fix-server': echo jdate('H:i:s',time()-147);break; //Fix server time error

        }
    }
}
class convert{
    function from_gregorian($y,$m,$d){echo gregorian_to_jalali($y,$m,$d,'/');}
    function from_shamsi($y,$m,$d){echo jalali_to_gregorian($y,$m,$d,'/');}
}