<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Its\Sso\OpenIDConnectClient;
use Its\Sso\OpenIDConnectClientException;
use Session;

class MainController extends Controller
{
    //
    public function index()
    {
        if (is_null(Session::get('token'))) {
            try {
                $oidc = new OpenIDConnectClient(
                            'https://my.its.ac.id', // authorization_endpoint
                            '9B0B5CC9-1166-4ABA-AC51-F4657FC00710', // Client ID
                            '1aiqu0dn1z0g8s04c4c488s4' // Client Secret
                        );
            
                $oidc->setRedirectURL('http://riset.its.ac.id/praktikum/vlab-pengolahanlimbah'); // must be the same as you registered
                $oidc->addScope('email group phone profile role openid'); //must be the same as you registered
                
                // remove this if in production mode
                $oidc->setVerifyHost(false);
                $oidc->setVerifyPeer(false);
            
                $oidc->authenticate(); //call the main function of myITS SSO login
                Session::put('token', $oidc->getIdToken());
                $user = $oidc->requestUserInfo(); // this will return user information from myITS SSO database
            } catch (OpenIDConnectClientException $e) {
                echo $e->getMessage();
            }
        } else{
            return view('welcome');
        }
    }
    public function logout()
    {
        try {
            $redirect = 'http://riset.its.ac.id/praktikum/vlab-pengolahanlimbah'; // set https://dev-my.its.ac.id or https://my.its.ac.id if you don't register post-logout URI
            if (!is_null(Session::get('token'))) {
                $accessToken = $_SESSION['id_token'];
        
                $oidc = new OpenIDConnectClient(
                            'https://my.its.ac.id', // authorization_endpoint
                            '9B0B5CC9-1166-4ABA-AC51-F4657FC00710', // Client ID
                            '1aiqu0dn1z0g8s04c4c488s4' // Client Secret
                        );
            
                // remove this if in production mode
                $oidc->setVerifyHost(false);
                $oidc->setVerifyPeer(false);
                $oidc->signOut($accessToken, $redirect);
            }
        
            header("Location: " . $redirect);
        } catch (OpenIDConnectClientException $e) {
            echo $e->getMessage();
        }
    }
}
