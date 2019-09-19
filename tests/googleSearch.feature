Feature: login to word press

  In order to access the Admin Dashboard
  As an administrator
  I need to access the login page and enter credentials

  Scenario Outline: try login

    When I search for "<SearchTerm>"
    Then I should see "<SearchTerm>" on the results

  Examples:
  | SearchTerm |
  | Bird       |
  | Lion       |
  | Colombia   |  
     
  