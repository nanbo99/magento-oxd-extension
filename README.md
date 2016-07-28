Magento Extension OpenID Connect SSO By Gluu  
=========================
![image](https://raw.githubusercontent.com/GluuFederation/gluu-magento-sso-login-extension/master/plugin.jpg)

OpenID Connect SSO By Gluu extension gives access for login to your Magento site, with the help of Gluu server.

Now I want to explain in details how to use extension step by step. 

Extension will not be working if your host does not have https://. 

## Step 1. Install Gluu-server 

If you want to use external gluu server, You can not do this step.   

[Gluu-server installation gide](https://www.gluu.org/docs/deployment/).

## Step 2. Download oxd-server 

[Download oxd-server-2.4.4.Final](https://ox.gluu.org/maven/org/xdi/oxd-server/2.4.4.Final/oxd-server-2.4.4.Final-distribution.zip).

## Step 3. Unzip and run oxd-server
 
1. Unzip your oxd-server. 
2. Open the command line and navigate to the extracted folder in the conf directory.
3. Open oxd-conf.json file.  
4. If your server is using 8099 port, please change "port" number to free port, which is not used.
5. Open the command line and navigate to the extracted folder in the bin directory.
6. For Linux environment, run sh oxd-start.sh&. 
7. For Windows environment, run oxd-start.bat.
8. After the server starts, go to Step 4.

## Step 4. Download extension OpenID Connect SSO By Gluu
 
[Download OpenID Connect SSO Extension By Gluu 2.4.4](https://raw.githubusercontent.com/GluuFederation/gluu-magento-sso-login-extension/master/Magento_gluu_SSO_2.4.4/Magento_gluu_SSO-2.4.4.tgz).

For example if you are using gluu-server-2.4.4 it is necessary to use oxd-server-2.4.4 and OpenID Connect SSO Extension By Gluu 2.4.4

## Step 5. Disable cache
 
1. Open menu tab System/Cache Management
![Management](https://raw.githubusercontent.com/GluuFederation/gluu-magento-sso-login-extension/master/docu/mag0.png) 

2. Check select all, set action on disable and click on submit button. 
![submit](https://raw.githubusercontent.com/GluuFederation/gluu-magento-sso-login-extension/master/docu/mag1.png) 

## Step 6. Install extension
 
1. Open menu tab System/Magento Connect/Magento Connect Manager
![Manager](https://raw.githubusercontent.com/GluuFederation/gluu-magento-sso-login-extension/master/docu/mag2.png) 

2. Choose downloaded file and click on upload button. 
![upload](https://raw.githubusercontent.com/GluuFederation/gluu-magento-sso-login-extension/master/docu/mag3.png) 

3. See Auto-scroll console contents, if extension successfully installed return to admin panel.

###Extension will be automatically activated.

3. Open menu tab OpenID Connect SSO By Gluu / Open extension page
![GluuSSO](https://raw.githubusercontent.com/GluuFederation/gluu-magento-sso-login-extension/master/docu/44.mag4.png) 

## Step 7. General

![General](https://raw.githubusercontent.com/GluuFederation/gluu-magento-sso-login-extension/master/docu/44.m1.png)  

1. Admin Email: please add your or admin email address for registrating site in Gluu server.
2. Gluu Server URL: please insert your Gluu server URL.
3. Port number: choose that port which is using oxd-server (see in oxd-server/conf/oxd-conf.json file).
4. Click next to continue.

If You are successfully registered in gluu server, you will see bottom page.

![Oxd_id](https://raw.githubusercontent.com/GluuFederation/gluu-magento-sso-login-extension/master/docu/44.m2.png)

For making sure go to your gluu server / OpenID Connect / Clients and search  Your oxd id

If you want to reset configurations click on Reset configurations button.

## Step 8. OpenID Connect Configuration

### Scopes.
You can look all scopes in your gluu server / OpenID Connect / Scopes and understand the meaning of  every scope.
Scopes are need for getting loged in users information from gluu server.
Pay attention to that, which scopes you are using that are switched on in your gluu server.

You add, enable, disable and delete scope, but also add new scope, but when you add new scope by {any name}, necessary to add that scop in your gluu server too. 
![Scopes2](https://raw.githubusercontent.com/GluuFederation/gluu-magento-sso-login-extension/master/docu/44.m4.png) 

### Custom scripts.

![Customscripts](https://raw.githubusercontent.com/GluuFederation/gluu-magento-sso-login-extension/master/docu/44.m5.png)  

You can look all custom scripts in your gluu server / Configuration / Manage Custom Scripts / and enable login type, which type you want.
Custom Script represent itself the type of login, at this moment gluu server supports (U2F, Duo, Google +, Basic, OxPush) types.

### Pay attention to that.

1. Which custom script you enable in your Magento site in order it must be switched on in gluu server too.
2. Which custom script you will be enable in OpenID Connect Configuration page, after saving that will be showed in Magento Configuration page too.
3. When you create new custom script, both fields are required.

## Step 9. Magento Configuration

### Customize Login Icons
 
Pay attention to that, if custom scripts are not enabled, nothing will be showed.
Customize shape, space between icons and size of the login icons.

![WordpressConfiguration](https://raw.githubusercontent.com/GluuFederation/gluu-magento-sso-login-extension/master/docu/44.m6.png)  

## Step 10. Show icons in frontend

Go to https://{site-base-url}/index.php/customer/account/login/

![frontend](https://raw.githubusercontent.com/GluuFederation/gluu-magento-sso-login-extension/master/docu/44.m7.png) 