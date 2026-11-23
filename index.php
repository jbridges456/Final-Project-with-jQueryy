<?php
// Get the year for the footer.
$currentYear = date("Y");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graphic Kudos</title>

    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <style>
        /* Basic page setup */
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #f1f1f1;
            color: #292929;
            font-family: Arial, sans-serif;
            line-height: 1.5;
        }

        .page {
            width: 90%;
            max-width: 950px;
            margin: auto;
        }

        /* Header and navigation */
        header {
            background: #ffffff;
            border-bottom: 2px solid #dddddd;
        }

        .top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 0;
        }

        .logo {
            font-size: 23px;
            font-weight: bold;
            color: #6546a5;
        }

        nav a {
            color: #333333;
            text-decoration: none;
            margin-left: 16px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        /* Intro section */
        .intro {
            background: #ffffff;
            margin-top: 25px;
            padding: 35px 25px;
            border: 1px solid #dddddd;
        }

        .intro h1 {
            margin-top: 0;
            font-size: 34px;
        }

        .intro p {
            max-width: 600px;
        }

        .button {
            display: inline-block;
            background: #6546a5;
            color: white;
            padding: 9px 16px;
            text-decoration: none;
            margin-top: 8px;
        }

        .button:hover {
            background: #503583;
        }

        /* Project section */
        .projects {
            padding: 30px 0 50px;
        }

        .project-heading {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
        }

        #projectSearch {
            padding: 9px;
            border: 1px solid #bbbbbb;
            font-size: 14px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
        }

        .card {
            background: white;
            border: 1px solid #cccccc;
            padding: 12px;
        }

        /* Simple colored project placeholders */
        .art {
            height: 145px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 25px;
            font-weight: bold;
            text-align: center;
        }

        .art-one {
            background: #d87982;
        }

        .art-two {
            background: #477d91;
        }

        .art-three {
            background: #8468ad;
        }

        .category {
            color: #6546a5;
            font-size: 12px;
            font-weight: bold;
            margin-top: 12px;
        }

        .card h3 {
            margin: 4px 0;
        }

        .card p {
            font-size: 14px;
        }

        .details-button {
            background: #eeeeee;
            border: 1px solid #bbbbbb;
            padding: 7px 10px;
            cursor: pointer;
        }

        .details-button:hover {
            background: #dddddd;
        }

        /* Extra text starts hidden and is shown with jQuery. */
        .extra-details {
            display: none;
            border-top: 1px solid #dddddd;
            margin-top: 10px;
            padding-top: 5px;
        }

        #noResults {
            display: none;
        }

        footer {
            background: #333333;
            color: white;
            text-align: center;
            padding: 18px;
            font-size: 13px;
        }

        /* Make the layout fit smaller screens. */
        @media (max-width: 650px) {
            .top,
            .project-heading {
                align-items: flex-start;
                flex-direction: column;
            }

            nav a {
                margin: 0 12px 0 0;
            }

            .cards {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

    <!-- Website header -->
    <header>
        <div class="page top">
            <div class="logo">Graphic Kudos</div>
            <nav>
                <a href="#home">Home</a>
                <a href="#projects">Projects</a>
                <a href="#contact">Contact</a>
            </nav>
        </div>
    </header>

    <main class="page">
        <!-- Short introduction to the website -->
        <section class="intro" id="home">
            <h1>Welcome to Graphic Kudos</h1>
            <p>This is my design portfolio where I can show some of my projects and ideas. I like working with different colors, layouts, and styles.</p>
            <a class="button" href="#projects">See My Projects</a>
        </section>

        <!-- Project cards visitors can search and open -->
        <section class="projects" id="projects">
            <div class="project-heading">
                <div>
                    <h2>My Projects</h2>
                    <p>Here are a few examples of design work.</p>
                </div>
                <input type="text" id="projectSearch" placeholder="Search projects..." aria-label="Search projects">
            </div>

            <div class="cards">
                <article class="card" data-search="poster music event">
                    <div class="art art-one">Soundwave</div>
                    <div class="category">Poster Design</div>
                    <h3>Soundwave Festival</h3>
                    <p>A poster idea for a music event using bright colors and large text.</p>
                    <button class="details-button" type="button" aria-expanded="false">More info</button>
                    <div class="extra-details">
                        <p>I wanted this design to look energetic and easy to notice.</p>
                    </div>
                </article>

                <article class="card" data-search="branding logo nova">
                    <div class="art art-two">NOVA</div>
                    <div class="category">Branding</div>
                    <h3>Nova Creative</h3>
                    <p>A basic logo and branding idea for a made-up creative company.</p>
                    <button class="details-button" type="button" aria-expanded="false">More info</button>
                    <div class="extra-details">
                        <p>This project uses simple shapes and a small color palette.</p>
                    </div>
                </article>

                <article class="card" data-search="social media graphic create">
                    <div class="art art-three">Create</div>
                    <div class="category">Social Media</div>
                    <h3>Create More</h3>
                    <p>A graphic that could be used for a social media post.</p>
                    <button class="details-button" type="button" aria-expanded="false">More info</button>
                    <div class="extra-details">
                        <p>I focused on making the words stand out and keeping the layout simple.</p>
                    </div>
                </article>
            </div>

            <p id="noResults">No projects matched your search.</p>
        </section>
    </main>

    <!-- Footer with the current year from PHP -->
    <footer id="contact">
        <p>Graphic Kudos &copy; <?php echo $currentYear; ?></p>
    </footer>

    <script>
        // Wait until the page is ready before running the jQuery code.
        $(document).ready(function() {

            // Run this function whenever someone types in the search box.
            $("#projectSearch").on("keyup", function() {

                // Get what the visitor typed and make it lowercase.
                let search = $(this).val().toLowerCase();

                // Keep track of how many project cards are shown.
                let matches = 0;

                // Check each project card on the page.
                $(".card").each(function() {

                    // Get the search words saved on this card.
                    let keywords = $(this).attr("data-search").toLowerCase();

                    // Get the text inside the card so titles and descriptions can match too.
                    let cardText = $(this).text().toLowerCase();

                    // Check if the typed search is found in the keywords or card text.
                    let found = keywords.includes(search) || cardText.includes(search);

                    // Show the card if it matches, otherwise hide it.
                    $(this).toggle(found);

                    // Add one to the match count if the card was found.
                    if (found) {
                        matches++;
                    }
                });

                // Show a message if none of the cards matched the search.
                $("#noResults").toggle(matches === 0);
            });

            // Run this code when a visitor clicks a More info button.
            $(".details-button").on("click", function() {

                // Find the extra information next to the button that was clicked.
                let info = $(this).next(".extra-details");

                // Slide the extra information open or closed.
                info.slideToggle();

                // Check if the extra information is visible after the slide animation.
                let open = info.is(":visible");

                // Change the button words depending on whether the information is open.
                $(this).text(open ? "Less info" : "More info");

                // Update this attribute to help screen readers understand the button state.
                $(this).attr("aria-expanded", open);
            });

        // End the document ready function.
        });
    </script>
</body>
</html>
