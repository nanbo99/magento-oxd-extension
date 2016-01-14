<?php

/**
 * Created by Vlad Karapetyan
 */
require_once 'ClientOXDRP.php';

class GluuOxd_Openid_Helper_Logout extends GluuOxd_Openid_Helper_ClientOXDRP
{
    /**start parameter for request!**/
    private $request_oxd_id = null;
    private $request_id_token = null;
    private $request_post_logout_redirect_uri = null;
    private $request_http_based_logout = False;
    /**end request parameter**/

    /**start parameter for response!**/
    private $response_html;
    /**end response parameter**/

    public function __construct()
    {
        parent::__construct(); // TODO: Change the autogenerated stub
        $this->setRequestHttpBasedLogout();
    }

    /**
     * @param boolean $request_http_based_logout
     */
    public function setRequestHttpBasedLogout($request_http_based_logout=FALSE)
    {
        $this->request_http_based_logout = $request_http_based_logout;
    }

    /**
     * @param null $request_post_logout_redirect_uri
     */
    public function setRequestPostLogoutRedirectUri($request_post_logout_redirect_uri)
    {
        $this->request_post_logout_redirect_uri = $request_post_logout_redirect_uri;
    }

    /**
     * @return mixed
     */
    public function getResponseHtml()
    {
        return $this->response_html;
    }

    /**
     * @return null
     */
    public function getRequestIdToken()
    {
        return $this->request_id_token;
    }

    /**
     * @return null
     */
    public function getRequestPostLogoutRedirectUri()
    {
        return $this->request_post_logout_redirect_uri;
    }

    /**
     * @return null
     */
    public function getRequestHttpBasedLogout()
    {
        return $this->request_http_based_logout;
    }

    /**
     * @param null $request_id_token
     */
    public function setRequestIdToken($request_id_token)
    {
        $this->request_id_token = $request_id_token;
    }

    /**
     * @return mixed
     */
    public function getRequestOxdId()
    {
        return $this->request_oxd_id;
    }

    /**
     * @param mixed $request_oxd_id
     */
    public function setRequestOxdId($request_oxd_id)
    {
        $this->request_oxd_id = $request_oxd_id;
    }



    public function setCommand()
    {
        $this->command = 'logout';
    }

    public function setParams()
    {
        $this->params = array(
            "oxd_id" => $this->getRequestOxdId(),
            "id_token" => $this->getRequestIdToken(),
            "post_logout_redirect_uri" => $this->getRequestPostLogoutRedirectUri(),
            "http_based_logout" => $this->getRequestHttpBasedLogout()
        );
    }

}