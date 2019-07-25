# Laravel-pre-configured-for-backend-and-frontend-tests
How to start a project on Laravel with tests? And if those tests are on back-end and on front-end? 
   
Sometimes having two different test DSLs (domain specific languages), it isn't such cool too.  
  
At this project I only configured Laravel to work on with ReactJS, and added to both, test libraries which follow the "spec" DSL: Kahlan Framework for Php Tests and Jest + Enzyme for ReactJS tests.  
  
(Kahlan Framework for PHP Modern Tests in "spec" DSL pattern:
<img src="https://github.com/LukasTsunami/Laravel-pre-configured-for-backend-and-frontend-tests/blob/master/public/assets/kahlan.png?raw=true" width="200" />  
https://github.com/kahlan/kahlan  

(Eloquent Phony for PHP Modern Mocks, spies and stubs.  
<img src="https://github.com/LukasTsunami/Laravel-pre-configured-for-backend-and-frontend-tests/blob/master/public/assets/phony.png?raw=true" width="80" />  
https://github.com/eloquent/phony  
    
(Jest and Enzyme for React Tests) 
<img src="https://github.com/LukasTsunami/Laravel-pre-configured-for-backend-and-frontend-tests/blob/master/public/assets/jest.png?raw=true" width="80" />  
https://github.com/facebook/jest  
  
<img src="https://github.com/LukasTsunami/Laravel-pre-configured-for-backend-and-frontend-tests/blob/master/public/assets/enzyme.png" width="200" />  
https://github.com/airbnb/enzyme  

I also installed and configured the "Eloquent Phony" library for Mocks, stubs, and spies using a modern way.  

## How to run the tests?
Back-end tests: `APP_ENV=testing php artisan kahlan:run`  
.  
Front-end tests: `npm run tests`  
.
## Where can you find the React.js components?
At folder resources/js/components

## Where can you find the React.js tests?
At tests/frontend folder

## Where can you find the PHP tests?
You need to create a specs folder on root path of project  
### How could I use the tests/backend/specs folder in order to run tests inside it a best organized way?  
After running a "composer install", command for downloading the project dependencies, you need to replace the files inside "vendor/Kahlan/kahlan/src/Cli/Kahlan.php" with the file inside "ToReplaceOnVendor/Kahlan/Kahlan.php"   

