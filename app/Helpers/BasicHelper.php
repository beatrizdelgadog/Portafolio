<?php

use App\Models\Views;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

if (! function_exists('arrayToObject')) {
    /**
     * Convert Array to Object
     *
     * @param $array
     * @return Collection
     */
    function arrayToObject($array): Collection
    {
        $collection = new Collection($array);
        return $collection->toBase();
    }
}

if (! function_exists('setDefaultValue')) {
    /**
     * Set Default Value when not defined
     *
     * @param string $value
     * @return Repository|mixed
     */
    function setDefaultValue(string $value = '')
    {
        if ($value !== '') {
            return $value;
        }

        return setting('api_default_value');
    }
}

if (! function_exists('isHomePage')) {
    /**
     * Check if url is active, then set to active (class)
     *
     * @param $url
     * @return bool
     */
    function isHomePage($url): bool
    {
        return $url === '/';
        //return request()->is($url) ? true : false;
    }
}

if (! function_exists('isActive')) {
    /**
     * Check if url is active, then set to active (class)
     *
     * @param $url
     * @param string $class
     * @return string
     */
    function isActive($url, string $class = 'active'): string
    {
        return request()->is($url) ? $class : '';
    }
}

if (! function_exists('isOpen')) {
    /**
     * Check if url is active, then set to open (class)
     *
     * @param $url
     * @param string $class
     * @return string
     */
    function isOpen($url, string $class = 'menu-open'): string
    {
        return request()->is($url) ? $class : '';
    }
}

if (! function_exists('checkEmptyValues')) {
    /**
     * Check Empty Values from
     *
     * @param array $data
     * @return Collection
     */
    function checkEmptyValues(array $data = []): Collection
    {
        if (empty($data)) {
            return collect([]);
        }

        foreach ($data as $key => $value) {
            if (is_array($value) && count($value) === 0) {
                $data[$key] = setDefaultValue();
            } elseif (! is_array($value) && empty(trim((string)$value) || $value === '')) {
                $data[$key] = setDefaultValue();
            } elseif ($value === null || $value === 'null') {
                $data[$key] = setDefaultValue();
            }
        }

        return arrayToObject($data);
    }
}

if (! function_exists('slug')) {
    /**
     * Convert string to Slug format
     *
     * @param string $string
     * @return string
     */
    function slug(string $string = ''): string
    {
        return Str::slug($string);
    }
}

if (! function_exists('unSlug')) {
    /**
     * Convert Slug to UnSlug format
     *
     * @param string $string
     * @return string
     */
    function unSlug(string $string = ''): string
    {
        return ucwords(str_replace('-', ' ', $string));
    }
}

if (! function_exists('checkSelectedValue')) {
    /**
     * Check value is selected
     *
     * @param $id
     * @param array $array
     * @return bool
     */
    function checkSelectedValue($id, array $array = []): bool
    {
        if ($array !== null) {
            foreach ($array as $selectedPermission) {
                if ($id === (int) $selectedPermission) {
                    return true;
                }
            }
        }

        return false;
    }
}

if (! function_exists('getIdsFrom')) {
    /**
     * Get Ids From Collection
     *
     * @param $collection
     * @return array
     */
    function getIdsFrom($collection): array
    {
        return array_map(static function ($item) {
            return $item[0];
        }, $collection);
    }
}

if (! function_exists('getClientIp')) {
    /**
     * Get Client IP fro Client
     *
     * @return string
     */
    function getClientIp()
    {
        if (getenv('HTTP_CLIENT_IP')) {
            $ipAddress = getenv('HTTP_CLIENT_IP');
        } elseif (getenv('HTTP_X_FORWARDED_FOR')) {
            $ipAddress = getenv('HTTP_X_FORWARDED_FOR');
        } elseif (getenv('HTTP_X_FORWARDED')) {
            $ipAddress = getenv('HTTP_X_FORWARDED');
        } elseif (getenv('HTTP_FORWARDED_FOR')) {
            $ipAddress = getenv('HTTP_FORWARDED_FOR');
        } elseif (getenv('HTTP_FORWARDED')) {
            $ipAddress = getenv('HTTP_FORWARDED');
        } elseif (getenv('REMOTE_ADDR')) {
            $ipAddress = getenv('REMOTE_ADDR');
        } else {
            $ipAddress = config('settings.nullIpAddress');
        }

        return (string) $ipAddress;
    }
}

if (! function_exists('boolean')) {
    /**
     * Check if variable is boolean type
     *
     * @param $variable
     * @return bool
     */
    function boolean($variable): bool
    {
        return filter_var($variable, FILTER_VALIDATE_BOOLEAN);
    }
}

if (! function_exists('convertToCamelCase')) {
    /**
     * Convert to CamelCase
     *
     * @param $string
     * @param string $delimiter
     * @param bool $capitalizeFirstCharacter
     * @return string|string[]
     */
    function convertToCamelCase($string, string $delimiter = '_', bool $capitalizeFirstCharacter = true)
    {
        $str = str_replace($delimiter, '', ucwords($string, $delimiter));

        if (! $capitalizeFirstCharacter) {
            $str = lcfirst($str);
        }

        return $str;
    }
}

if (! function_exists('objectToArray')) {
    /**
     * Convert object to array
     *
     * @param $d
     * @return array|void
     */
    function objectToArray($d)
    {
        if (is_object($d)) {
            // Gets the properties of the given object
            // with get_object_vars function
            $d = get_object_vars($d);
        }

        if (is_array($d)) {
            /*
            * Return array converted to object
            * Using __FUNCTION__ (Magic constant)
            * for recursive call
            */
            return array_map(__FUNCTION__, $d);
        }

        // Return array
        return $d;
    }
}

if (! function_exists('getClassName')) {
    /**
     * Get Class Name Without Namespace
     *
     * @param $class
     * @return mixed
     */
    function getClassName($class)
    {
        $path = explode('\\', $class);
        return array_pop($path);
    }
}

if (! function_exists('makeScripts')) {
    /**
     * Make Scripts
     *
     * @param $attribs
     * @return string
     */
    function makeScripts($attribs): string
    {
        $scripts = '';

        if (in_array($attribs, ['{}', '[]'], true)) {
            return $scripts;
        }

        $page_scripts = json_decode($attribs, false)->scripts;

        if (count($page_scripts) > 0) {
            foreach ($page_scripts as $script) {
                $scripts .= '<script src="' . asset($script) . '"></script>';
            }
        }

        return $scripts;
    }
}


if (! function_exists('json_to_object')) {
    /**
     * json_to_object
     *
     * @param $attribs
     * @return string
     */
    function json_to_object($data) : array
    {
        try {
            $data = json_decode($data);
        } catch (Exception $th) {
            return [];
        }
        return $data ;
    }
}

if (! function_exists('getClientIp')) {

    function getClientIp(){
        foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key){
            if (array_key_exists($key, $_SERVER) === true){
                foreach (explode(',', $_SERVER[$key]) as $ip){
                    $ip = trim($ip); // just to be safe
                    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false){
                        return $ip;
                    }
                }
            }
        }
    }
}
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

if (! function_exists('visitPage')) {
    /**
     * Set ip
     *
     */
    function visitPage()
    {
        $viewsRepository = new Views() ;
        $pageVisited = isset($_COOKIE['is_visited']);
        $visit_id = '-1';
        // dd(getClientIp(), $request->server->get('REMOTE_ADDR'), $request->getClientIp());
        // if (!$pageVisited) {
            $user_agent = $_SERVER['HTTP_USER_AGENT'];
            // $ip = $this->server->get('REMOTE_ADDR');
            $visit_id = $viewsRepository->create(
                [
                    'ip_address'    => getClientIp(),
                    'browser'       => getBrowser($user_agent),
                    'operative_system'=> getOS($user_agent),
                    'user_agent'    => $user_agent,
                    'channel'       => request()->input('channel', 'web')
                ]
            );
            Cookie::queue('is_visited', 'true', 60 * 24 * 365);
        // } 
        return $visit_id;
    }
}

if (! function_exists('setVisitPage')) {
    /**
     * Set ip
     * @param $id
     */
    function setVisitPage($id)
    {
        $item = (new Views)->find($id) ;

        if($item == null)
            abort(404);
        

        if($item->ip_address == '127.0.0.1' || $item->country_code ){
            return;
        }
        $arrContextOptions=array(
            "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ),
        );
        $informacionSolicitud = file_get_contents("http://www.geoplugin.net/json.gp?ip=".$item->ip_address, false, stream_context_create($arrContextOptions));
        $dataSolicitud = json_decode($informacionSolicitud);
        dd($dataSolicitud);
        if($dataSolicitud->geoplugin_status >= 200 && $dataSolicitud->geoplugin_status< 300){
            (new Views )
                ->where('ip_address', $item->ip_address)
                ->whereNull('country_code')
                ->update([
                    'city'  => $dataSolicitud->geoplugin_city ?? null,
                    'region_code'   => $dataSolicitud->geoplugin_regionCode?? null,
                    'region'    => $dataSolicitud->geoplugin_region?? null,
                    'region_name'   => $dataSolicitud->geoplugin_regionName?? null,
                    'country_code'  => $dataSolicitud->geoplugin_countryCode?? null,
                    'country_name'  => $dataSolicitud->geoplugin_countryName?? null,
                    'continent_code'    => $dataSolicitud->geoplugin_continentCode?? null,
                    'continent_name'    => $dataSolicitud->geoplugin_continentName?? null,
                    'latitude'  => $dataSolicitud->geoplugin_latitude?? null,
                    'longitude' => $dataSolicitud->geoplugin_longitude?? null,
                    'timezone'  => $dataSolicitud->geoplugin_timezone?? null,
                    'location_accuracy_radius'  => $dataSolicitud->geoplugin_locationAccuracyRadius?? null,
                ]);
        }
    }
}


if (! function_exists('getDataShow')) {
    /**
     * Set ip
     *
     */
    function getDataShow()
    {
        return (new Views)
            ->select(['country_name', DB::raw('count(country_name) as total')])
            ->groupBy('country_name')
            ->whereNotNull('country_name')
            ->orderBy(DB::raw('count(country_name)'), 'desc')
            ->get() ;
    }
}



if (!function_exists('getOS')) {
    function getOS($user_agent)
    {

        $os_platform  = "Unknown OS Platform";

        $os_array     = array(
            '/windows nt 10/i'      =>  'Windows 10',
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

        foreach ($os_array as $regex => $value)
            if (preg_match($regex, $user_agent))
                $os_platform = $value;

        return $os_platform;
    }
}

if (!function_exists('getBrowser')) {
    function getBrowser($user_agent)
    {

        $browser        = "Unknown Browser";

        $browser_array = array(
            '/msie/i'      => 'Internet Explorer',
            '/firefox/i'   => 'Firefox',
            '/safari/i'    => 'Safari',
            '/chrome/i'    => 'Chrome',
            '/edge/i'      => 'Edge',
            '/opera/i'     => 'Opera',
            '/netscape/i'  => 'Netscape',
            '/maxthon/i'   => 'Maxthon',
            '/konqueror/i' => 'Konqueror',
            '/mobile/i'    => 'Handheld Browser'
        );

        foreach ($browser_array as $regex => $value)
            if (preg_match($regex, $user_agent))
                $browser = $value;

        return $browser;
    }
}