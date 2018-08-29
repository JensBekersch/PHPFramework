<?php
namespace base\filter;
/**
 * HttpAuthFilter
 *
 * @author Jens Bekersch <bekersch@th-brandenburg.de>
 * @version 1.0 05/2018
 */
use base\http\Request;
use base\http\Response;
use base\config\Registry;
use model\User;

class HttpAuthFilter implements Filter {

    public function __construct() { }

    public function execute(Request $request, Response $response) {
        // nothing todo here...
    }


}