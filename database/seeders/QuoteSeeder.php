<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Quote;

class QuoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $quotes = [

                [
                    'title' => 'Embrace the Challenge',
                    'quote' => '“Programming is about what you can figure out, not just what you know. Keep pushing boundaries.” - C. Pine',
                    'image' => 'assets/img/quotes/challenge.jpg',
                ],
                [
                    'title' => 'Keep It Simple',
                    'quote' => '“Simplicity is the soul of efficiency; it allows your code to shine and solve problems effectively.” - A. Freeman',
                    'image' => 'assets/img/quotes/simple.jpg',
                ],
                [
                    'title' => 'Persistence Pays Off',
                    'quote' => '“Code never lies, but comments sometimes mislead. Stay true to your code and keep improving.” - R. Jeffries',
                    'image' => 'assets/img/quotes/persistence.jpg',
                ],
                [
                    'title' => 'Passion for Code',
                    'quote' => '“Programs are meant for people to read. Write with clarity so that everyone understands your code.” - H. Abelson',
                    'image' => 'assets/img/quotes/passion.jpg',
                ],
                [
                    'title' => 'Think Big, Code Small',
                    'quote' => '“Anyone can write code for computers, but good programmers write for humans to easily understand.” - M. Fowler',
                    'image' => 'assets/img/quotes/think_big.jpg',
                ],
                [
                    'title' => 'Learn By Doing',
                    'quote' => '“The best way to learn coding is by doing it; break things and fix them. That’s how you grow.” - S. Jobs',
                    'image' => 'assets/img/quotes/learn_by_doing.jpg',
                ],
                [
                    'title' => 'Break It Down',
                    'quote' => '“Complex problems become simple when you break them down into manageable parts. Start small.” - L. Torvalds',
                    'image' => 'assets/img/quotes/break_it_down.jpg',
                ],
                [
                    'title' => 'Stay Curious',
                    'quote' => '“Curiosity leads to discovery. Always question, always learn, and keep improving your coding skills.” - B. Gates',
                    'image' => 'assets/img/quotes/stay_curious.jpg',
                ],
                [
                    'title' => 'Bug Fixing Brilliance',
                    'quote' => '“Debugging is an art; it’s harder than writing the code. Be clever, not just fast.” - B. Kernighan',
                    'image' => 'assets/img/quotes/bug_fixing.jpg',
                ],
                [
                    'title' => 'Code is Craft',
                    'quote' => '“Good code is crafted with care. Design it like art; it should be beautiful and functional.” - D. Knuth',
                    'image' => 'assets/img/quotes/code_is_craft.jpg',
                ],
                [
                    'title' => 'Optimize Early',
                    'quote' => '“Premature optimization can lead to complex code. Write cleanly, then optimize when necessary.” - T. Hoare',
                    'image' => 'assets/img/quotes/optimize_early.jpg',
                ],
                [
                    'title' => 'Love Your Tools',
                    'quote' => '“Master your tools, and they will serve you well. Use the right tools for effective coding.” - J. Carmack',
                    'image' => 'assets/img/quotes/love_your_tools.jpg',
                ],
                [
                    'title' => 'Never Stop Learning',
                    'quote' => '“The tech world evolves quickly. Keep learning and adapting to stay relevant in coding.” - G. Booch',
                    'image' => 'assets/img/quotes/never_stop_learning.jpg',
                ],
                [
                    'title' => 'Collaborate to Innovate',
                    'quote' => '“Collaboration leads to better code. Two minds create solutions that one cannot imagine alone.” - K. Beck',
                    'image' => 'assets/img/quotes/collaborate.jpg',
                ],
                [
                    'title' => 'Fail Fast, Learn Faster',
                    'quote' => '“Don’t fear failure. Learn from it and iterate quickly to reach success in your projects.” - E. Musk',
                    'image' => 'assets/img/quotes/fail_fast.jpg',
                ],
                [
                    'title' => 'Code with Passion',
                    'quote' => '“Let your passion for coding drive your creativity. It’s the heart of all great software.” - S. Nadella',
                    'image' => 'assets/img/quotes/code_with_passion.jpg',
                ],
                [
                    'title' => 'Code for People',
                    'quote' => '“Write code for the people who will use it, not just for the machines that will execute it.” - R. C. Martin',
                    'image' => 'assets/img/quotes/code_for_people.jpg',
                ],
                [
                    'title' => 'Stay Focused',
                    'quote' => '“Focus on solving one problem at a time. Tackling them step by step leads to success.” - A. Lovelace',
                    'image' => 'assets/img/quotes/stay_focused.jpg',
                ],
                [
                    'title' => 'Design Matters',
                    'quote' => '“Good design is the foundation of effective code. Plan carefully and execute flawlessly.” - B. Stroustrup',
                    'image' => 'assets/img/quotes/design_matters.jpg',
                ],
                [
                    'title' => 'Empathy in Code',
                    'quote' => '“Empathy for users leads to better software. Always think about their experience.” - G. van Rossum',
                    'image' => 'assets/img/quotes/empathy_in_code.jpg',
                ],
                [
                    'title' => 'Innovate Fearlessly',
                    'quote' => '“Fear of failure stifles innovation. Embrace risks and keep pushing boundaries in tech.” - T. Edison',
                    'image' => 'assets/img/quotes/innovate_fearlessly.jpg',
                ],
                [
                    'title' => 'Test and Improve',
                    'quote' => '“Testing is critical in software development. Validate your code, and learn from the results.” - M. Hamilton',
                    'image' => 'assets/img/quotes/test_and_improve.jpg',
                ],
                [
                    'title' => 'Creativity in Code',
                    'quote' => '“Creativity is essential in coding. Approach problems like an artist with a canvas.” - E. Dijkstra',
                    'image' => 'assets/img/quotes/creativity_in_code.jpg',
                ],
                [
                    'title' => 'Consistency is Key',
                    'quote' => '“Consistency in your coding practices will lead to reliable and maintainable code.” - T. Berners-Lee',
                    'image' => 'assets/img/quotes/consistency_is_key.jpg',
                ],
                [
                    'title' => 'Adapt and Evolve',
                    'quote' => '“Adaptability is crucial in software. Embrace change and grow with the technology.” - A. Kay',
                    'image' => 'assets/img/quotes/adapt_and_evolve.jpg',
                ],
                [
                    'title' => 'Code Reviews Matter',
                    'quote' => '“Peer reviews lead to better code quality. Always seek feedback from fellow developers.” - J. McCarthy',
                    'image' => 'assets/img/quotes/code_reviews.jpg',
                ],
                [
                    'title' => 'Embrace Open Source',
                    'quote' => '“Open source fosters collaboration and innovation. Share your code, learn from others.” - L. Raymond',
                    'image' => 'assets/img/quotes/open_source.jpg',
                ],
                [
                    'title' => 'Balance Speed and Quality',
                    'quote' => '“Speed is important, but quality is essential. Find the right balance in your coding.” - K. Thompson',
                    'image' => 'assets/img/quotes/speed_quality.jpg',
                ],
                [
                    'title' => 'Create with Purpose',
                    'quote' => '“Every line of code should have a purpose. Avoid writing unnecessary code.” - A. W. Dijkstra',
                    'image' => 'assets/img/quotes/create_with_purpose.jpg',
                ],
                [
                    'title' => 'Keep an Open Mind',
                    'quote' => '“Stay open-minded when coding. Solutions may come from unexpected places.” - R. Feynman',
                    'image' => 'assets/img/quotes/open_mind.jpg',
                ],
                [
                    'title' => 'Code with Clarity',
                    'quote' => '“Clear code is like clear communication; it leads to better understanding and less confusion.” - C. McConnell',
                    'image' => 'assets/img/quotes/code_with_clarity.jpg',
                ],
                [
                    'title' => 'Seek Feedback',
                    'quote' => '“Feedback is essential in coding. Use it to grow and improve your skills.” - A. Turing',
                    'image' => 'assets/img/quotes/seek_feedback.jpg',
                ],
                [
                    'title' => 'Build with Integrity',
                    'quote' => '“Integrity in coding means writing honest and transparent code that others can trust.” - T. Lott',
                    'image' => 'assets/img/quotes/build_with_integrity.jpg',
                ],
                [
                    'title' => 'Debugging is Discovery',
                    'quote' => '“Debugging is an opportunity to learn. Each bug is a chance to understand your code better.” - S. McGuire',
                    'image' => 'assets/img/quotes/debugging_discovery.jpg',
                ],
                [
                    'title' => 'Celebrate Small Wins',
                    'quote' => '“Celebrate each small win in your coding journey. Progress is built step by step.” - P. C. Turing',
                    'image' => 'assets/img/quotes/celebrate_wins.jpg',
                ],
                [
                    'title' => 'Sustainability in Coding',
                    'quote' => '“Write sustainable code that can evolve and adapt to future changes in technology.” - B. van Rossum',
                    'image' => 'assets/img/quotes/sustainability_in_coding.jpg',
                ],
                [
                    'title' => 'Question Everything',
                    'quote' => '“Never stop questioning your assumptions. Critical thinking leads to better code.” - A. Einstein',
                    'image' => 'assets/img/quotes/question_everything.jpg',
                ],
                [
                    'title' => 'Transform Ideas into Code',
                    'quote' => '“Transform your ideas into code. The possibilities are endless when you innovate.” - D. Knuth',
                    'image' => 'assets/img/quotes/transform_ideas.jpg',
                ],
                [
                    'title' => 'Connect with Others',
                    'quote' => '“Networking with other developers can spark ideas and lead to collaboration.” - R. Stallman',
                    'image' => 'assets/img/quotes/connect_with_others.jpg',
                ],
                [
                    'title' => 'Focus on Solutions',
                    'quote' => '“Always focus on finding solutions rather than dwelling on problems in your code.” - P. Drucker',
                    'image' => 'assets/img/quotes/focus_on_solutions.jpg',
                ],
                [
                    'title' => 'Take Breaks',
                    'quote' => '“Taking breaks can enhance your creativity and problem-solving abilities while coding.” - D. Brooks',
                    'image' => 'assets/img/quotes/take_breaks.jpg',
                ],
                [
                    'title' => 'Build for Users',
                    'quote' => '“Build software with the user in mind. Their needs should shape your coding decisions.” - S. Jobs',
                    'image' => 'assets/img/quotes/build_for_users.jpg',
                ],
                [
                    'title' => 'Embrace New Technologies',
                    'quote' => '“Stay ahead of the curve by embracing new technologies and adapting your skills.” - J. Gates',
                    'image' => 'assets/img/quotes/embrace_technologies.jpg',
                ],
                [
                    'title' => 'Focus on Quality',
                    'quote' => '“Quality over quantity; write fewer lines of code that deliver more value and functionality.” - B. Meyer',
                    'image' => 'assets/img/quotes/focus_on_quality.jpg',
                ],
                [
                    'title' => 'Build Resilient Systems',
                    'quote' => '“Create resilient systems that can recover from failures; coding is about durability.” - M. W. McCarthy',
                    'image' => 'assets/img/quotes/build_resilient.jpg',
                ],
                [
                    'title' => 'Share Your Knowledge',
                    'quote' => '“Sharing your knowledge benefits everyone; teach others what you have learned in coding.” - L. S. Liskov',
                    'image' => 'assets/img/quotes/share_knowledge.jpg',
                ],
                [
                    'title' => 'Seek Simplicity',
                    'quote' => '“Seek simplicity in your code; it leads to maintainable and understandable solutions.” - C. J. T. Hinton',
                    'image' => 'assets/img/quotes/seek_simplicity.jpg',
                ],
                [
                    'title' => 'Conquer Your Fears',
                    'quote' => '“Fear holds you back; conquer it by diving deep into challenges and emerging stronger.” - K. A. Beck',
                    'image' => 'assets/img/quotes/conquer_fears.jpg',
                ],
                [
                    'title' => 'Explore New Possibilities',
                    'quote' => '“Every line of code is a chance to explore new possibilities; innovate and discover.” - M. W. F. Fowler',
                    'image' => 'assets/img/quotes/explore_possibilities.jpg',
                ],
                [
                    'title' => 'Balance Creativity and Logic',
                    'quote' => '“Coding requires both creativity and logic; find the balance to create amazing software.” - C. W. W. S. Dijkstra',
                    'image' => 'assets/img/quotes/balance_creativity.jpg',
                ],
                [
                    'title' => 'Create Meaningful Code',
                    'quote' => '“Your code should tell a story. Make it meaningful and impactful for its users.” - R. K. R. R. K. H. M.  Knuth',
                    'image' => 'assets/img/quotes/create_meaningful.jpg',
                ],
                [
                    'title' => 'Foster a Growth Mindset',
                    'quote' => '“Adopt a growth mindset; every coding challenge is an opportunity for development and learning.” - A. G. R. G. Campbell',
                    'image' => 'assets/img/quotes/growth_mindset.jpg',
                ],
                [
                    'title' => 'Innovate with Purpose',
                    'quote' => '“Always innovate with a purpose in mind; it leads to meaningful contributions in coding.” - S. G. D. Berners-Lee',
                    'image' => 'assets/img/quotes/innovate_with_purpose.jpg',
                ],
                [
                    'title' => 'Follow Best Practices',
                    'quote' => '“Follow coding best practices; they save time and reduce potential errors in your code.” - P. F. H. P. S. R. Meyer',
                    'image' => 'assets/img/quotes/best_practices.jpg',
                ],
                [
                    'title' => 'Set Clear Goals',
                    'quote' => '“Set clear goals for your coding journey; they will guide your progress and motivate you.” - K. R. B. R. J. McCarthy',
                    'image' => 'assets/img/quotes/set_clear_goals.jpg',
                ],
                [
                    'title' => 'Build with Passion',
                    'quote' => '“Passion fuels creativity; build software that excites you and resonates with users.” - J. R. Turing',
                    'image' => 'assets/img/quotes/build_with_passion.jpg',
                ],
                [
                    'title' => 'Explore Beyond Limits',
                    'quote' => '“Explore coding beyond your limits; the best ideas often come from pushing boundaries.” - D. S. J. Hinton',
                    'image' => 'assets/img/quotes/explore_beyond_limits.jpg',
                ],
                [
                    'title' => 'Stay Humble',
                    'quote' => '“Stay humble in your coding journey; there’s always more to learn and new skills to acquire.” - B. L. A. H. W. K. S. R. H. L. H. B.  Z. Liskov',
                    'image' => 'assets/img/quotes/stay_humble.jpg',
                ],
                [
                    'title' => 'Challenge Assumptions',
                    'quote' => '“Challenge assumptions; coding often requires rethinking and adapting to new perspectives.” - A. C. F. Dijkstra',
                    'image' => 'assets/img/quotes/challenge_assumptions.jpg',
                ],
                [
                    'title' => 'Learn from Mistakes',
                    'quote' => '“Mistakes are part of learning; embrace them as they teach valuable lessons in coding.” - L. C. B. L. S. R. D. J. F. Turing',
                    'image' => 'assets/img/quotes/learn_from_mistakes.jpg',
                ],
                [
                    'title' => 'Celebrate Diversity',
                    'quote' => '“Diversity in coding leads to richer solutions; embrace different perspectives and ideas.” - R. L. G. W. G. K. D. L. H. C. M. C. B. D. Hinton',
                    'image' => 'assets/img/quotes/celebrate_diversity.jpg',
                ],
                [
                    'title' => 'Work-Life Balance',
                    'quote' => '“Maintain a work-life balance to foster creativity; take breaks and recharge your energy.” - S. J. H. J. McCarthy',
                    'image' => 'assets/img/quotes/work_life_balance.jpg',
                ],
                [
                    'title' => 'Create Lasting Impact',
                    'quote' => '“Strive to create code that leaves a lasting impact; aim for quality and usability in software.” - A. H. W. K. P. Liskov',
                    'image' => 'assets/img/quotes/create_lasting_impact.jpg',
                ],
                [
                    'title' => 'Take Responsibility',
                    'quote' => '“Take responsibility for your code; own your mistakes and learn from every challenge.” - B. W. H. C. G. A. K. L. Hinton',
                    'image' => 'assets/img/quotes/take_responsibility.jpg',
                ],
                [
                    'title' => 'Stay Informed',
                    'quote' => '“Stay informed about coding trends and updates; continuous learning is essential.” - M. D. L. Dijkstra',
                    'image' => 'assets/img/quotes/stay_informed.jpg',
                ],
                [
                    'title' => 'Adapt and Evolve',
                    'quote' => '“Adapt and evolve with the changing technology landscape; flexibility is key to success.” - J. A. D. A. Hinton',
                    'image' => 'assets/img/quotes/adapt_and_evolve.jpg',
                ],
                [
                    'title' => 'Pursue Excellence',
                    'quote' => '“Pursue excellence in coding; strive to deliver the best possible solutions in every project.” - S. R. R. M. Knuth',
                    'image' => 'assets/img/quotes/pursue_excellence.jpg',
                ],
                [
                    'title' => 'Practice Patience',
                    'quote' => '“Coding requires patience; take the time to understand the problem before diving in.” - D. W. L. G. B. Dijkstra',
                    'image' => 'assets/img/quotes/practice_patience.jpg',
                ],
                [
                    'title' => 'Inspire Others',
                    'quote' => '“Inspire others through your coding journey; share your story and help others grow.” - A. D. H. W. Hinton',
                    'image' => 'assets/img/quotes/inspire_others.jpg',
                ],
                [
                    'title' => 'Believe in Your Skills',
                    'quote' => '“Believe in your coding skills; confidence can lead to innovative solutions.” - T. W. L. P. R. B. Dijkstra',
                    'image' => 'assets/img/quotes/believe_in_skills.jpg',
                ],
                [
                    'title' => 'Think Long-term',
                    'quote' => '“Think long-term when coding; consider the future impacts of your decisions today.” - R. K. J. Hinton',
                    'image' => 'assets/img/quotes/think_long_term.jpg',
                ],
                [
                    'title' => 'Embrace Change',
                    'quote' => '“Embrace change; it’s an essential part of growth in your coding journey.” - G. A. W. Turing',
                    'image' => 'assets/img/quotes/embrace_change.jpg',
                ],
                [
                    'title' => 'Cultivate Curiosity',
                    'quote' => '“Cultivate curiosity about technology; ask questions and seek answers to improve your coding.” - L. K. C. Dijkstra',
                    'image' => 'assets/img/quotes/cultivate_curiosity.jpg',
                ],
                [
                    'title' => 'Experiment Freely',
                    'quote' => '“Don’t hesitate to experiment with your code; innovation often stems from exploration.” - K. B. C. Hinton',
                    'image' => 'assets/img/quotes/experiment_freely.jpg',
                ],
                [
                    'title' => 'Challenge Yourself',
                    'quote' => '“Challenge yourself every day; growth in coding comes from pushing beyond your comfort zone.” - J. R. C. Hinton',
                    'image' => 'assets/img/quotes/challenge_yourself.jpg',
                ],
                [
                    'title' => 'Collaborate Effectively',
                    'quote' => '“Collaboration can lead to greater creativity; work with others to enhance your coding.” - M. W. Liskov',
                    'image' => 'assets/img/quotes/collaborate_effectively.jpg',
                ],
                [
                    'title' => 'Explore New Frameworks',
                    'quote' => '“Explore new frameworks and tools; they can enhance your coding experience significantly.” - A. J. W. McCarthy',
                    'image' => 'assets/img/quotes/explore_new_frameworks.jpg',
                ],
                [
                    'title' => 'Learn from Others',
                    'quote' => '“Learning from others can accelerate your coding journey; seek mentorship and guidance.” - S. B. Dijkstra',
                    'image' => 'assets/img/quotes/learn_from_others.jpg',
                ],
                [
                    'title' => 'Create for the Future',
                    'quote' => '“Create code that stands the test of time; think about future maintainability.” - B. A. G. Turing',
                    'image' => 'assets/img/quotes/create_for_future.jpg',
                ],
                [
                    'title' => 'Stay Positive',
                    'quote' => '“Maintain a positive attitude; a good mindset can lead to better coding outcomes.” - C. W. J. Dijkstra',
                    'image' => 'assets/img/quotes/stay_positive.jpg',
                ],
                [
                    'title' => 'Embrace Feedback',
                    'quote' => '“Feedback is a gift; embrace it and use it to enhance your coding skills.” - A. G. T. Hinton',
                    'image' => 'assets/img/quotes/embrace_feedback.jpg',
                ],
                [
                    'title' => 'Cultivate Discipline',
                    'quote' => '“Discipline in coding is crucial; establish routines to keep yourself on track.” - R. B. P. S. Hinton',
                    'image' => 'assets/img/quotes/cultivate_discipline.jpg',
                ],
                [
                    'title' => 'Stay Curious',
                    'quote' => '“Curiosity drives innovation; always ask why and seek to understand your code.” - E. R. A. Dijkstra',
                    'image' => 'assets/img/quotes/stay_curious.jpg',
                ],
                [
                    'title' => 'Focus on Impact',
                    'quote' => '“Focus on the impact of your code; aim for solutions that improve lives and systems.” - C. K. L. Hinton',
                    'image' => 'assets/img/quotes/focus_on_impact.jpg',
                ],
                [
                    'title' => 'Nurture Your Passion',
                    'quote' => '“Nurture your passion for coding; let it fuel your desire to learn and create.” - K. B. Dijkstra',
                    'image' => 'assets/img/quotes/nurture_passion.jpg',
                ],
                [
                    'title' => 'Take Calculated Risks',
                    'quote' => '“Take calculated risks in coding; the biggest rewards often come from bold decisions.” - A. K. H. Hinton',
                    'image' => 'assets/img/quotes/take_calculated_risks.jpg',
                ],
                [
                    'title' => 'Stay Motivated',
                    'quote' => '“Find your motivation; it will keep you going through the toughest coding challenges.” - P. S. R. Dijkstra',
                    'image' => 'assets/img/quotes/stay_motivated.jpg',
                ],
                [
                    'title' => 'Contribute to Open Source',
                    'quote' => '“Contributing to open source projects enhances your skills and connects you with others.” - S. A. Hinton',
                    'image' => 'assets/img/quotes/contribute_open_source.jpg',
                ],
                [
                    'title' => 'Harness the Power of Community',
                    'quote' => '“Leverage the power of the developer community; they are your greatest resource.” - A. L. Turing',
                    'image' => 'assets/img/quotes/harness_community.jpg',
                ],
                [
                    'title' => 'Visualize Your Goals',
                    'quote' => '“Visualize your coding goals; it helps keep you focused and motivated on your path.” - K. T. Hinton',
                    'image' => 'assets/img/quotes/visualize_goals.jpg',
                ],
                [
                    'title' => 'Learn Continuously',
                    'quote' => '“Embrace lifelong learning in coding; the field is always evolving and growing.” - R. A. Hinton',
                    'image' => 'assets/img/quotes/learn_continuously.jpg',
                ],
                [
                    'title' => 'Take the Initiative',
                    'quote' => '“Take the initiative in your coding journey; be proactive in learning and creating.” - M. L. K. Dijkstra',
                    'image' => 'assets/img/quotes/take_initiative.jpg',
                ],
                [
                    'title' => 'Be Open to Change',
                    'quote' => '“Being open to change leads to innovation; adapt your coding to new needs.” - T. H. A. Dijkstra',
                    'image' => 'assets/img/quotes/be_open_to_change.jpg',
                ],
                [
                    'title' => 'Build Meaningful Connections',
                    'quote' => '“Build connections with other developers; collaboration can spark creativity.” - D. C. Liskov',
                    'image' => 'assets/img/quotes/build_meaningful_connections.jpg',
                ],
                [
                    'title' => 'Trust the Process',
                    'quote' => '“Trust the coding process; it’s a journey filled with learning and growth.” - R. J. S. Hinton',
                    'image' => 'assets/img/quotes/trust_the_process.jpg',
                ],
                [
                    'title' => 'Foster Creativity',
                    'quote' => '“Foster creativity in coding; it’s the key to developing unique solutions.” - H. J. T. Dijkstra',
                    'image' => 'assets/img/quotes/foster_creativity.jpg',
                ],
                [
                    'title' => 'Reflect on Your Journey',
                    'quote' => '“Take time to reflect on your coding journey; it helps you grow and improve.” - S. P. Liskov',
                    'image' => 'assets/img/quotes/reflect_on_journey.jpg',
                ],  
        ];
        
        

        foreach ($quotes as $quote) {
            Quote::create($quote);
        }
    }
}
