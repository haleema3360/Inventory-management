# Inventory-management
 Internship


*STEPS TO DOWNLOAD AND USE THE SOURCE CODE*

1. Download the zip file/ download winrar from the github
2. Upload and import the zip file in the domain website you use
3. In the file manager, transfer all the files present in the subdirectories(add_files, admin_files etc.) to the main directory(i.e public/html)
4. Open the database manager and create a new database named "users" 
5. Import users.sql file(given inside the zip package in SQL file folder)
6. Change the username, password and the database name based on what the domain provides you with in the "dbconnect.php" file for a successful
 connection between the database and the files.


The Inventory Management System 

• Consists of two panels-
admin and user
• The end users log into their respective panels by providing the username and password
• The passwords in the database for every user are hashed . Thus the database is secured 
• As soon as the user logs in, the profile page of that user is shown.



**Admin panel:**
Consists of the following pages:

 Profile
 Shows the personal details of the user.

 Products 
• Displays the details of the products that are currently available in the inventory. The quantity of each product and the workbench it is allocated to.
• In the same page, there is another table that shows the raw materials required for each product.
• The user has complete authority to add, edit and delete the data from the tables

 Product orders 
• The user can add a product order, only when the following conditions hold true and the activities of each take place:
• If the workbench of the product is occupied , then the product order status is a blocker .
• If the workbench is not occupied, then the product is moved to wip inventory, and the status of the order is set to wip inventory 
• At any point of time, the admin or the user(worker) can change the status of the workbench (only the worker assigned to the particular workstation can change his workbench status) 
• If the status of a workbench is changed to " not occupied ", then the status of the corresponding product in the product orders page is changed to wip inventory , and the product is added to the wip table

Raw materials
 • The user can add, edit or delete the raw materials present in the inventory along with the  quantity of each raw material and the received date

Workbench
• The page consists of the different departments that are present in the field and the current status of each department (occupied or not occupied)
 • The user can change the status of the workbench from occupied to not occupied and vice versa
• He can also add, edit or delete the workbench data

 WIP Inventory 
• Once a product order is added, at the same time, the product is moved to the WIP table, there exists a " done " button in the action column
• When pressed, the product is moved from WIP inventory to finished goods inventory, and the quantity of the products in the products table is updated to the new value.

Finished Goods 
• The products that have been completed are displayed here.
• Once the products are in finished goods, the quantity in the products tables is to be increased

 MRO inventory
• Table that consists of products or parts that are currently under maintenance 

 Comments
 • The worker and the admin can interact with each other by commenting and replying to each other 

Employee management
• Shows a table consisting of all the employees in the firm
• The details of the employees can only be edited from the admin panel



**User panel:**
Consists of the following pages:

 Profile: 
• The user can view his profile (personal details) and the workstation he is assigned to
• He can only view the details and cannot edit them

Products:
 • Shows the products table consisting of only products which are assigned to the workbench in which the user is assigned (hence he can edit the info)
• The product description of the corresponding product can be viewed but cannot be edited by the user

 Raw materials
 • The user can view the raw materials present in the inventory along with the  quantity of each raw material.

 Workbench
• The page consists only of the workbench the user is assigned to, he can only change the status of his workbench from occupied to not occupied and vice versa

 WIP inventory 
• The user can view the products of his workstation, • Has the access to the DONE button.
• When he presses the done button, the product is moved to the finished goods inventory, and the quantity of the product is updated on the products page

Finished Goods 
• The products that have been completed are displayed here.

 MRO inventory
• The user can view the products and parts that are under maintenance 

 Comments 
•The user can interact with the admin and his fellow co-workers

**LINK** 
http://inventory-management-sys.000webhostapp.com/

**LOGIN DETAILS** 

Admin-
username: admin
password: 9876

User-
username: rohit
password: 9876

