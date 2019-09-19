Feature: Search on Gogle

  In order to see google results
  As an regular user
  I need to access and search google

  Scenario Outline: Search for simple term

    When I search for "<SearchTerm>"
    Then I should see "<SearchTerm>" on the results

  Examples:
  | SearchTerm |
  | Bird       |
  | Lion       |
  | Colombia   |  
     
  