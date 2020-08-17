<style>
    body {
        background-color: var(--color-gray-1);
        color: var(--color-gray-2);
        font: var(--font-body);
        margin: 0;
        padding: var(--unit-l) 0;
    }
    /*
    .########...#######...######..########
    .##.....##.##.....##.##....##....##...
    .##.....##.##.....##.##..........##...
    .########..##.....##..######.....##...
    .##........##.....##.......##....##...
    .##........##.....##.##....##....##...
    .##.........#######...######.....##...
    */
    .post {
        margin-bottom: var(--unit-xxl);
    }
    .post + .post:before {
        content: "- { · · · } -";
        display: block;
        font: var(--font-text);
        margin: 0 auto;
        text-align: center;
        width: 50vw;
    }

    .post > * {
        width: 60vw;
        max-width: 892px;
        margin-left: auto;
        margin-right: auto;
    }

    .post > * + * {
        margin-top: var(--unit-m);
    }

    .hero {
        margin-bottom: var(--unit-xl);
    }

    h1 {
        color: var(--color-white);
        font: var(--font-title-1);
        margin-bottom: 0.2em;
        margin-top: var(--unit-xxl);
    }
    h2 {
        color: var(--color-white);
        font: var(--font-title-2);
        margin-bottom: 0.5em;
    }
    h3 {
        font: var(--font-title-3);
        margin-bottom: 0.5em;
    }

    .post * + h2,
    .post * + h3 {
        margin-top: var(--unit-xl); /* if it's not the first element */
    }
    .post h1 + h2,
    .post h1 + h3,
    .post h2 + h3 {
        margin-top: 0; /* if it's like a tagline */
    }

    .post h1 + h3 + * {
        margin-top: var(--unit-xl); /* this indicates the header */
    }

    p {
        font: var(--font-text);
    }

    ul {
        font: var(--font-text);
        list-style: inside;
    }

    a {
        color: var(--color-gray-4);
        font-weight: 500;
        text-decoration: none;
    }
    a:hover {
        color: var(--color-white);
    }

    .post figcaption {
        text-align: center;
        margin-top: var(--unit-xxs);
    }

    .post img {
        display: block;
        width: 100%;
    }

    /*
    ..######...#######..##.....##.########...#######..##....##.########.##....##.########..######.
    .##....##.##.....##.###...###.##.....##.##.....##.###...##.##.......###...##....##....##....##
    .##.......##.....##.####.####.##.....##.##.....##.####..##.##.......####..##....##....##......
    .##.......##.....##.##.###.##.########..##.....##.##.##.##.######...##.##.##....##.....######.
    .##.......##.....##.##.....##.##........##.....##.##..####.##.......##..####....##..........##
    .##....##.##.....##.##.....##.##........##.....##.##...###.##.......##...###....##....##....##
    ..######...#######..##.....##.##.........#######..##....##.########.##....##....##.....######.
    */
    .button {
        font: var(--font-body);
        color: var(--color-yellow-1);
        background-color: var(--color-yellow-3);
        display: inline-block;
        padding: var(--unit-s) var(--unit-m);
        border-radius: var(--unit-xl);
        font-weight: 500;
        transition: background-color 0.3s;
    }
    .button:hover {
        background-color: var(--color-yellow-4);
        color: var(--color-yellow-1);
        text-decoration: none;
    }
    .button:active {
        background-color: var(--color-yellow-2);
        text-decoration: none;
    }

    .bleed {
        display: block;
        max-width: none;
        width: 90vw;
    }

    .media {
        margin-top: var(--unit-xl);
        margin-bottom: var(--unit-xl);
    }
    .media > * {
        margin-left: auto;
        margin-right: auto;
        text-align: center;
    }

    /*
    .##.....##..#######..########..####.##.......########
    .###...###.##.....##.##.....##..##..##.......##......
    .####.####.##.....##.##.....##..##..##.......##......
    .##.###.##.##.....##.########...##..##.......######..
    .##.....##.##.....##.##.....##..##..##.......##......
    .##.....##.##.....##.##.....##..##..##.......##......
    .##.....##..#######..########..####.########.########
    */

    @media only screen and (max-width: 667px) {
        body {
            color: var(--color-gray-4);
        }
        .post > * {
            width: 100vw;
            max-width: 100vw;
            padding-left: var(--unit-l);
            padding-right: var(--unit-l);
            box-sizing: border-box;
        }
        a {
            color: var(--color-gray-5);
            font-weight: 700;
        }
        .bleed {
            width: 100vw;
            padding: 0;
        }
    }

</style>

<main class="post">
    <h1>CSS3 Logos</h1>
    <h3>Landing page demo</h3>
    <p>I'm a CSS nerd and, like most people, I was excited that CSS3 brought new possibilities for drawing shapes like buttons, tooltips, ribbons, etc.</p>
    <p>I was tinkering one day with CSS, trying to create some GoogleMaps-like pins from only 1 HTML element, but my mind was on that Adidas Originals t-shirt I saw on TV, and the idea popped into my head. The first render of the logo sucked, but by the time I got to the Nike logo, I realized that CSS has some hidden (from me) power.</p>
    <p>I like puzzles, so working in vector software to emulate the powers of CSS3, was a pretty fun project. I'm glad so many people enjoyed it.</p>
    <h2>Featured on</h2>
    <p>I'm very honored to be mentioned by so many important and diverse websites, here are some of them:</p>
    <ul>
        <li>
            <a href="https://news.ycombinator.com/item?id=3159660" target="_top">Hacker News</a> #1 for 2 days;</li>
        <li>
            <a href="https://www.theguardian.com/technology/2011/nov/14/flash-death-bad-windows-phone" target="_top">The Guardian</a> mentioned this as the example that Flash is dead;</li>
        <li>The Shapes of CSS by <a href="https://css-tricks.com/examples/ShapesOfCSS/" target="_top">CSS-Tricks</a>;</li>
        <li>
            <a href="https://thenextweb.com/dd/2011/10/26/famous-logos-designed-entirely-in-css/" target="_top">The Next Web</a>.</li>
    </ul>
    <p>
        <a class="button" href="https://ecsspert.com/css3-logos/adidas-originals/">Launch project</a>
    </p>
</main>

<article class="post">
    <h1>The one where Booking.com sent travelers to Mars</h1>
    <h3>Blog post demo</h3>
    <div class="bleed hero">
        <img src="https://cdn-images-1.medium.com/max/2560/1*yyLFlSrLUTrVKpsRa0OoOg.jpeg" />
        <figcaption>(cc) ESO/B. Tafreshi  - <a href="http://www.eso.org/public/images/potw1241a/">http://www.eso.org/public/images/potw1241a/</a></figcaption>
    </div>
    <p>The date is October 1st, 2015. For the last 3 hours, I've been researching as much as I can about Mars occasionally stopping to drool over those beautiful red-tinted landscapes. I'm working on an email campaign titled Add Mars to your travel bucket-list - funny for a designer at <a href="booking.com">Booking.com</a>, <em>"Planet Earth's #1 Accommodation Site"</em>.</p>
    <p>First, let me tell you how I got myself into this project. This morning I was riding the metro to work. I'm in my own world, head tilted downwards and browsing on Flipboard to get my daily dose of news. That's when it found me: <a href="https://www.nasa.gov/press-release/nasa-confirms-evidence-that-liquid-water-flows-on-today-s-mars/">NASA Confirms Evidence That Liquid Water Flows on Today's Mars</a>. Water! On Mars?! Mind <em>blown</em>. I devoured the entire article, washing it down with anything else I could find about Mars - hydrated salts, perchlorate, and various other terms that sounded cool (but were too scientific for me to grasp). I suddenly had this longing desire to visit that place, to explore, to get my boots covered in red dust.</p>
    <p>At Booking.com, ideas flow freely and come, mostly, from the ground up. Everyone is encouraged to contribute ideas and to follow through with them. Even so, when I stole a few minutes from the Product Owner of Email Marketing to pitch a travel campaign for Mars, her reaction was better than I could have anticipated. Not only did she agree to change our Sunday campaign, but she rearranged her whole day so that we could start searching for otherworldly holiday destinations right here on Earth. Here are some of the gems that we found:</p>
    <div class="media">
        <img src="https://cdn-images-1.medium.com/max/800/1*BEEp4hungBtNQslF-UwKzw.png" />
        <figcaption>Atacama, the driest desert on Earth. This is where NASA tests some of its rovers before they fly to Mars.</figcaption>
    </div>
    <div class="media">
        <img src="https://cdn-images-1.medium.com/max/800/1*P5HHyrkdZUP44o7HTGmK_A.png" />
        <figcaption>The iron-stained Rio Tinto river bears an uncanny resemblance to Mars' hue.</figcaption>
    </div>
    <p>These places are scattered all over the globe, some only 3 hours away from our office here in Amsterdam.</p>
    <p>Once the list was complete, we took the idea to our copywriters and they eagerly jumped on board. After that, all we needed was a back-end developer and 14 hours later we'd created an email and <a href="https://dribbble.com/shots/2299776-Get-ready-for-the-Final-Frontier">this landing page</a> from scratch.</p>
    <p>My hand was shaking as I hovered with the cursor over the <em>"send"</em> button. What we'd created was to be shared with millions of people out there. Happily, the response carried some really positive energy - overwhelming and humbling at the same time.</p>
    <div class="media">
        <blockquote class="twitter-tweet">
            <p lang="en" dir="ltr">
                <a href="http://t.co/vAZhSw1xms">http://t.co/vAZhSw1xms</a> just emailed me &quot;Farryl, add Mars to your bucket list&quot; so I guess they really do get my travel habits/dreams</p>&mdash; Farryl Last (@FarrylLast) <a href="https://twitter.com/FarrylLast/status/650754905079173120?ref_src=twsrc%5Etfw">October 4, 2015</a>
        </blockquote>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
    <p>Today I look to the seven-year-old me, the one who had a dream to achieve something great (only knowing it would have to involve a keyboard somehow). I know he would be smiling - against all odds, his dream came true. I'm grateful for this day; even more so because it's not the first time I've felt like this while working at Booking.com.</p>
    <p>All of this was possible thanks to an open environment and stellar talent. Even with such a fast-growing department, individuals are still trusted to make the best decisions for the company. We're constantly encouraged to think outside the box, to take chances, and discover new possibilities to grow our business.</p>
    <p>Without personal contributions, we wouldn't be standing here today. So I want to challenge you to step back for 15 minutes and let your imagination fly. If sending people to Mars wasn't too crazy an idea for a company specializing in accommodations on Earth, then what can you come up with to positively impact your company?</p>
    <p></p>
    <p></p>
</article>