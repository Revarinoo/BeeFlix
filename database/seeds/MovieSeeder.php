<?php

use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => "The World Of The Married",
            'photo'=>"theworldofmarried.jpg",
            'description'=>"Ji Sun-woo (Kim Hee-ae) is a revered family medicine doctor and the associate director at Family Love Hospital. She is married to Lee Tae-oh (Park Hae-joon), with whom she has a teenage son, Lee Joon-young (Jeon Jin-seo). Sun-woo seems to have everything from a successful career to a happy family, but unbeknownst to her, she is betrayed by her husband and friends.",
            'rating'=>5
        ]);

        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => "Boys Over Flower",
            'photo'=>"boysoverflowers.jpg",
            'description'=>"Shinhwa Group is shown to be one of South Korea's largest conglomerates and is headed by the strictly arrogant Kang Hee-soo. Her son Gu Jun-pyo (Lee Min-ho) is the leader of F4, the most popular and powerful group of boys at the prestigious Shinhwa High School. Yoon Ji-hu (Kim Hyun-Joong), So Yi-jung, and Song Woo-bin – Gu Jun-pyo's friends and rich heirs in their own right – are all members of the group. When F4 bullies a boy to the verge of suicide, the poor but vivacious Geum Jan-di (Ku Hye-sun) saves his life and receives a swimming scholarship to attend the High School. Geum Jan-di's family runs a dry cleaning business and she lives in a small home with her parents, Geum Il-bong and Na Gong-joo, and her younger brother Geum Kang-san.",
            'rating'=>5
        ]);

        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => "Descendants Of The Sun",
            'photo'=>"descendants1.jpeg",
            'description'=>"Yoo Si-jin (Song Joong-ki) is the captain of a South Korean Special Forces unit. He and his friend Master Sergeant Seo Dae-young (Jin Goo) are off-duty when they witness a young man stealing a motorcycle and apprehend him. The thief, Kim Gi-bum (Kim Min-seok), is injured during the chase and therefore sent to the hospital. Dae-young realizes his cell phone was stolen by the thief and goes to the hospital along with Si-jin to retrieve it.",
            'rating'=>5
        ]);

        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => "Descendants Of The Sun 2",
            'photo'=>"descendants1.jpeg",
            'description'=>"In the emergency room, Si-jin meets Dr. Kang Mo-yeon (Song Hye-kyo) for the first time, and is instantly attracted to her. Mo-yeon mistakenly assumes Si-jin is part of the thief's criminal gang after hearing him being addressed as 'Big Boss', which is actually his call sign. He proves his identity with the help of army surgeon Yoon Myung-ju (Kim Ji-won)",
            'rating'=>4
        ]);

        DB::table('movies')->insert([
            'genre_id' => 2,
            'title' => "Boboiboy",
            'photo'=>"boboiboy.jpg",
            'description'=>"The episode starts with the main character, BoBoiBoy on a trip to his grandfather Tok Aba's home in Pulau Rintis for the school holidays. At the same time, Adu Du, an alien from the planet of Ata Ta Tiga heads to Earth, to search for energy resources. He finds out that there is cocoa, a powerful energy source, which had extinct from his planet about 30,000 years ago. Adu Du wanted to conquer all the cocoa for himself so that he could be a hero for his planet. To make sure his plan succeeded, he sought help from the Power Sphere (Ochobot). However, a series of mishaps occur and BoBoiBoy obtains Ochobot instead. Ochobot then gives some superpowers to BoBoiBoy and his new friends, Ying, Yaya and Gopal.",
            'rating'=>4
        ]);

        DB::table('movies')->insert([
            'genre_id' => 2,
            'title' => "Thomas & Friends",
            'photo'=>"thomasandfriend.jpg",
            'description'=>"Thomas & Friends (originally known as Thomas the Tank Engine & Friends or simply Thomas the Tank Engine; later called Thomas & Friends: Big World! Big Adventures!) is a British children's television series. Based on The Railway Series of books by Reverend Wilbert Awdry and his son Christopher, English writer and producer Britt Allcroft arranged a deal to bring the stories to life as the TV series. In the United Kingdom, it had its first broadcast on the ITV network on October 1984. In the United States, it had its first broadcast on Shining Time Station in 1989.",
            'rating'=>5
        ]);

        DB::table('movies')->insert([
            'genre_id' => 2,
            'title' => "Doraemon The Movie",
            'photo'=>"doraemon.jpg",
            'description'=>"In the beginning, a space ship crashes into the area at dark night. One day, Suneo, Gian and Shizuka decide to make a movie about space-based hero film Guardians of the Galaxy is a magical current blockbuster after Nobita did some rubber band art in front of the little kids. The role of the beast should be played by Nobita to do the film but he cooperated with Suneo group. While they were shooting the film, Gian beats Nobita as he was a space alien and Nobita starts crying and runs away to the house to ask help from Doraemon. After that, they two return where the Suneo's group were shooting the film and Doraemon takes a gadget from his pocket which is a film director called Burger director.",
            'rating'=>5
        ]);

        DB::table('movies')->insert([
            'genre_id' => 2,
            'title' => "Shin-Chan The Movie",
            'photo'=>"sinchan.jpg",
            'description'=>"One day, the Nohara family met a mysterious alien from outer space named Shiriri. On being basked by a ray emitted by Shiriri, Hiroshi and Misae became 25 years younger and appeared as kids. To be able to return into adult form, they must find Shiriri's father, who is somewhere in Japan. This situation, which initially started with Shinnosuke's family and later his friends, gradually involves the entire of Japan.",
            'rating'=>3
        ]);

        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => "Cursed",
            'photo'=>"cursed.jpg",
            'description'=>"Cursed is an American fantasy drama streaming television series, based on the illustrated novel of the same name by Frank Miller and Tom Wheeler, that premiered on Netflix on July 17, 2020. The set location of the series is the United Kingdom.",
            'rating'=>4
        ]);

        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => "Spinning Out",
            'photo'=>"spinningout.jpg",
            'description'=>"Spinning Out follows Kat Baker, an up-and-coming, high-level single skater who is about to turn in her skates after a disastrous fall took her off the competition track. When Kat seizes an opportunity to continue her career as a pair skater with a talented bad-boy partner, she risks exposing a fiercely kept secret that could unravel her entire life. On and off the ice, Kat and her new partner will face daunting odds, injury to body and soul, financial sacrifice, and even potential mental breakdown on their way to realizing their Olympic dream.",
            'rating'=>4
        ]);

        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => "The Last Kingdom",
            'photo'=>"thelastkingdom.jpg",
            'description'=>"In 866, England is divided into the Heptarchy (seven kingdoms). The Vikings conquer York, and other Anglo-Saxon lands are gradually attacked, plundered and ruled by Viking Danes. Finally, only the Kingdom of Wessex is left. The story covers about 40–45 years by the end of season 4. Season 1 covers the years 866–878, season 2 from 878 to 886, season 3 from 893 to 900, and season 4 takes place about 901 to 910.",
            'rating'=>4
        ]);

        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => "Money Heist",
            'photo'=>"moneyheist.jpg",
            'description'=>"Set in Madrid, a mysterious man known as \"The Professor\" recruits a group of eight people, who choose cities for code-names, to carry out an ambitious plan that involves entering the Royal Mint of Spain, and escaping with €2.4 billion. After taking 67 people hostage inside the Mint, the team plans to remain inside for 11 days to print the money as they deal with elite police forces. In the events succeeding the initial heist, the group are forced out of hiding and find themselves preparing for a second heist, this time on the Bank of Spain, as they again deal with hostages and police forces.",
            'rating'=>5
        ]);

    }
}
