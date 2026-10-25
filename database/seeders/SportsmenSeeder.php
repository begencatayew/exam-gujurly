<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sportsmen;

class SportsmenSeeder extends Seeder
{
    public function run(): void
    {
        $sportsmen = [
            [
                'name' => 'Cristiano',
                'surname' => 'Ronaldo',
                'age' => 41,
                'bio' => "Cristiano Ronaldo dos Santos Aveiro was born in Madeira, Portugal, in 1985. From humble beginnings, he developed an unmatched passion for football, joining the Sporting CP youth academy as a teenager. His incredible talent quickly caught the attention of Manchester United manager Sir Alex Ferguson, who signed him in 2003. At United, Ronaldo matured into a world-class winger, winning his first Premier League titles, the Champions League, and his inaugural Ballon d'Or in 2008.
                In 2009, he made a record-breaking transfer to Real Madrid. During his nine glorious seasons in Spain, Ronaldo shattered goalscoring records, became the club's all-time leading scorer, and captured four more Champions League trophies alongside multiple Ballon d'Or awards. His intense rivalry with Lionel Messi defined a golden era of football.
                Following his tenure at Real Madrid, Ronaldo continued his career with successful stints at Italian powerhouse Juventus and an emotional return to Manchester United. In late 2022, he embarked on a new adventure in Saudi Arabia, joining Al-Nassr and continuing to break scoring records in the Saudi Pro League.
                On the international stage, Ronaldo represents the Portugal national team with immense pride. He led his country to historic victories, winning the UEFA European Championship in 2016 and the UEFA Nations League in 2019. He also holds the record as the all-time leading goalscorer in men's international football and became the first player to score in five different World Cup tournaments.",
                'image' => 'suratlar/ronaldo.jpg',
            ],
            [
                'name' => 'Lionel',
                'surname' => 'Messi',
                'age' => 39,
                'bio' => "Lionel Andrés Messi was born in Rosario, Argentina, in 1987. From a young age, his extraordinary talent was evident, though he faced a growth hormone deficiency that required costly medical treatment. Barcelona offered to pay for his treatment, leading Messi to move to Spain at age thirteen and join the famous La Masia academy.
                Messi quickly rose through the ranks, making his first-team debut in 2004. Over seventeen legendary seasons with Barcelona, he shattered scoring records, won ten La Liga titles, four Champions League trophies, and multiple Ballon d'Or awards. His unmatched dribbling, vision, and clinical finishing established him as one of football's absolute greatest.
                In 2021, Messi transferred to Paris Saint-Germain, securing back-to-back Ligue 1 titles. In 2023, he embarked on a new chapter in the United States by joining Inter Miami in Major League Soccer, where he continued to captivate international audiences.
                On the international stage, Messi captained Argentina through unforgettable triumphs. After winning the 2021 Copa América, he achieved his ultimate dream by guiding Argentina to victory at the 2022 FIFA World Cup in Qatar. Known for his humility, vision, and extraordinary discipline, Messi's iconic career has permanently defined the golden era of modern sports history.",
                'image' => 'suratlar/messi.jpeg',
            ],
            [
                'name' => 'LeBron',
                'surname' => 'James',
                'age' => 41,
                'bio' => "LeBron Raymone James Sr. was born in Akron, Ohio, in 1984. Raised by a single mother in challenging circumstances, his extraordinary athletic ability quickly brought him national attention as a high school prodigy. Selected first overall in the 2003 NBA Draft by the Cleveland Cavaliers, he immediately transformed the franchise into a formidable title contender.
                Seeking his first championship, LeBron joined the Miami Heat in 2010, winning back-to-back NBA titles and MVP awards. He made an emotional return to Cleveland in 2014, fulfilling his promise to bring a championship to his home state by delivering an iconic comeback victory in the 2016 NBA Finals.
                In 2018, LeBron signed with the Los Angeles Lakers, leading them to another NBA championship in 2020. Celebrated for his exceptional court vision, versatility, and remarkable career longevity, he eventually broke Kareem Abdul-Jabbar's long-standing record to become the NBA's all-time leading scorer.
                Beyond basketball, LeBron is a prominent businessman, cultural icon, and philanthropist. His I PROMISE School provides vital educational support to underprivileged children in his hometown. Combining unmatched athletic prowess with influential leadership, LeBron James has built an enduring legacy as one of the greatest athletes in human history.",
                'image' => 'suratlar/lebronjames.jpeg',
            ],
        ];

        foreach ($sportsmen as $sportsman) {
            Sportsmen::create($sportsman);
        }
    }
}
