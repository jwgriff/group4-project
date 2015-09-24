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
	  
	  This is needed to manage the projects dependencies. 
	  
   7. Fork and Clone group4-project:
   
	  While signed into Git-Hub, click the Fork button (Upper right hand corner).
	  This will create a branch for your personal development efforts. 
	  Go to this fork and copy the HTTPS clone URL.
	  
	  Open a git bash prompt and navigate to the location that you want to download the code base to
	  Example: C:\phpDev\projects\
	  
	  To clone (copy to your machine) the project, enter: 
	  $ git clone https://github.com/your-github-user-is/group4-project.git
	  
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
	  
 12. Verify Projects Running...
  
      Open Browser and point it to: http://group4.app
	  
	  Success!! I hope..lol
	  
	  



A few URLS for next steps with Laravel.

If you’re interested in an IDE:

https://confluence.jetbrains.com/display/PhpStorm/Laravel+Development+using+PhpStorm

YouTube Laravel Tutorials Series:

https://laracasts.com/series/how-to-be-awesome-in-phpstorm/episodes/1

Example Crowdfunding Site:

https://www.crowdfunder.com/



## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for contributing to the ISTM 6213 Group 4 Project! 


