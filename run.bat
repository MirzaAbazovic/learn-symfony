REM for interactive creation of entity
REM php app/console doctrine:generate:entity 
REM Ability to pass named options to fields was added in version 3.0. Previously, only the string type was allowed to receive the length value as argument. Available options are length, nullable, unique, precision and scale.
REM php app/console generate:doctrine:entity --no-interaction --entity=SafenetCMSBundle:Post --fields="title:string(length=200 nullable=false unique=true) body:text ranking:decimal(precision:10 scale:0)" --format=annotation

REM list routes
REM php app/console route:debug

REM start server
php app/console server:run
