<?php /** @noinspection SpellCheckingInspection */


namespace Tatum;

/**
 * Class Axios
 * @package Tatum
 */
class Axios
{
    const POST_OPTIONS = [

    ];
    const GET_OPTIONS = [

    ];

    /**
     * @param $url
     * @param array $options
     * @return mixed
     */
    public static function get($url, $options = [])
    {
        $opt = self::processOptions(self::GET_OPTIONS, $options);

        foreach ($options as $k => $v) {
            $opt[$k] = $v;
        }

        return self::send($url, $opt);
    }

    /**
     * @param $url
     * @param $data object|string
     * @param array $options
     * @return mixed
     */
    public static function post($url, $data, $options = [])
    {
        $opt = self::processOptions(self::POST_OPTIONS, $options);

        $opt[CURLOPT_POSTFIELDS] = is_object($data) ? json_encode($data) : $data;
        return self::send($url, $opt);
    }

    private static function processOptions($from, $modify) {
        $opt = $from;
        foreach ($modify as $k => $v) {
            if(is_array($opt[$k])) {
                $opt[$k][] = $v;
            } else {
                $opt[$k] = $v;
            }
        }

        return $opt;
    }

    /**
     * @param $url
     * @param $options
     * @return mixed
     */
    private static function send($url, $options)
    {
        $ch = curl_init($url);

        return json_decode(curl_exec($ch));
    }

}