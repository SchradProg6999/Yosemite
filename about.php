<?php
    $title = "About";
    require_once "includes/header.php";
?>
            <div class = "main-content-image" id = "main-about-image">
                <div><h1>About Page</h1></div>
            </div>
            <div class = "clearfix main-content-wrapper col-sm-12">
                <div class = "main-content">
                    <div class = "clearfix" id = "about-comments">
                        <div class = "col-sm-12">
                            <div class = "col-sm-4">
                                <h2>Original Javascript Component</h2>
                                <p>
                                    First and foremost, I'm sure you noticed the beautiful array of pictures being automatically animated on the landing page of my site. This slideshow is possible using the slideshow method located inside a file called scripts.js.
                                </p>
                            </div>
                            <div class = "col-sm-4">
                                <h2>DHTML Component</h2>
                                <p>
                                    My DHTML component is also located on the landing page and is actually a part of the slideshow. I am having the javascript element and the DHTML component work together to create a very elegant slideshow. The javascript is actually controlling the animations through adding and removing classes on specific elements at certain times. Riveting to say the least!
                                </p>
                            </div>
                            <div class = "col-sm-4">
                                <h2>Corrections from Project 1</h2>
                                <p>
                                    I made some design changes to the website as was mentioned. I got rid of the lines underneath the trails page so they do not look like links anymore. I aligned navigation with the body along with the social media links on the top. Overall it improved the cohesiveness to the site. Made sure to validate all of my pages this time.
                                </p>
                            </div>
                        </div>
                        <div class = "col-sm-12">
                            <div class = "col-sm-4">
                                <h2>Extras</h2>
                                <h4>Extra 1</h4>
                                <p>
                                    The first extra that I used is the simplest. I added a little tree favicon so it wasn't a boring blank piece of paper anymore.
                                </p>
                                <h4>Extra 2</h4>
                                <p>
                                    The second extra that I implemented is a simple captcha at the bottom of the comments page. All you have to do is type in the number to match the generated number. This captcha is implemented directly into my javascript validation so the form will not submit if the form is filled out incorrectly or the captcha doesn't match or isn't filled out.
                                </p>
                                <h4>Extra 3</h4>
                                <p>
                                    The third extra that I believe is really cool, is the way the timestamp is formatted in the comments page. If you check out the comments page, you can see after every comment it'll show how long ago the comment was created on the page. I am using the Moment JS library to reformat the timestamp that is stored as an attribute inside my database whenever a comment gets submitted.
                                </p>
                                <h4>Extra 4</h4>
                                <p>
                                    I had this little extra added in with the midterm version of this project, but I think it is worth mentioning that every button or nav link in the global header, when you hover over it, it raises to indicate that you are selecting that link. A nice touch for user experience.
                                </p>
                            </div>
                            <div class = "col-sm-4">
                                <h2>Content</h2>
                                <p>
                                    I put a considerable amount of time into researching different locations around Yosemite Valley and compiling my memories of my trip there.
                                    With the content I gathered I was able to give thorough descriptions for each section of the site and really give people an idea of what my favorite place is like.
                                </p>
                            </div>
                            <div class = "col-sm-4">
                                <h2>Navigation</h2>
                                <p>
                                    I wanted the global navigation to be simple and accessible to all users so I spent a good amount of time ensuring the navigation was smooth for all devices. As seen when the screen scales down to the size of a mobile device, the main navigation links are relocated into a hamburger menu that is less intrusive on smaller screens but still provides access to all pages.
                                </p>
                                <p>
                                    I also added some social media links at the top of the page (bottom on mobile) for convenient access to Yosemite's social pages.
                                </p>
                            </div>
                        </div>
                        <div class = "col-sm-12">
                            <div class = "col-sm-4">
                                <h2>Organization</h2>
                                <p>
                                    I organized my content in a way that flowed nicely and prevented too much from being shown to the user at one time. This allowed the user to digest the chunks of information easier. I also grouped like-content and allowed them to flow into each other and avoid cluttering the navigation.
                                </p>
                            </div>
                            <div class = "col-sm-4">
                                <h2>Design</h2>
                                <p>
                                    I thought it was important to present the site in a pleasing manner. I utilized repetition of internal page structures to maintain consistency. I was sure to utilize the space available on the page and keep everything nicely compact so the user didn’t need to scroll as often as if the content was all stacked vertically.
                                </p>
                                <p>
                                    I made sure to use proper colors and images to portray the vibe of Yosemite. For example, I set rustic wooden planks as the background image of every page because to me it fits the mood of a national park. Furthermore, each internal page has its own header image that is related to the topic of that page giving the user a sense of where they are in the site.
                                </p>
                            </div>
                            <div class = "col-sm-4">
                                <h2>HTML/CSS</h2>
                                <p>
                                    I attempted to use proper development standards when it came to my CSS and HTML. With CSS I used classes in a way that allowed me to reuse styles across the site to avoid repeated code, allowing changes to be easily made. With HTML I tried to (as neatly as I could) organize the structure of each page in order to make the navigation through the html code easier for myself. I also used wrappers appropriately to have more control over the elements in the DOM. One last thing, I made sure to have my HTML and CSS validate.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="refs-body">
                        <h1>References</h1>
                        <h2>Websites Links</h2>
                        <a class = "reference-tag" href = "http://www.travelyosemite.com/lodging/yosemite-valley-lodge/">Yosemite Valley Lodge Info</a>
                        <a class = "reference-tag" href = "http://www.travelyosemite.com/lodging/the-majestic-yosemite-hotel/">Majestic Yosemite Hotel Info</a>
                        <a class = "reference-tag" href = "https://reservations.ahlsmsworld.com/Yosemite/Plan-Your-Trip/Accommodation-Search/Results">Housekeeping Camp Rates & Info</a>
                        <a class = "reference-tag" href = "http://www.travelyosemite.com/lodging/dining/yosemite-valley-lodge/">Mountain Restaurant Info</a>
                        <a class = "reference-tag" href = "https://www.nps.gov/yose/learn/historyculture/index.htm">History & Culture of Yosemite</a>
                        <a class = "reference-tag" href = "https://www.nps.gov/yose/learn/historyculture/people.htm">People of Yosemite (History)</a>
                        <a class = "reference-tag" href = "http://www.travelyosemite.com/discover/park-history/">Yosemite Park History</a>
                        <a class = "reference-tag" href = "https://www.nps.gov/hfc/carto/PDF/YOSEmap2.pdf">PDF map of Yosemite Valley</a>
                        <a class = "reference-tag" href = "https://www.yosemitehikes.com/hikes.htm">Trails Info</a>
                        <a class = "reference-tag" href = "http://justfunfacts.com/interesting-facts-about-yosemite-national-park/">Fun Facts Source 1</a>
                        <a class = "reference-tag" href = "https://weather.com/sports-recreation/camping-parks/news/yosemite-national-park-facts#/7">Fun Facts Source 2</a>
                        <a class = "reference-tag" href = "http://www.travelincousins.com/travel-storiesarticles/15-fun-facts-about-yosemite-national-park">Fun Facts Source 3</a>
                        <a class = "reference-tag" href = "https://www.sciencedaily.com/terms/sequoiadendron.htm">Giant Sequoia Facts</a>
                        <h2>Images Links</h2>
                        <a class = "reference-tag" href = "https://www.google.com/search?q=yosemite+logo&tbm=isch&source=iu&pf=m&ictx=1&fir=0Ry0-YMQxzMgxM%253A%252CcsO-zH_Y9SxH-M%252C_&usg=__Cx2zpW3DDrbZoFfxUQWBHr4dYNY%3D&sa=X&ved=0ahUKEwim-7vJmOTWAhXp64MKHfY9DmoQ9QEIKDAA#imgrc=00QV8C3gD3jlLM:">Yosemite Bear Logo</a>
                        <a class = "reference-tag" href = "http://www.travelyosemite.com/lodging/yosemite-valley-lodge/">Yosemite Valley Lodge Image</a>
                        <a class = "reference-tag" href = "https://www.google.com/search?q=the+majestic+yosemite+hotel&source=lnms&tbm=isch&sa=X&ved=0ahUKEwij8-XDxeTWAhWs6YMKHSrWBvoQ_AUICygC&biw=1920&bih=900#imgrc=hThm3WdnhL4BPM:">Majestic Yosemite Hotel Image</a>
                        <a class = "reference-tag" href = "https://www.google.com/search?q=housekeeping+camp+yosemite&source=lnms&tbm=isch&sa=X&ved=0ahUKEwiXjsLVvuTWAhXj6oMKHaB5D_8Q_AUICigB&biw=1920&bih=900#imgrc=Br9RbN2UwyhIbM:">Housekeeping Camp Image</a>
                        <a class = "reference-tag" href = "https://www.google.com/search?biw=1920&bih=900&tbm=isch&sa=1&q=royalty+free+food+images&oq=royalty+free+food+&gs_l=psy-ab.3.0.0l2j0i24k1l2.59941.65888.0.67069.18.18.0.0.0.0.98.1457.18.18.0....0...1.1.64.psy-ab..0.18.1452...0i67k1.0.YO9JVoxzDO8#imgrc=poyGYKnzFvqe5M:">Eateries Background Image</a>
                        <a class = "reference-tag" href = "https://www.google.com/search?q=the+mountain+room+at+yosemite+valley+lodge&source=lnms&tbm=isch&sa=X&ved=0ahUKEwifz8Pq3uTWAhVM6YMKHXbXBo8Q_AUICigB&biw=1920&bih=900#imgrc=6HyZZg1gZcIYuM: ">Mountain Room Restaurant & Lounge Image</a>
                        <a class = "reference-tag" href = "https://www.google.com/search?q=rustic+webpage+background+patterns&tbm=isch&source=lnt&tbs=isz:l&sa=X&ved=0ahUKEwichqrL3OTWAhXo54MKHZmNAbYQpwUIHg&biw=1920&bih=900&dpr=1#imgrc=IexwAc-7r7ww6M:">Rustic Wooden Image Main Background</a>
                        <a class = "reference-tag" href = "https://www.google.com/search?q=beautiful+yosemite+pictures&source=lnms&tbm=isch&sa=X&ved=0ahUKEwiC9bnL-uTWAhVFw4MKHeEzDJYQ_AUICigB&biw=1920&bih=900#imgrc=CV5GGohr80c1aM:">Scenic Locations Background Image</a>
                        <a class = "reference-tag" href = "https://www.google.com/search?q=mariposa+grove&source=lnms&tbm=isch&sa=X&ved=0ahUKEwjN5La4_eTWAhUn04MKHbRUDyQQ_AUICygC&biw=1920&bih=900#imgdii=laqIF0mmfAIpGM:&imgrc=TR7qNJVdYqhR3M:">Giant Sequoia Image</a>
                        <a class = "reference-tag" href = "https://www.google.com/search?q=books&source=lnms&tbm=isch&sa=X&ved=0ahUKEwi_qsvOneXWAhVs7YMKHeaUDuoQ_AUICigB&biw=1920&bih=900#imgrc=UYdI3_aDPCvS8M:">History Background Image</a>
                        <a class = "reference-tag" href = "https://www.google.com/search?biw=1920&bih=900&tbm=isch&sa=1&q=yosemite&oq=yosemite&gs_l=psy-ab.3..0i67k1j0l9.10524.10524.0.10603.1.1.0.0.0.0.78.78.1.1.0....0...1.1.64.psy-ab..0.1.77....0.TmKjN3v16Zw#imgrc=CnOpZXXWheVSJM:">History Side Image</a>
                        <a class = "reference-tag" href = "https://www.google.com/search?biw=1920&bih=949&tbm=isch&sa=1&q=pirate+map&oq=pirate+map&gs_l=psy-ab.3..0i67k1j0j0i67k1j0l7.3495.4303.0.4415.2.2.0.0.0.0.91.169.2.2.0....0...1.1.64.psy-ab..0.2.168....0.5Vih0CqAUJ0#imgrc=uSktXh5rmUYSWM:">Map Background Image</a>
                        <a class = "reference-tag" href = "https://www.google.com/search?biw=1920&bih=949&tbm=isch&sa=1&q=misty+airport&oq=misty+airport&gs_l=psy-ab.3...6549.8031.0.8247.12.10.2.0.0.0.150.829.6j3.9.0....0...1.1.64.psy-ab..2.5.292...0i7i30k1.0.nOFm8aEujtU#imgrc=MzrMkl9t2fB4NM:">Misty Airplane Image</a>
                        <a class = "reference-tag" href = "https://www.google.com/search?q=yarts+buses&source=lnms&tbm=isch&sa=X&ved=0ahUKEwjXy6OIu-bWAhVq5IMKHSLtB8UQ_AUICygC&biw=1920&bih=900#imgrc=9vkoifpwpj-DPM:">YARTS Bus Image</a>
                        <a class = "reference-tag" href = "https://www.google.com/search?q=glacier+point&source=lnms&tbm=isch&sa=X&ved=0ahUKEwjxwo_qxubWAhVqzoMKHRMdDGUQ_AUICygC&biw=1920&bih=949#imgrc=nJ56olKaE7OmFM:">Glacier Point Image</a>
                        <a class = "reference-tag" href = "https://www.google.com/search?q=no+to+rental+cars&source=lnms&tbm=isch&sa=X&ved=0ahUKEwjp6LPgx-bWAhXK8YMKHYzxBYUQ_AUICigB&biw=1920&bih=900#imgrc=ZSnPKF4dQNi1xM:">Rental Car Image</a>
                        <a class = "reference-tag" href = "https://www.google.com/search?biw=1920&bih=900&tbm=isch&sa=1&q=hiking+trails&oq=hiking+trails&gs_l=psy-ab.3..0l10.5486.6424.0.6579.8.8.0.0.0.0.131.772.4j4.8.0....0...1.1.64.psy-ab..3.5.507...0i7i30k1j0i67k1j0i13k1.0.hqsAJilkSKU#imgrc=ahTd6dQOPLleSM:">Trails Background Image</a>
                        <a class = "reference-tag" href = "https://www.google.com/search?q=author&source=lnms&tbm=isch&sa=X&ved=0ahUKEwjBrKX-iefWAhVK6IMKHRp1B2IQ_AUICygC&biw=1920&bih=949#imgrc=OFD1Fg_30SESkM:">Author Bio Background Image</a>
                    </div>
                </div>
            </div>
        </div>
        <?php include "includes/footer.shtml";?>
