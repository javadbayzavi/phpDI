# phpDI
 A very simple CRUD operation sample using Dpendency Injection(DI) pattern

 This package is just an example of DI framework, and probably be expandable to be applied to some extensive development areas.

 In order to use the package feel free to download and do some little configurations:
 
 1. Open the src/lib/core/address.php and modify the root addrress of your release environment
 2. Open the src/lib/core/dbcredentials.php and modify the db server credentials. The packge work with PDO for CRUD operations

Framework decompositions

All the business actions run on controllers and all the client side view run on page module. The framework also provide a data model layer to abstract data access mechanisms in controllers. In order to develop your own entities, models and contorllers go to the following roots respectively:
1. src/lib/entities (for entities)
2. src/controllers/ (for controllers)
3. src/pages/ (for pages)
4. src/lib/models/ (for models)

