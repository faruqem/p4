#Tessitura Report Catalog
##HSE CSCIE -15 Dynamic Web Applications - Project P4

##Live URL:
[Tessitura Report Catalog](http://p4.guddi.ca)

##Demo:
[Tessitura Report Catalog](http://screencast.com/t/ZFpQk9v8Q)

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

##Note for the Grader
###My class files:
Folder: app/utilities and files in this folder:
* UserGenerator.php for Random Users Generator page.
* PasswordGenerator.php for Random Password Generator page.
* ChmodPermissionGenerator.php for Permissions Calculator page.
* SendEmail.php for Contact page.
* I used badcow/lorem-ipsum external package for Lorem Ipsum Generator page.

###My data files:
Folder: storgae/app/faruqe and files in this folder:
* names.json for Random Users Generator's user names.
* locations.json for Random Users Generator's user locations.
* quotes.json for Random Users Generator's user profiles.
* words.josn for for Random Password Generator page.

###Other notes:
* I used the badcow Lorem-Ipsum external package to fulfill the requirement of "You must research and implement at least one external package." For all other tools, including Random Users Generator, I created my own classes and other functionalities.
* As extras I provided two additional tools and an additional page: Random Password Generator - converted from my P2 project (procedural) to object oriented style; Chmod Permission Calculator and a Contact Me page.
* Though it was not a requirement, I returned the result set to the same page. I figured how to do it and thought it would give a user better UX.
* For all my logic code, where I haven't used an external package i.e. except Lorem Ipsum Generator, I created a class for each of my tools instead of putting the logic code directly into the controller.
* I used the blade old() value function to retrieve and display the old value upon a failed form validation. It worked very well for all the text boxes but not so for the bootstrap checkboxes. Anyway, it was not a requirement for this project. I did it as an extra.
* I set up SendMail in Digital Ocean to test my Contact Me page. It worked but in Digital Ocean it was extremely slow that's why I disabled the actual send mail part though other functionalities (field validation, success/fail message etc.) of the page are kept intact and it's ready to go upon setting up a new mailing option.
* I tested my app in IE 11, Google Chrome and FireFox successfully. Piazza discussion mentioned to test it in at least two browsers.
* I checked my site by passing the home and all the child  pages to the W3C Markup Validation Service and they passed all the validations. I also validated the CSS file I wrote i.e. p3.css and it passed all the CSS validation rules. The app.css came with Laravel so I don't have much control over it.
* Since none of the page objects is a resource/data object but just a single page, that's why I did not follow the resource style route convention and created a single page controller for all the pages.
