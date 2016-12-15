#Tessitura Report Catalog
##HSE CSCIE -15 Dynamic Web Applications - Project P4

##Live URL:
[Tessitura Report Catalog](http://p4.guddi.ca)

##Planning Documentation:
[Planning Doc](https://docs.google.com/document/d/14-oLlboZjM5LSAK2hEGcNizxwNx4FQUbMHDSKFNDLBA/edit#heading=h.9jqtzjpjb2cj)

##Demo:
[Tessitura Report Catalog](https://www.screencast.com/users/faruqe/folders/Default/media/4a722610-5f24-4154-a3e5-5124f1467e38)

##Description:
Tessitura Report Catalog is a web application to manage report documentation for all in-house custom (including some canned) reports and other solutions developed for Tessitura CRM application for a Tessitura licensee organization.

Tessitura (http://tessituranetwork.com) is a business application mostly used by the not-for-profit and arts sector organizations for online ticket selling, venue management, fundraising, customer relationship management and other ecommerce related operations. To meet end users’ demand a self hosted licensee organization needs to do lot of in-house customizations. The one main challenge end users and developers of a licensee organization face is keeping track of all of these customizations. There are online documentation for all the canned reports and other standard Tessitura functionalities but nothing for the in-house custom solutions. Tessitura Report Catalog web application will meet this demand by creating an online repository for all the in-house reports which then can be hooked up with the main Tessitura application. This will help an end user to pull a report documentation on demand using context sensitive help from a Tessitura client application. Using this applications end users will also be able to keep track of their favorite reports, make comments on and rate a report which will help other users in the organizations. This will also work as a communication bridge between the end users and developers.

Another feature of this application is the ability to maintain a glossary for the frequently used business terms in the company. This will help all relevant stake holders in the company to use the same language to reduce any communication barrier.

This application will also help in-house developers to find the relevant system documentation and revision history for troubleshooting and further enhancement purposes.  

##Features:
* View, add, edit and delete a report (allows all 4 CRUD operations). Only developers are allowed to add, edit and delete a report.
* View, add, edit, and delete a glossary term (allows all 4 CRUD operations). Only powers users, developers and admins are allowed to add, edit and delete a glossary term.
* View, add, edit, and delete comments on a report (allows all 4 CRUD operations). A user is only allowed to edit and delete her own comments.
* View, add, edit, and delete ratings of a report (allows all 4 CRUD operations). A user is only allowed to edit and delete her own ratings.
* View, add, edit, and delete revisions history of a report (allows all 4 CRUD operations). Only a developer and an admin can view, add, edit and delete a revision history. A developer is only allowed to edit and delete her own revisions.
* A powerful search feature to find a report documentation.
* Login registration and reset forgot password options.
* Contact site administrators and developers via a contact form.

##Authentication
* There are four levels of access managed by roles.
* A guest (non-authenticated user) can only use the contact form to submit an access request.
* A user can only view reports and glossaries; and add, edit and delete their own comments and ratings in addition to view any other user's comments and ratings.
* A power user has all the access that a user has. In addition they can also add, edit and delete a glossary term.
* An admin or a developer has all the access that a power user has. In addition they can also add, edit and delete a report. They can also add, edit and delete their own revision history and view any developer's revision history. An admin or a developer can also view technical information of a report that a user or power user doesn't have access to.

##Outside Resources:
* [Bootstrap](http://getbootstrap.com/) CSS and JavaScript Framework
* [Bootstrap theme](https://www.bootstrapcdn.com/bootswatch/)
* [Font Awesomee](http://fontawesome.io/)
* [jQuery](https://jquery.com/) JavaScript library
* [Tessitura](http://www.tessituranetwork.com/) All the sample report screenshots shown are created by Tessitura Application.

##Database Setup and Sample Data for Testing
* Clone the repository.
* Create a new MySQL database named as tessreports.
* Run $ php artisan migrate:refresh --seed command. This will create all the necessary tables and seed data.

##Test User
You can use the following test users with different role for testing:
* Name: Jill, E-Mail: jill@harvard.edu, Password: helloworld, Role: Developer/Admin
* Name: Jamal, E-Mail: jamal@harvard.edu, Password: helloworld, Role: Power User
* Name: Jedi, E-Mail: jedi@harvard.edu, Password: helloworld, Role: User

##E-mail Setup
* Mailgun with a Mailgun sandbox sub-domain for Testing
* None of the users mentioned above are real and not registered in Mailgun to receive test email.
* So to test this feature you have to setup your own Mailgun account, update the Laravel mail setup with the necessary mail domain name and credentials. Also need to create your own test mail users. You can also use any other mail server you have access to and set it up accordingly.


##Note for the Grader

###Project Highlights
* Role based authentication with my own tables in addition to two Laravel built-in tables.
* Comprehensive and powerful search feature.
* Solid base and design with 16 tables including Laravel two built-in authentication tables. Easily extensible in the future without changing the base architecture.
* Some crafty maneuver while doing the CRUD operations on tables with complex multi tables relationship.
* Comprehensive and intuitive feature set for end users and developers.
* 95%+ real life production ready.
* Tables are seeded with real life test data.
* A solid effort to bridge the gap between end users and developers.
* Added all the essential features mentioned in the planning doc along with the first four non-essential features.

###Production Readiness
* The software is 95%+ ready for a real life use.
* Some system data (like report category, type, framework etc.) I used are static and may not be changed in couple  of years or never.  So I did not have to create any interface for them at this stage. This will be mostly handled by the seeders which are production ready.
* For role based authentication, I created my own database schema (please, refer to the schema diagrams in the planning doc). I kept options to make it more robust in the future - database schema for the authentication section is designed keeping that in mind. I also kept the Laravel built in users and password_resets tables to take advantage of the Laravel built-in authentication features. My own role based solution wraps around that.

###Architecture
* While designing the software my main focus was creating a robust foundation. So from the database objects, models and their relationships point of view the design is very solid. I don't have to change them for any new feature addition in the future.

###Browsers for Testing
* I tested in three browsers - Firefox, Chrome and IE. Firefox was consistent in responding to some JavaScript events (e.g. closing the Flash Message on click.), others have some issues.
* I ran home and all the child pages through W3C Markup Validator and did not see any error only couple of warning because of some Bootstrap class. I hope it's acceptable. I also validated my local CSS and it passed without any error or warning.

###Conventions
* Report, glossary, rating, revision and comment resource has their own controllers for all four CRUD operations in addition to page, layouts and other authentication controllers.
* For report there are two controllers - one (ReportController) for users mainly to view reports, and one (ReportDevController) for developers to do all four CRUD operations. So I followed the convention showed in the class where they make sense for controllers, views, controller functions and routes in addition to database tables, column names, seeders and models. In case of some non-resource objects I used names that represent the action and are meaningful.
