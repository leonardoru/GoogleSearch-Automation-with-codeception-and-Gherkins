This is a QA Automation project that uses Selenium with Codeception.

The project includes integration with Gherkins Language

Tests: The first test performs a basic search in google

In order to run the tests you need to have selenium stand alone server running
To run the server do the following command on terminal
java -jar selenium-server-standalone-3.141.59.jar


To run the complete acceptance suite run the following command
vendor/bin/codecept run acceptance 

to run a single feature file do 
vendor/bin/codecept run acceptance googleSearch.feature to run a single feature file

