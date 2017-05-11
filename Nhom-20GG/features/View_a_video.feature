Feature: View a video
  As a user
  I want to view a video
  In order to view content of a video

  Scenario: view a video
    Given I am on the homepage
	When I follow "A thousand years"
    Then I should be on "/video/3"