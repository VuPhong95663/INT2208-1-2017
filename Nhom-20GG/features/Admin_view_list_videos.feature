Feature: View list video from admin
  As a admin
  I want to view list video
  In order to view content of a video

  Scenario: view list video
    Given I am on "/admin"
	Then I should see "Thêm mới"
	And I should see "Danh sách"
	When I follow "Danh sách"
    Then I should see "A thousand years"