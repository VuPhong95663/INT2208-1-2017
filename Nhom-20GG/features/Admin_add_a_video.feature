Feature: Admin add a video
  As a admin
  I want to add a video
  In order to add a video to list videos

  Scenario: view list video
    Given I am on "/admin"
	Then I should see "Thêm mới"
	And I should see "Danh sách"
	When I follow "Thêm mới"
    Then I should see "Tên"
	When I click "Thêm mới video"
	Then I should see warning if I have not filled in enough information
	And I should see list video increase 1 if I have filled in enough information