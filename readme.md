## ISTM 6213 Group 4 Project

<!--[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework) -->

Hello All,


As a first step to collective collaboration, you need create a free account on Git-Hub.


I can then add you as a collaborator on our project. This is my first time using Git-Hub


in this fashion so it'll be a learning experience all around! The steps so far are

   0. Install PHP:
   
	As a real first step, you should install PHP for local development.
	An important step that’s not well explained, is the need to save a copy
	of the php.ini-development file as php.ini file. Vagrant will need to use ssl
        so search for php_openssh and uncomment that line of code in your php.ini file.

	Detailed instructions are located on the site that follows:
		
		http://www.sitepoint.com/how-to-install-php-on-windows/

	For PHP Windows Zip downloads:
		
		http://windows.php.net/qa/
	
	Note: I used PHP 5.6 VC11 x86 Thread Safe




   1. Sign Up for Git-Hub:


        https://github.com/join


   2. Install the Git-Hub application: 


        https://desktop.github.com/


       This will also install Git (Source Control) and Git-bash which you will need to
       generate the public/private key for Virtualbox/vagrant


   3. Email me your Git-Hub username


   4. Install PHP Storm ( Strongly Suggested..not required)


        https://www.jetbrains.com/phpstorm/download/


       Note: GWU has an educational agreement with PHP Storms maker  JetBrains


        https://www.jetbrains.com/student/


   5. Install Vagrant:


        https://docs.vagrantup.com/v2/getting-started/


       Please install Virtualbox 4.3.30 after install add Virtualbox Extension pack 4.3.3
	   
   6. Install Composer:
   
	    https://getcomposer.org/doc/00-intro.md

	  Important-
	If you are getting an error regarding the open_ssl extension , do the following steps-
	1.open php.ini-development and do "Save as" and save it as "php.ini".
		a.Open php.ini in an editor.
		b. Find "Directory in which the loadable extensions (modules) reside." in the file.
		c. Below "On Windows". Set the path to your php\ext folder.
	2. In the same file (php.ini)
		a. Find "extension=php_openssl.dll" and uncomment it.
		b. Find "extension=php_mbstring.dll" and uncomment it.
	  This is needed to manage the projects dependencies. 

	  Note: If you have problems with the installer try a manual install:
	  
	    https://getcomposer.org/doc/00-intro.md#manual-installation
	  
   7. Fork and Clone group4-project:
   		
	  	https://help.github.com/articles/fork-a-repo/

	  While signed into Git-Hub, click the Fork button (Upper right hand corner).
	  This will create a branch for your personal development efforts. 
	  Go to this fork and copy the HTTPS clone URL.
	  
	  Open a git bash prompt and navigate to the location that you want to download the code base to

	  Example: C:\phpDev\projects\
	  
	  To clone (copy to your machine) the project, enter: 
	  
	  $ git clone https://github.com/your-github-user-is/group4-project.git
	  
	  Note: This clone is your personal copy of the project. You can work and commit to it
	  without fear of breaking others code. The general practice is to commit minor steps of a major 
	  feature implementation. Once the major feature is complete, submit a pull request to have your code
	  intergraded into the main project code base. (see 13 below)
	  
	  Read up on Git-Work-Flow
	  
	  
	  	https://guides.github.com/introduction/flow/

	  
   8. Install project dependencies: 
   
	  Change into group4-project root ( $ cd group4-project)
	  
	  type: $ composer install
   
   9. Configure Homestead.yaml to your environment;

      Open Homestead.yaml in a text editor and change to your project directory.
	  If you used the Example project directory above....
	  
	  folders:	  
	    - map: "C:/phpDev/projects/group4-project" 

   10. Add Vagrant VM to your computer host file:
  
	Don't forget to add the "domains" for your Nginx sites to the hosts file on your machine! 
	The hosts file will redirect your requests for the local domains into your Homestead environment. 
	On Mac and Linux, this file is located at /etc/hosts. On Windows, it is located at 
	C:\Windows\System32\drivers\etc\hosts. The lines you add to this file will look like the following:

	192.168.10.10   group4.app
	
	Make sure the IP address listed is the one you set in your Homestead.yaml file. 
	Once you have added the domain to your hosts file, you can access the site via your web browser!
	
	Extracted from: http://laravel.com/docs/5.1/homestead#per-project-installation
	
   11. Fire up Vagrant:
  
	  In git bash at the project root type: $ vagrant up

	  *Important- If you are having errors while executing "vagrant up" command in WINDOWS 10, then run the file that Ajinkya has sent to you while running the "vagrant up" command.
	  
   12. Verify Projects Running...
  
      Open Browser and point it to: http://group4.app
	  
	  Success!! I hope..lol

   13. Submitting your code to the project:
   	
      Once you've implemented a feature you believe is ready for the project
      you have to submit a pull request. This will send a report to all the 
      collaborators, letting us know how your code may impact our work.
      The details can be found at the site listed below:


       	https://help.github.com/articles/using-pull-requests/
       



##A few URLS for Next Steps:

Good Resources for Learning Git and GitHub:

https://help.github.com/articles/good-resources-for-learning-git-and-github/

==

If you’re interested in configuring the IDE:

https://confluence.jetbrains.com/display/PhpStorm/Laravel+Development+using+PhpStorm


==

YouTube Laravel Tutorials Series:

https://laracasts.com/series/laravel-5-fundamentals

https://laracasts.com/series/how-to-be-awesome-in-phpstorm/episodes/1


==

Awesome Laravel: A curated list of awesome bookmarks, packages, tutorials, videos and other 
cool resources from the Laravel ecosystem

https://github.com/chiraggude/awesome-laravel#development-setup


==

PHP Manual:

http://php.net/manual/en/

==

Example Crowdfunding Site:

 https://www.crowdfunder.com/

 https://circleup.com/

 http://www.fundable.com/



## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for contributing to the ISTM 6213 Group 4 Project! 
Testing Github pull request
xun768768678768