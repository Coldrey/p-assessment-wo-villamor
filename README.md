# **Practical Assessment**
## **Lou Geh Cardealership Company**
Lou Geh car dealership sells both new and used cars, and it operates a service facility.
- A salesperson may sell many cars, but each car is sold by only one salesperson.
- A customer may buy many cars, but each car is bought by only one customer.
- A salesperson writes a single invoice for each car he or she sells.
- A customer gets an invoice for each car he or she buys.
- A customer may come in just to have his or her car serviced; that is, a customer need not buy a car to be classified as a customer.
-	When a customer takes one or more cars in for repair or service, one service ticket is written for each car.
-	The car dealership maintains a service history for each of the cars serviced. The service records are referenced by the car’s serial number.
- A car brought in for service can be worked on by many mechanics, and each mechanic may work on many cars.
- A car that is serviced may or may not need parts (e.g., adjusting a carburetor or cleaning a fuel injector nozzle does not require providing new parts).

## **Task**
1. Create a prototype based on the attached problem
2. Technologies and design to be used are the following:
    * Backend -  PHP
    * Database - MySQL
    * Frontend - Basic HTML, CSS and Javascript
3. As for your application documentations you need to provide the ff:
   1. ERD
   2. DFD
4. Provide a ```README.md``` containing the setup guide.
5. The application should be published in Github via forked repository and for final version of your prototype will create a ```Pull request``` in Github 
6. You will send the Github link to us thru our email devops@biotechfarms.com on or before **14-10-203** 12:00 PM


    ### **Directory structure**
    ```
    my-app/
    ├── configs                      (Config scripts)
    |   └── db.php
    ├── controllers                      (PHP Controller scripts)
    |   └── UserController.php
    ├── js/
    |   └── app.js                       (Javascript scripts)
    ├── css/
    |   └── style.css                    (CSS scripts)
    ├── index.html                       (Entry point)
    ├── documentation/                   (Documentation files and assessts)
    |   └── UserController.php
    └── README.md                        (Project documentation)
    ```
    ### **Submission format**
    - Repository should show codebase directory directly **DO NOT PUT YOUR CODE BASE IN A ZIP FILE** use git commands instead to push your code-base and further updates.
    - Prototype's latest version should be the default branch of the repository.
    - Provide a READ.ME file on how to install and deploy your prototype, and its prerequisite, software, sdk(if needed), and driver.
