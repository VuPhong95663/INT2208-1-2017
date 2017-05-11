Feature: Play a video
	As a user
	I want to watch a video
	In order to play a video

		Scenario: play a video
			Given I am on "/video/3"
			When I click "play"
			Then I can watch the video
		
		Scenario: Change subtitle
			Given I am on "/video/3"
			When I check "English (en)" from "transcript-video"
			Then I should see "Heart beats fast"
			But I check "Viet Nam (vi)" from "transcript-video"
			Then I should see "Tim đập rộn ràng"
		Scenario: Go to 
			Given I am on "/video/3"
			When I click "Heart beats fast"
			Then the video go to "0:20"