Wow! This was real fun!
Happy to say that Yii exceeded my expectatins and the level of excitement doing this was ...OMG!

Now, let's talk about the practical test project:

1. Project Title: Yii - practical test
2. Project description and requirements:
https://docs.google.com/document/d/1ITRlrhpKCZLC0rXDQkbtk56B21hLXLwzrUmemsOVs6w/edit
3. Installation Instructions:


 - download Yii version 1.x (I used 1.1.29);
 - once you have downloaded the application you can run the command to install a new app: 
   ROUTE TO PROJECT FOLDER FRAMEWOK> php yiic webapp DOCUMENTS\yiiapp
 
  * in my case: C:\Users\Amalia\yii\framework> php yiic webapp C:\Users\Amalia\yiiapp)
  
   Documents/yiiapp is the location where your app will be installed.
   
  - with xampp installed create a new virtual host entry in our  httpd-vhosts.conf file and save the file after;
   
   <VirtualHost *:80>
     DocumentRoot "C:\Users\Amalia\yiiapp"
     ServerName dev.yiiapp.com
     ServerAlias dev.yiiapp.com
     <Directory "C:\Users\Amalia\yiiapp">
            AllowOverride All
            Require all Granted
    </Directory>
    </VirtualHost>
	
  - finally, head to your browser at http://dev.yiiapp.com and you should/see your welcome page.

Git clone this repository and browse to http://dev.yiiapp.com/index.php/user/admin page to login.
Thank you!
