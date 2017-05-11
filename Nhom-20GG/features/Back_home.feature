Feature: Back home 
  As a user
  I want to back home 
  In order to view homepage

  Scenario: back home
    Given I am on "/video/3"
	When I follow "20GG"
    Then I should be on "/"