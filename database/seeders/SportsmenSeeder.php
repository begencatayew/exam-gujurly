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

            [
                'name' => 'Alparslan',
                'surname' => 'Begenjow',
                'age' => 22,
                'bio' => "Alp Arslan Begenjow is a prominent Turkmen freestyle wrestler who has rapidly emerged as one of the most inspiring and promising athletic talents in Central Asia. Born on August 8, 2006, he showed an early aptitude for combat sports, driven by exceptional discipline, daily resilience, and an unwavering commitment to athletic excellence.
                Competing primarily in the freestyle wrestling category, Begenjow has achieved remarkable milestones on both regional and global stages. He first captured international attention with his standout performances at youth and junior levels, proudly representing Turkmenistan across borders. His technical prowess, sharp tactical intelligence on the mat, and exceptional physical strength have enabled him to secure prestigious titles and medals, including historic podium finishes at the U20 World Wrestling Championships and dominant championship runs in the Asian Championships across multiple age brackets.
                Beyond his impressive medal tally and tournament statistics, Begenjow's rising career represents a massive milestone for Turkmen wrestling development, inspiring a new generation of aspiring athletes in his home country. As he continues to transition into senior-level international competitions, sports analysts and wrestling enthusiasts closely monitor his trajectory, eagerly anticipating future milestones and potential Olympic glory in the years",
                'image' => 'suratlar/alparslan.jpeg',
            ],


            [
                'name' => 'Novak',
                'surname' => 'Djakovic',
                'age' => 39,
                'bio' => "Novak Djokovic, born on May 22, 1987, in Belgrade, Serbia, is widely regarded as one of the greatest professional tennis players in modern sports history. At 39 years old, he continues to leave an indelible mark on the sport through his unmatched skill, mental toughness, and extraordinary physical flexibility on court.
                Beginning his professional career at a very young age, Djokovic quickly rose to international prominence by mastering all court surfaces and capturing numerous Grand Slam titles. These include the Australian Open, French Open, Wimbledon, and the US Open tournaments. He holds the record for most weeks spent at number one.
                His legendary rivalries with fellow greats like Roger Federer and Rafael Nadal have defined a golden era of men's tennis, thrilling sports fans worldwide. Beyond his incredibly impressive collection of trophies, Djokovic has proudly represented Serbia, earning Davis Cup honors and multiple prestigious Olympic medals for his home nation.
                Known for his strict personal discipline, specialized diet, and unyielding resilience during matches, he actively channels his success into charitable work through his own foundation. As an enduring global icon of athletic excellence, Novak Djokovic remains a powerful source of motivation and inspiration for aspiring athletes around the entire world today.",
                'image' => 'suratlar/novak.jpeg',
            ],

            [
                'name' => 'Micheal',
                'surname' => 'Phelps',
                'age' => 45,
                'bio' => "Michael Phelps, born on June 30, 1985, in Baltimore, Maryland, is widely celebrated as the greatest swimmer and most decorated Olympian in sports history. At 41 years old, his extraordinary legacy continues to serve as an enduring benchmark for elite athletic accomplishment across the globe.   Phelps began swimming at a young age and quickly distinguished himself through his ideal physical build, exceptional stroke technique, and unmatched competitive spirit. He made his Olympic debut at the 2000 Sydney Games at just fifteen years old, laying the groundwork for a legendary career. Over five consecutive Olympic Games, Phelps captured a record-breaking twenty-eight total medals, including twenty-three gold medals. His peak achievement arrived at the 2008 Beijing Olympics, where he won eight gold medals in a single Games, breaking Mark Spitz's long-standing record.   Beyond his incredible Olympic achievements, Phelps set numerous world records in butterfly, individual medley, and freestyle events, completely redefining modern competitive swimming. Following his retirement from professional competition after the 2016 Rio Olympics, he dedicated himself to mental health advocacy, water safety education, and philanthropic endeavors through his foundation. Michael Phelps remains a global symbol of athletic excellence, relentless dedication, and historic achievement.",
                'image' => 'suratlar/michealphelps.jpeg',
            ],

            [
                'name' => 'Muhammad',
                'surname' => 'Ali',
                'age' => 74,
                'bio' => "Muhammad Ali, born Cassius Clay on January 17, 1942, in Louisville, Kentucky, is widely celebrated as one of the most influential figures in sports history. Known simply as The Greatest, Ali revolutionized boxing with his incredible hand speed, agile footwork, and supreme confidence. He captured the world heavyweight championship three separate times and defeated legendary rivals in famous historic bouts like the Rumble in the Jungle and the Thrilla in Manila.
                Beyond his extraordinary accomplishments inside the ring, Ali was a global cultural icon who fearlessly used his voice to fight for civil rights, social justice, and religious freedom. His refusal to be drafted during the Vietnam War cost him nearly four years of his prime boxing career, yet it solidified his status as a principled humanitarian. Throughout his life, he inspired millions through his charisma, poetic wit, and unwavering commitment to his core beliefs. Following his battle with Parkinson's disease, Ali passed away in 2016, leaving behind a legacy that transcends sports, making him a timeless symbol of courage, resilience, and personal conviction.",
                'image' => 'suratlar/muhammadali.jpeg',
            ],

            [
                'name' => 'Micheal',
                'surname' => 'Jordon',
                'age' => 63,
                'bio' => "Michael Jordan, born on February 17, 1963, in Brooklyn, New York, is universally recognized as the most iconic basketball player in sports history. Playing primarily for the Chicago Bulls during the 1980s and 1990s, Jordan transformed professional basketball into a global cultural phenomenon through his extraordinary athleticism, competitive spirit, and clutch performances.
                Standing six feet six inches tall, Jordan earned the nickname Air Jordan due to his incredible leaping ability and acrobatic dunks. He led the Chicago Bulls to six NBA championships, winning the Finals Most Valuable Player award in all six victories. Additionally, he earned five regular-season MVP awards and ten scoring titles, proving his absolute dominance on both ends of the basketball court.
                Beyond his incredible stats and championship rings, Jordan became a worldwide marketing legend, revolutionizing athlete endorsements through his famous partnership with Nike. His drive for perfection, relentless work ethic, and fierce determination set a new standard for athletic excellence. Today, as a successful businessman and basketball hall-of-famer, Michael Jordan remains a timeless symbol of greatness, inspiring generations of sports enthusiasts, athletes, and leaders around the world.",
                'image' => 'suratlar/michealjordon.jpeg',
            ],

            [
                'name' => 'Lewis',
                'surname' => 'Hamilton',
                'age' => 41,
                'bio' => "Lewis Hamilton, born on January 7, 1985, in Stevenage, England, is widely celebrated as one of the greatest and most influential drivers in Motorsport history. Rising from a humble background, he developed a passion for racing at a young age, dominating karting competitions before making his Formula One debut with McLaren in 2007.
                In his groundbreaking rookie season, Hamilton instantly showcased his exceptional racecraft, missing the championship by a single point before winning his first World Championship in 2008. His move to Mercedes in 2013 launched an era of unprecedented dominance. Across his career, Hamilton has equaled Michael Schumachers record of seven World Drivers' Championship titles while breaking all-time records for the most pole positions, race victories, and podium finishes in Formula One history.
                Beyond his incredible accomplishments on the track, Hamilton is a prominent global icon and passionate activist. He uses his massive international platform to champion diversity, inclusion, environmental sustainability, and social justice, actively founding initiatives to support underrepresented youth in engineering and motorsport. Combining relentless speed, tactical brilliance, and meaningful advocacy, Lewis Hamilton remains an enduring symbol of athletic excellence and positive global impact.",
                'image' => 'suratlar/lewis.jpeg',
            ],

            [
                'name' => 'Tiger',
                'surname' => 'Woods',
                'age' => 50,
                'bio' => "Eldrick Tiger Woods, born on December 30, 1975, in Cypress, California, is widely celebrated as one of the most dominant and influential figures in golf history. Introduced to the sport during early childhood, he showed extraordinary prodigy before turning professional in 1996.   At age 21, Woods captured his first major title at the 1997 Masters with a historic 12-stroke victory, becoming the tournament's youngest champion. He went on to revolutionize golf through unmatched physical athleticism, intense focus, and unprecedented dominance. Over his legendary career, he has amassed 15 major championships—second only to Jack Nicklaus—and a record-tying 82 PGA Tour victories. Additionally, Woods held the World No. 1 ranking for a record 683 weeks.   Beyond his incredible tournament triumphs, including his famous 2019 Masters comeback, Woods transformed golf into a mainstream global phenomenon. He broke racial barriers, increased international viewership, and inspired a new generation of diverse athletes. Off the course, he directs philanthropic efforts through the TGR Foundation, empowering youth through education and sports. Tiger Woods remains an enduring global icon of athletic brilliance and athletic resilience. ",
                'image' => 'suratlar/tigerwoods.jpeg',
            ],
        ];

        foreach ($sportsmen as $sportsman) {
            Sportsmen::create($sportsman);
        }
    }
}
