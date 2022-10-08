<?php
include $_SERVER['DOCUMENT_ROOT'] . "/api/light.php";

$hidewaitinglist = true;
$showterms = true;
$hidecookieconset = true;
$hidemenu = true;
$hidesocials = true;
$disabletopmenulink = true;
$hidecookieconset = true;

$title = "Todorescu Method™ - Todorescu.com";
include php_root() . 'php/lp-header.php';
?>

<script>
    window.VIEW_CONTENT_EVENT = 10422793
</script>

<?php if (!$isDev) : ?>
    <script>
        setTimeout(async () => {
            await window.lintrk('track', {
                conversion_id: window.VIEW_CONTENT_EVENT
            });
        }, 1000)
    </script>
<?php endif ?>

<style>
    .main-container {
        max-width: 55vw;
        opacity: .95;
    }

    h1.maintitle {
        color: black !important;
        font-size: 1.5rem !important;
        font-family: oswald;
        margin-bottom: 25px;
    }

    .btn-read-more {
        padding: 15px 25px !important;
    }

    .btn-read-more span {
        font-family: oswald;
    }

    strong {
        font-family: oswald;
    }

    span {
        color: #aa0000;
        font-family: oswald;
        font-weight: bold;
        font-size: 1.75rem;
    }

    p {
        color: black;
        font-family: coolvetica;
        font-size: 1.25rem;
        letter-spacing: 1px;
    }

    ul.terms {
        text-align: center;
        padding: 0;
        margin-top: 15px;
    }

    ul.terms li {
        list-style: none;
        padding: 5px;
    }

    ul.terms li a {
        font-family: oswald;
        color: black;
    }

    .confession-new-item,
    .confessions .confession-new-item video {
        padding: 0 !important;
    }

    @media (max-width: 768px) {
        .main-container {
            max-width: 95vw;
        }
    }
</style>


<main id="main">
    <section class="hero pb-0">
        <div class="container main-container" style="background-color: white;">
            <div class="text-center">
                <h1 class="maintitle">
                    “Find out how clever individuals with zero programming experience get web-development jobs by doing something completely unique.”
                </h1>
                <p class="text-left">
                    Hello friend,
                    <br><br>
                    What if someone gave you a dollar every time you quit programming…
                    <br><br>
                    Defeated, yet again by this beast, hiding back in your cold cave, numbing the pain with your precious video games… or porn, or even both at the same time.
                    <br><br>
                    You know you should be doing the courses you bought, but man, this shit is hard; if only things would just click.
                    <br><br>
                    If only I were just a bit smarter, if only I’d paid more attention during math classes.
                    <br><br>
                    Even when you’re giving your best, you’re still unsure if you’re going in the right direction.
                    <br><br>
                    There are so so many ways you could be a programmer. It’s like drowning in an endless ocean of tutorials, not knowing which way is up anymore.
                    <br><br>
                    Starting a million projects, never finishing them? That part you got right. All projects online are garbage.
                    <br><br>
                    Be HONEST. You’re kinda embarrassed by your own code. Aren’t you?
                    <br><br>
                    You remember days when you’ve wasted endless hours on something so basic only to find yourself defeated again.
                    <br><br>
                    You know you should have figured it out by now, but nothing seems ever to click. No matter who you copy or how much code you steal from StackOverflow, you feel something is missing but can’t really tell what; you just know it’s there.
                    <br><br>
                    You wonder what others are doing that seems to work. You wonder if they are naturally born for this, but you’re not.
                    <br><br>
                    Would you love to work full-time as a developer finally? No more trying to squeeze time after your current job, between kids, or while your wife is sleeping.
                    <br><br>
                    What if programming can be your full-time job while growing your skill, getting paid well, plus having freedom for hobbies or friends/family?
                    <br><br>
                    Be real.
                    <br><br>
                    Do you want to make a lot of money with this?
                    <br><br>
                    If some of this tickled your skin, then make sure you don’t blink at what I’m about to reveal next. Taking just a sample taste of this sour information can potentially shave years of failure in your career.
                    <br><br>
                    But first… You might be wondering.
                    <br><br>
                    <strong>“Who’s the person behind this written letter?”</strong>
                    <br><br>
                    If you allow me, let me introduce myself briefly.
                    I’m Tudor Todorescu. I’ve let programming enhance my lifestyle.
                    <br><br>
                    I’ve sterilized all my financial problems just by crafting source code for companies. I’m a bit contrarian, which is the secret advantage that allows me to get sunshine-clarity on the solutions I provide for the companies I work for.
                    <br><br>
                    Because of this, I’ve gained widespread notoriety, and because of that, many asked me to show them my ways to get the same results. <strong style="text-decoration: underline;">Over $100,000 yearly salaries while having unlimited freedom.</strong>
                    <br><br>
                    Initially, I was reluctant to teach any of this. Still, since many developers from the community insisted, as time flew by, I started to feel a pang of guilt in my stomach. Me having all of this fortune, and others still struggling to even get a simple junior job.
                    <br><br>
                    That consuming thought made it hard for me to just enjoy the hard-earned material things I’ve bought. It wasn’t fair for me to enjoy life while others are in need.
                    <br><br>
                    I’ve decided to at least try to help someone achieve a piece of this glory. Opened some spots and didn’t expect any sparks to fly, but to my surprise, it worked. It just clicked for others as well. A few of my trial students got similar results fast.
                    <br>
                <div class="confessions">
                    <div class="confession-new-item">
                        <video controls="controls" poster="<?= root() . 'assets/img/robert-thumb_.jpg' ?>">
                            <source src="<?= root() . 'assets/video/interviu-robert.mp4' ?>" type="video/mp4">
                        </video>
                        <div class="text">
                            Tudor helped Robert <strong>kickstart his programming journey</strong> and got him focused on what matters, JavaScript.
                        </div>
                    </div>
                </div>
                <br>
                <div style="text-align: left; font-family: coolvetica; letter-spacing: 1px; font-size: 1.25rem;">
                Since it’s a disservice not to make this available, I’ve decided to reveal my secrets publicly.
                <br><br>
                Here’s why most “programmers” aren’t seeing the forest for the trees.
                <br><br>
                Pay attention since I’ll go deep.
                <br><br>
                <strong>You need commercial programming experience, not educational programming experience</strong> (which you probably have)
                <br><br>
                Companies don’t hire people who know programming theories. Companies hire people who make them more money by creating systems with programming.
                <br><br>
                Read that again.
                <br><br>
                <strong>Let it sink in. </strong>
                <br><br>
                If you understand the true value in that statement, then…
                <br><br>
                Pay close attention to what’s coming up next, since it has the potential to change everything for you.
                <br><br>
                <span>Here’s What It’s All About</span>
                <br><br>
                I remember the year was 2011. It was, I think, the end of November, close to my birthday. While I was sitting in my parent's house, melting my eyes into that bright 15” screen in my dark room, I suddenly had a sobering realization. My life will be one giant endless howling winter when I arrive in my 30s. It’s going to be cold, lonely, and without any color. Then I’ll die.
                <br><br>
                Worse than that, I’ll have to get a job… Ohhh boy, if I’m complaining about developer jobs now, I don’t even want to imagine the agony of working 10-hour shifts at our local convenience store.
                <br><br>
                I had to do something. I had to move quickly. It was already 3-4 years since I started then quit a bunch of programming languages… JavaScript, PHP, Ruby, C++, Visual Basic even… but everything was still illogical.
                <br><br>
                I felt discouraged. The more I tried, the worse it was. <strong style="text-decoration: underline">It felt like quicksand.</strong>
                <br><br>
                The only project I got paid for was a client in 2008 who was a family friend btw.
                <br><br>
                There is a bright side, though.
                <br><br>
                Back then, the internet wasn’t full of crap like today. I'm not sure how I’ve come up with this, but <strong>out of desperation, I’ve had to invent a plan that I can execute. </strong>
                <br><br>
                The goal was this:
                <br><br>
                by the following year's end of summer, I’ll be a fully-employed software developer. That was the dream.
                <br><br>
                <span>
                    “It was crucial to come up with a way to get industry experience without having industry experience.”
                </span>
                <br><br>
                Let’s get real here for a second. Nobody in the history of mankind has hired someone for a developer role, just because he made flappy birds from a youtube video. Be honest, guys.
                <br><br>
                Talking about birds, it was a chicken and an egg situation. You need an egg to have a chicken, and you need a chicken to have an egg. You have none of them. What do you do?
                <br><br>
                I decided to get some eggs.
                <br><br>
                After I had eaten them, I decided to make my own website/app kinda-off. Instead of going in a million directions, I’ve done this project with a professional approach.
                <br><br>
                I gave myself a tech project consultation.
                <br><br>
                I imagine I’m the client. Being in the position of the money man, what questions would I ask a developer? What would I expect, want from him?
                <br><br>
                Then I imagined being on the other receiving end. I imagine I’m the developer, and what type of questions would I ask my client to understand his needs better.
                <br><br>
                This weird approach made this whole thing more real. I then learned that imagination is everything. It’s part of being a developer. It’s what you get paid for. Remember this quote:
                <br><br>
                <strong>“I see it when I believe it.”</strong>
                <br><br>
                Let’s get back to our story. So, once I had down the questions and answers in a document, I designed wireframes, made them through photoshop, split the project into categories, and created tasks for each category.
                <br><br>
                This got me so so excited because I was finally doing a real-life project for which companies pay top money.
                <br><br>
                <span>Productivity and performance went through the roof!
                </span>
                <br><br>
                I’ve finally cracked it.
                <br><br>
                That one spark of genius got me my first commercial project on my cv.
                <br><br>
                Parents had a telecommunication company. Even better, I did the same process and did their commercial project.
                <br><br>
                I now had two projects.
                <br><br>
                It’s easy to find someone nearby that needs programming work for their company.
                <br><br>
                Just remember, professionally speaking, I was keeping myself to a higher standard ( I was still partying, it’s my 20s, after all ).
                <br><br>
                However, I behaved like a professional when I stepped into meetings. I’ve redecorated my room to be more like an office. Believe it or not, I got clients to come by my house for consultations.
                <br><br>
                I contacted companies through email, phone calls, and even going there in person with a clipboard.
                <br><br>
                <strong>I was on a mission.</strong>
                <br><br>
                Each new client I signed up with started bringing me more confidence, skill, plus projects on my resume.
                <br><br>
                For each job I’ve done, I used my consulting method. Like a serious business, like a serious programmer/consultant.
                <br><br>
                Sometimes, I’ll just offer them a free demo project and put that on my portfolio.
                <br><br>
                The point is, I was doing the legwork, and <strong>it didn’t take me more than five months to skip wasting years of being an internship or junior in some shitty corporate company only to beg for a mid-level position.
                </strong>
                <br><br>
                Finally, around July 2012, I had 2-3 pages on my resume, so I emailed serious software companies in the bigger cities. I got invited to maybe 4-5 interviews and got hired for a mid-level position.<br><br>
                Couldn’t believe it. My very first job was as a mid-level developer. Just like that.
                <br><br>
                I was handed the responsibility of developing complex projects. You'll grow fast when you get to work on a production project with actual paying users.
                <br><br>
                I’ve always used my analytical consulting way of asking the right questions and <strong>applied true problem-solving.</strong>
                <br><br>
                <span>True problem-solving is concernedly misunderstood</span>
                <br><br>
                It’s never about the actual code or algorithms. It’s always about understanding requirements. That’s where everybody gets it wrong.
                <br><br>
                And man, social media makes it worse.
                <br><br>
                I see it everywhere, the blind leading the blind.
                <br><br>
                Developers with a few years experience suddenly start teaching through cheap courses.
                <br><br>
                Wanna-be developers think it’s about the code. It isn’t.
                It’s about the people.
                <br><br>
                The more I invested in my people approach, the more I earned.
                <br><br>
                Now I’m close to $100.000 per year and working entirely remotely in Romania. Money is nice, but I find it criminal not to share my knowledge. To get developers out of the coding jungle they got lost in years ago.
                <br><br>
                This year I’ve decided to mentor 30 eager-to-learn individuals directly. They helped figure out exactly how to tailor this approach to make it work for them.
                <br><br>
                Seeing the students getting the results they’ve always wanted but were out of reach really filled my heart with joy.
                <br><br>
                Radu worked for me on a few commercial startups, and because of that, he got the proper experience (+guidance) to land his first mid-level front-end developer job.
                <br><br>
                <span>…and that’s how Todorescu.com was born</span>
                <br>

                <div class="confessions">
                    <div class="confession-new-item">
                        <video controls="controls" poster="<?= root() . 'assets/img/radu-thumb_.jpg' ?>">
                            <source src="<?= root() . 'assets/video/interviu-radu.mp4' ?>" type="video/mp4">
                        </video>
                        <div class="text">
                            Radu went from a junior job to <strong>getting his first mid-level position</strong>, using our method.
                        </div>
                    </div>
                </div>

                <br>
                <div style="text-align: left; font-family: coolvetica; letter-spacing: 1px; font-size: 1.25rem;">
                    We created a method like anything out there.
                    <br><br>
                    It’s not a boot camp where we teach you basics, oh no no.
                    <br><br>
                    It’s not a code-along useless code, oh no no.
                    <br><br>
                    It’s more than that.
                    <br><br>
                    It’s deep.
                    <br><br>
                    It’s about seeing things entirely differently.
                    <br><br>
                    It’s about doing things so unique and rare that you’ll instantly stand out.
                    <br><br>
                    It’s about building projects you’ve always dreamed of.
                    <br><br>
                    It’s about getting insider coding hacks that no interviewer can ignore you.
                    <br><br>
                    It’s about growing into your best self and dominating.
                    <br><br>
                    Never again worry about your next developer job
                    <br><br>
                    Imagine if you would go to your next interview, and they ask you:
                    <strong>“So, what experience do you have?”</strong>
                    <br><br>
                    And you say:
                    <strong>“I’m the founder of X, the Netflix of Y”</strong>
                    <br><br>
                    Do you think you’ll have trouble getting hired then?
                    <br><br>
                    Of course not.
                    <br><br>
                    Together, we will properly guide you, consult with you, and we’ll find your most profound passion, something that keeps you up at night.
                    <br><br>
                    We’ll guide you through the thinking process and give you templates, formulas, and cheat sheets to internalize this new way of doing things.
                    <br><br>
                    We’ll teach you our proprietary consulting method, that’ll be yours for life.
                    <br><br>
                    You’ll get to practice dummy-consulting with us, and other students to become comfortable in simulated environments.
                    <br><br>
                    Then, you have all tools and are equipped to go out there in the world to really solve problems. You’ll make jealousy-provoking money on your own terms.
                    <!-- <br><br>
                    <a href="<?= root() ?>call" class="btn-read-more" target="_blank">
                        <span style="font-family: oswald;">Book my FREE information call</span>
                    </a> -->
                    <br><br>
                    <div class="confessions">
                        <div class="confession-new-item">
                            <video controls="controls" poster="<?= root() . 'assets/img/cristi-thumb_.jpg' ?>">
                                <source src="<?= root() . 'assets/video/interviu-cristi.mp4' ?>" type="video/mp4">
                            </video>
                            <div class="text">
                                Using our consulting calls, Cristi <b>significantly upgraded his programming skills</b>, making him more desirable for companies
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <span style="font-family: oswald;">DOES THIS SOUND LIKE YOU?</span>
                    <br>
                    <ol>
                        <li style="text-align: left; font-family: coolvetica; letter-spacing:1px; padding: 15px 0; font-size: 1.25rem;">No real-life experience for actual companies, just shitty completion degrees from “boot camps” and useless half-finished projects on your resume?</li>

                        <li style="text-align: left; font-family: coolvetica; letter-spacing:1px; padding: 15px 0; font-size: 1.25rem;">Do you believe other developers are more intelligent and they understand algorithms better than you so that’s why you’re not hired yet?</li>

                        <li style="text-align: left; font-family: coolvetica; letter-spacing:1px; padding: 15px 0; font-size: 1.25rem;">Are you still confused about which direction to go, haven’t still yet decided on which tech to fasten your seatbelt on?</li>

                        <li style="text-align: left; font-family: coolvetica; letter-spacing:1px; padding: 15px 0; font-size: 1.25rem;">You don’t understand what exactly companies need from you.</li>
                    </ol>
                    <br>
                    <div class="confessions">
                        <div class="confession-new-item">
                            <video controls="controls" poster="<?= root() . 'assets/img/mihnea-thumb_.jpg' ?>">
                                <source src="<?= root() . 'assets/video/interviu-mihnea.mp4' ?>" type="video/mp4">
                            </video>
                            <div class="text">
                                Mihnea, while still in high-school, he got help with thinking and with his career path.
                            </div>
                        </div>
                    </div>
                    <br>
                    <span>WHAT WE’RE OFFERING</span>
                    <br>
                    <ul>
                        <li style="text-align: left; font-family: coolvetica; font-size: 1.25rem; letter-spacing: 1px; padding: 15px 0;">
                            We’ll help you build/launch your unique/personal start-up, code it from start to finish, and then leverage it straight into a mid-level developer position.
                        </li>
                        <li style="text-align: left; font-family: coolvetica; font-size: 1.25rem; letter-spacing: 1px; padding: 15px 0;">
                            Our proprietary method of analysis and consulting, from researching the project to breaking down tasks for you to achieve. To full support along the way by doing it together.
                        </li>
                        <li style="text-align: left; font-family: coolvetica; font-size: 1.25rem; letter-spacing: 1px; padding: 15px 0;">
                            We also train you in real-life situational interviews. We’ll also, as a bonus show you some sneaky ways to go about it that will make you stand out. We’ll even tell you what to say to blow the technical interviewers' socks of (they will be the ones who learn stuff from you, imagine that)
                        </li>
                        <li style="text-align: left; font-family: coolvetica; font-size: 1.25rem; letter-spacing: 1px; padding: 15px 0;">
                            If you play your cards right, we have access to a network of 5000 recruiters/companies that love to hire talented developers like yourself (once we are done with you, of course)
                        </li>
                        <li style="text-align: left; font-family: coolvetica; font-size: 1.25rem; letter-spacing: 1px; padding: 15px 0;">
                            We also offer 1 year of student access to bi-weekly calls for support after they get hired.
                        </li>
                    </ul>

                    <!-- <br><br>
                    <a href="<?= root() ?>call" class="btn-read-more" target="_blank">
                        <span style="font-family: oswald;">Book my FREE information call</span>
                    </a> -->
                    <br>
                    <div style="font-family: coolvetica; letter-spacing: 1px; font-size: 1.25rem; text-align: left;">
                        If you are so close to breaking through, you can almost taste it…
                        <br><br>
                        Then this is your shot.
                        <br><br>
                        A shot at finally cracking the code and building a successful career as an authentic software engineer.
                        <br><br>
                        A total coaching, mentorship & breakthrough experience…
                        <br><br>
                        Available for a select few… 5-10 of you will have their life changed by this time next year
                        <br><br>
                        <span>
                            IMAGINE HOW THINGS WILL
                            CHANGE FOREVER
                        </span>
                        <br><br>
                        Imagine having actual experience going in your next interview
                        <br><br>
                        Imagine bringing a distinctive project to the world with your own hands.
                        <br><br>
                        Imagine no more fear and doubt about whether you’ll become a software developer.
                        <br><br>
                        Imagine being so at ease, knowing you got the right training, knowing true professionals have your back, even cheering with you, celebrating your wins.
                        <br><br>
                        Imagine finally getting financial independence. Imagine getting a killer high-paying skill. Imagine getting the bragging rights that come from doing something that matters.
                        <br><br>
                        Imagine being your boss and commanding your hourly rate.
                        <!-- <br><br>
                        <a href="<?= root() ?>call" class="btn-read-more" target="_blank">
                            <span style="font-family: oswald;">Book my FREE information call</span>
                        </a> -->
                        <br><br>
                        <div class="confessions">
                            <div class="confession-new-item">
                                <video controls="controls" poster="<?= root() . 'assets/img/petrisor-thumb_.jpg' ?>">
                                    <source src="<?= root() . 'assets/video/interviu-petrisor.mp4' ?>" type="video/mp4">
                                </video>
                                <div class="text">
                                    Petrisor says Tudor's mentoring made a huge difference in his progress.<strong>"Tudor's a natural"</strong>.
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <span>WHY YOU’RE FAILING</span>
                        <br><br>
                        Here’s the thing, true leaders never chase. If right now you’re watching all tutorials and coding precisely what the supposed instructor is teaching you, then you should pretty much give up. Our human instincts are to follow the crowds, but if you want others to follow you, companies to chase you down, you gotta walk your way.
                        <br><br>
                        I’ll show you how to come up with contrarian projects, plus position your work as the next best thing since peanut butter, then it’s just a matter of weeks until everything changes radically.
                        <br><br>
                        You probably got destructive behaviors from parents, relatives, and peers; I know I had.If I’m going to fail at code; maybe I’ll fail my way.
                        <br><br>
                        Stop following the masses, be a leader, and build your shit. Have others follow you. That’s the only way to get hired and get professional experience on your resume.
                        <br><br>
                        Stop doing dog-shit projects from YouTubers instructors that are confused just as much as you.
                        <br><br>
                        <div class="confessions">
                            <div class="confession-new-item">
                                <video controls="controls" poster="<?= root() . 'assets/img/alina-thumb_.jpg' ?>">
                                    <source src="<?= root() . 'assets/video/interviu-alina.mp4' ?>" type="video/mp4">
                                </video>
                                <div class="text">
                                    Alina switched from a marketing career to a <strong>fulltime junior web developer position.</strong>
                                </div>
                            </div>
                        </div>
                        <!-- <br><br>
                        <a href="<?= root() ?>call" class="btn-read-more" target="_blank">
                            <span style="font-family: oswald;">Book my FREE information call</span>
                        </a> -->
                        <br><br>
                        <span>WHY SO EXPENSIVE? WHY ISN’T IT FREE?</span>
                        <br><br>
                        I’m earning approximately $91.000 yearly contractor on PWA with Vue3.
                        <br><br>
                        I’ve been doing this for a few years now, and I’ve built a certain life-style that I’m not willing to give up.
                        <br><br>
                        I have to pay staff, company accounting, media production.
                        <br><br>
                        If you really want this, you’ll make the investment in yourself, and in my decade of knowledge, and support. If you want this,
                        <br><br>
                        Charging for this method permits me to do it full-time with passion and dedication; it also pays my team's salaries and gives me time to offer premium support.
                        <br><br>
                        It buys me zen time to reflect and gave you guys the right answers, else I’ll be doing you a disservice.
                        <br><br>
                        This is not a soup kitchen, we really take it seriously and go hard at it, so you gotta come in and bet on yourself, it will make all difference when you got skin in the game.
                        <br><br>
                        That’s the mentality a true winner has, and since you already invested this much time (and probably emotions) in this, I know you’re the rare one that takes his career seriously…
                        <!-- <br><br>
                        <a href="<?= root() ?>call" class="btn-read-more" target="_blank">
                            <span style="font-family: oswald;">Book my FREE information call</span>
                        </a> -->
                        <br><br>
                        <div class="confessions">
                            <div class="confession-new-item">
                                <video controls="controls" poster="<?= root() . 'assets/img/ovidiu-thumb_.jpg' ?>">
                                    <source src="<?= root() . 'assets/video/interviu-ovidiu.mp4' ?>" type="video/mp4">
                                </video>
                                <div class="text">
                                    "Tudor taught me directly how a <strong>senior developer</strong> operates" - Ovidiu.
                                </div>
                            </div>
                        </div>
                        <br>
                        <span>TWO CHOICES</span>
                        <br><br>
                        1. I’ve told you the secret of how clever devs get hired fast. Now you can go at it alone and try to build unique projects nobody ever builds without support. You might make it, or you might get lost again in tutorial land.
                        <br><br>
                        2. You can apply to join our new exclusive club, where we build together start-ups the world has never seen before. Projects so cool it will instantly attract the attention of important companies in your area. We have limited spots open, so snag it now and let’s win.
                        <!-- <br><br>
                        <a href="<?= root() ?>call" class="btn-read-more" target="_blank">
                            <span style="font-family: oswald;">Book my FREE information call</span>
                        </a> -->
                        <br><br>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>