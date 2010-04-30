<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class webservice{

    /* CONSTRUCTOR
     **************************************************************************/
    function  __construct() {
        $this->CI =& get_instance();        
    }

    /* PRIVATE PROPERTIES
     **************************************************************************/
    private $CI;

    /* PUBLIC FUNCTIONS
     **************************************************************************/
    public function get_cotizacion(){
        // URL banco nacion
        $url = "http://www.bna.com.ar/bp/bp_cotizaciones.asp?op=m";

        // regexp para buscar los valores
        $regexp = '/<td class="linksazul" align="center">([0-9]\.[0-9]{4})<\/td>/';

        // cache de n * 60 segundos, ajustable... 6 horas en este caso
        $cache_time =  6 * 60 * 60;

        // archivo de cache de divisas
        $cache_file = './cache/divisas.cache.txt';

        if( file_exists($cache_file) && (time() - $cache_time) < filemtime($cache_file) ){
            $cache = file_get_contents($cache_file);
            $data = unserialize($cache);
            return $data;

        } else {
            $html = file_get_contents($url);
            if( preg_match_all($regexp, $html, $matches) ) {
                $val = array();
                $val['dolar_compra'] = substr($matches[1][0], 0, -2);
                $val['dolar_venta']  = substr($matches[1][1], 0, -2);
                $val['libra_compra'] = substr($matches[1][2], 0, -2);
                $val['libra_venta'] = substr($matches[1][3], 0, -2);
                $val['euro_compra']  = substr($matches[1][4], 0, -2);
                $val['euro_venta']  = substr($matches[1][5], 0, -2);
                $serialized = serialize($val);
                $fh = fopen($cache_file, 'w+');
                if( $fh ){
                    fwrite($fh, $serialized);
                    fclose($fh);
                }
                return $val;
            } else return FALSE;
        }
    }

    public function get_clima($code){
        //error_reporting(E_ALL & ~E_DEPRECATED);

        require(APPPATH .'libraries/Simplepie.php');
        require(APPPATH .'libraries/simplepie_yahoo_weather.php');

        $path = "http://weather.yahooapis.com/forecastrss?u=c&p=";

        $feed = new SimplePie();
        $feed->set_feed_url($path.$code);
        $feed->set_item_class('SimplePie_Item_YWeather');
        $feed->init();

        $weather = $feed->get_item(0);
        $fore = $weather->get_forecasts();
        $ampm = "n";
        $icon = $weather->get_condition_code();
        $unit = $weather->get_units_temp();
        $curday = 2*60 + $this->time2minuts(date("g:i a"));
        $iniday = $this->time2minuts($weather->get_sunrise());
        $endday = $this->time2minuts($weather->get_sunset());

        if( $curday > $iniday && $curday < $endday ) $ampm = "d";

        return array(
            'temp_current' => $weather->get_temperature()." &deg;".$unit,
            'temp_low'     => $fore[0]->get_low()." &deg;".$unit,
            'temp_high'    => $fore[0]->get_high()." &deg;".$unit,
            'icon'         => 'http://l.yimg.com/us.yimg.com/i/us/nws/weather/gr/'. $icon.$ampm .'.png',
            'humidity'     => $weather->get_humidity()." %"
        );
    }

    /* PRIVATE FUNCTIONS
     **************************************************************************/
    private function time2minuts($time) {
        $minuts = 0;
        $atime = explode(" ", $time);
        if( strtolower($atime[1]) == "pm" ) $minuts = 12*60;
        $ttime = explode(":", $atime[0]);
        $minuts = $minuts + (int)$ttime[0]*60 + (int)$ttime[1];        
        return $minuts;
    }


}
?>