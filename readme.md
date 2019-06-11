## UniWeb, 

### University Web Design Assignment 

**Introduction**

This Website was created to fulfill part of my Web Design assignment.  This was my first experience of using
PHP, Bootstrap, HTML, CSS and a framework (Codeigniter), and I had to learn all these before progressing.

The assignment was to create a video upload and commenting system for tutors to use to share videos of their lectures, and share
knowledge and opinions on them.

The assignment scored 66 out of 100 (66%), which along with the first assignment (the SRS at 57%) which comes to 61.5% overall (or 2:1)

It was developed on a Windows PC, and my next steps include getting to grips with a Linux system for future web development.
The website is not finished fully as it did not fulfill all the requirements for the assignment, for example
there is no SQL injection protection and other security concerns used, no root user password for the database etc, these are other future targets.

**Screenshots**

![image of login screen] (https://github.com/LeeDisley/UniWeb/tree/master/Screenshots/login.jpg)

**Getting it to work (idiots guide required for assignment hand in)**

To get this web application to work:

Install XAMPP on your system, this is available for Windows, Linux and Mac.
When XAMPP loads it also loads MySQL and PHP.
Copy the folder titled Majister into the htdocs folder in the XAMPP folder.

Some changes to the code may be needed to get this to work on a Linux or Mac system as it was developed on a Windows System (i.e
different slashes in file directory commands)

PHP.ini needs changing to accept larger media files than it currently can.  This can be accessed via the XAMPP control panel by selecting the 
config button on the apache section, once the services needed have been started.  Under the files upload section of PHP.ini, change the maximum
size for files to upload by adding or changing to this:

; Maximum allowed size for uploaded files.

; http://<i></i>php.net/upload-max-filesize 

upload_max_filesize=10000M

post_max_size=10000M;

The setup for the autoloader config files are set already.
The database.php in the config folder needs to look like this:

$active_group = 'default';

$query_builder = TRUE;

$db['default'] = array(

	'dsn'	=> '',
	
	'hostname' => 'localhost',
	
	'username' => 'root',
	
	'password' => '',
	
	'database' => 'college',
	
	'dbdriver' => 'mysqli',
	
	'dbprefix' => '',
	
	'pconnect' => FALSE,
	
	'db_debug' => (ENVIRONMENT !== 'production'),
	
	'cache_on' => FALSE,
	
	'cachedir' => '',
	
	'char_set' => 'utf8',
	
	'dbcollat' => 'utf8_general_ci',
	
	'swap_pre' => '',
	
	'encrypt' => FALSE,
	
	'compress' => FALSE,
	
	'stricton' => FALSE,
	
	'failover' => array(),
	'save_queries' => TRUE
	
);

The schema for the database is stored in the Database exported file folder and will need importing into MySQL.  To do this create a new database in MySQL
and then use the import tab to select the college.sql file and the database will be created.

The database will not have information in, so you will need to run an SQL statement to add a user:
INSERT INTO userss (username, email, password)
VALUES ('Fred12', 'something@gmail.com', 'Password');

The user id is auto generated

The password is stored as an M5 Hash, and cannot be recovered in case it is forgotten.
