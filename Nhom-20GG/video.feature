Feature: View list Video
As a user
I want to view list video
In order to view list video

Scenario: view list video
Given I'm in the ListVideos page
Then I shoud see a list of all videos on the left side of the page and the most views video on the right side of the page

Feature: view list video added
	In order to view list video added
	As a admin
	I want to view list video added

	Scenario: view list video added
		Given I'm in the page view list video of admin
		And I should see list video,I added
		When I click on "Sửa" on a Row of Video
		Then I should see page edit video
		When I click on "Xóa" on a Row of Video
		Then I should delete this video


Feature: add a video
	In order to add a new video into database
	As a admin
	I want to add a video

	Scenario: add a new video
		Given I'm in add video pages
		When I fill full the information and clich "Thêm video"
		Then This video has been added to the database
		When I don't fill full the information and click "Thêm video"
		Then Appears notice you must enter full information of the video

Feature: delete a video
	In order to remove a video
	As a admin
	I want to remove video from database

	Scenario: delete a video
		When I click "Xóa" on row of a video
		And I select "Oke"
		Then This video was deleted from the database

Feature: view a video
	In order to view a video and view subtitle of video
	As a user
	I want to view a video and view subtitle of video

	Scenario: go to video's page
		Given I'm at the list video page
		When I click on igmae or name of video
		Then I will go the page of this video

	Scenario: control video
		Given I'm at the video'page
		When I click on button play
		Then Video is going to play
		When I click on the time bar
		Then  The video will play the content for the time period you choose
		When I click on the button subtitle
		And select language
		Then I will see subtitles in the language of your choice

	Scenario: control subtitle
		Given I'm at the video'page
		When Video is playing
		Then Subtitle is playing
		And Display the content of the video in real time
		When I click on the subtitle script
		Then  The video will play the content for the time of title script you choose
