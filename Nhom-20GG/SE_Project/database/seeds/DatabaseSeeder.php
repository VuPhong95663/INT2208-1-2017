<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('Videos')->insert([
            ['id' => '1', 'name'=>'A thousand years', 'singer'=>'Christina Perri', 'source'=>'http://www.youtubeinmp4.com/redirect.php?video=rtOvBOTyX00', 'image'=>'http://i.imgur.com/iUorXiU.jpg?2', 'view'=>'100', 'eng'=>'subtitles/a_thousand_year_eng.vtt', 'vi'=>'subtitles/a_thousand_year_vi.vtt'],
            ['id' => '2', 'name'=>'A thousand years', 'singer'=>'Christina Perri', 'source'=>'http://www.youtubeinmp4.com/redirect.php?video=rtOvBOTyX00', 'image'=>'http://i.imgur.com/iUorXiU.jpg?2', 'view'=>'102', 'eng'=>'subtitles/a_thousand_year_eng.vtt', 'vi'=>'subtitles/a_thousand_year_vi.vtt'],
            ['id' => '3', 'name'=>'A thousand years', 'singer'=>'Christina Perri', 'source'=>'http://www.youtubeinmp4.com/redirect.php?video=rtOvBOTyX00', 'image'=>'http://i.imgur.com/iUorXiU.jpg?2', 'view'=>'10', 'eng'=>'subtitles/a_thousand_year_eng.vtt', 'vi'=>'subtitles/a_thousand_year_vi.vtt'],
            ['id' => '4', 'name'=>'A thousand years', 'singer'=>'Christina Perri', 'source'=>'http://www.youtubeinmp4.com/redirect.php?video=rtOvBOTyX00', 'image'=>'http://i.imgur.com/iUorXiU.jpg?2', 'view'=>'10', 'eng'=>'subtitles/a_thousand_year_eng.vtt', 'vi'=>'subtitles/a_thousand_year_vi.vtt'],
            ['id' => '5', 'name'=>'We dont talk anymore', 'singer'=>'Charlie Puth', 'source'=>'http://www.youtubeinmp4.com/redirect.php?video=37Z_bIqIWpg', 'image'=>'http://i.imgur.com/GYueZcO.jpg', 'view'=>'143', 'eng'=>'subtitles/we_dont_talk_anymore_eng.vtt', 'vi'=>'subtitles/we_dont_talk_anymore_vi.vtt'],
            ['id' => '6', 'name'=>'We dont talk anymore', 'singer'=>'Charlie Puth', 'source'=>'http://www.youtubeinmp4.com/redirect.php?video=37Z_bIqIWpg', 'image'=>'http://i.imgur.com/GYueZcO.jpg', 'view'=>'101', 'eng'=>'subtitles/we_dont_talk_anymore_eng.vtt', 'vi'=>'subtitles/we_dont_talk_anymore_vi.vtt'],
            ['id' => '7', 'name'=>'We dont talk anymore', 'singer'=>'Charlie Puth', 'source'=>'http://www.youtubeinmp4.com/redirect.php?video=37Z_bIqIWpg', 'image'=>'http://i.imgur.com/GYueZcO.jpg', 'view'=>'1', 'eng'=>'subtitles/we_dont_talk_anymore_eng.vtt', 'vi'=>'subtitles/we_dont_talk_anymore_vi.vtt'],
            ['id' => '8', 'name'=>'We dont talk anymore', 'singer'=>'Charlie Puth', 'source'=>'http://www.youtubeinmp4.com/redirect.php?video=37Z_bIqIWpg', 'image'=>'http://i.imgur.com/GYueZcO.jpg', 'view'=>'8', 'eng'=>'subtitles/we_dont_talk_anymore_eng.vtt', 'vi'=>'subtitles/we_dont_talk_anymore_vi.vtt'],
            ['id' => '9', 'name'=>'Just give me a resson', 'singer'=>'P!nk', 'source'=>'http://www.youtubeinmp4.com/redirect.php?video=OpQFFLBMEPI', 'image'=>'http://i.imgur.com/IzVA61G.jpg?1', 'view'=>'99', 'eng'=>'subtitles/just_give_me_a_resson_eng.vtt', 'vi'=>'subtitles/just_give_me_a_resson_vi.vtt'],
            ['id' => '10', 'name'=>'Just give me a resson', 'singer'=>'P!nk', 'source'=>'http://www.youtubeinmp4.com/redirect.php?video=OpQFFLBMEPI', 'image'=>'http://i.imgur.com/IzVA61G.jpg?1', 'view'=>'23', 'eng'=>'subtitles/just_give_me_a_resson_eng.vtt', 'vi'=>'subtitles/just_give_me_a_resson_vi.vtt'],
            ['id' => '11', 'name'=>'Just give me a resson', 'singer'=>'P!nk', 'source'=>'http://www.youtubeinmp4.com/redirect.php?video=OpQFFLBMEPI', 'image'=>'http://i.imgur.com/IzVA61G.jpg?1', 'view'=>'232', 'eng'=>'subtitles/just_give_me_a_resson_eng.vtt', 'vi'=>'subtitles/just_give_me_a_resson_vi.vtt'],
            ['id' => '12', 'name'=>'Just give me a resson', 'singer'=>'P!nk', 'source'=>'http://www.youtubeinmp4.com/redirect.php?video=OpQFFLBMEPI', 'image'=>'http://i.imgur.com/IzVA61G.jpg?1', 'view'=>'11', 'eng'=>'subtitles/just_give_me_a_resson_eng.vtt', 'vi'=>'subtitles/just_give_me_a_resson_vi.vtt'],
            
        ]);
    }
}
