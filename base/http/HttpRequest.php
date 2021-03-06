<?php
namespace base\http;
/**
 * HttpRequest
 *
 * @author Jens Bekersch <bekersch@th-brandenburg.de>
 * @version 1.0 05/2018
 */
class HttpRequest implements Request {

    private $parameters;

    public function __construct() {
        $this->parameters = $_REQUEST;
    }

    public function issetParamenterName($name)  {
        return isset($this->parameters[$name]);
    }

    public function getParameter($name) {
        if(isset($this->parameters[$name])) {
            return $this->parameters[$name];
        }
        return null;
    }

    public function deleteParameter($name) {
        $this->parameters[$name] = "";
    }

    public function getParameterNames() {
        return array_keys($this->parameters);
    }

    public function getHeader($name) {
        $name = 'HTTP_' . strtoupper( str_replace('-', '_', $name));
        if (isset($_SERVER[$name])) {
            return $_SERVER[ $name];
        }
        return null;
    }

    public function getAuthData()  {
        if (!isset($_SERVER['PHP_AUTH_USER'])) {
            return null;
        }
        return array('user' => $_SERVER['PHP_AUTH_USER'], 'password' => $_SERVER['PHP_AUTH_PW']);
    }

    public function getRequestMethod() {
        if (!isset($_SERVER['REQUEST_METHOD'])) {
            return null;
        }
        return $_SERVER['REQUEST_METHOD'];
    }


}