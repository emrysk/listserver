listserver
==========

PHP website with mySQL backend that will allow users to view servers. Server owners create their own listings, and can
buy advertising or higher rank on the server.

Site will need to be searchable by different fields, but with static searches (which can be cached).

Needed:
=======
index.php file will be static search of most popular servers, with paid listings at the top.
config.php file with configurable variables (db name, username, password, table, etc)
search.php that contains the search functions
login.php that allows account login and creation
account.php that shows account information after login, including servers listed
newserver.php that allows server owners to add a new server
various search pages (tbd)
list-style.css for styling the pages
various search pages

Database structure:
===================
table:  servers
fields: server_id (primary key)
        server_name
        server_ip (unique key)
        owner_id (foreign key)
        server_desc
  
table:  owners
fields: owner_id (primary key)
        username (Unique key)
        email_address (unique key)
        first_name
        last_name

table:  comments
fields: comment_id (primary key)
        server_id (foreign key)
        subject
        comment
        username
        email_address
        ip_address
        
