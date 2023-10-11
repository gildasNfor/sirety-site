<?php

/**
 * Elements Section
 *
 * This section groups all the HTML elements
 * for developers to style in the style-guide.
 *
 */
?>

<section id="section-1"  class="section section--elements">

    <div class="section__background">

        <div class="section__container">

            <!-- Dynamic Page Title -->
            <h1>Style Guide</h1>
            <h2>Elements:</h2>

            <!-- Colour Variables -->
            <h3>Colors</h3>
            <div class="colors-container">
                <div class="color-box">
                    <div class="color background--primary"></div>
                    <p>$color-primary</p>
                </div>
                <div class="color-box">
                    <div class="color background--color-white"></div>
                    <p>$color-white</p>
                </div>
                
                <div class="color-box">
                    <div class="color background--secondary"></div>
                    <p>$color-secondary</p>
                </div>

                <div class="color-box">
                    <div class="color background--secondary-ligh"></div>
                    <p>$color-secondary-ligh</p>
                </div>
                <div class="color-box">
                    <div class="color background--color-text"></div>
                    <p>$color-text</p>
                </div>
                <div class="color-box">
                    <div class="color background--color-text-dark"></div>
                    <p>$color-text-dark</p>
                </div>
                <div class="color-box">
                    <div class="color background--color-text-light"></div>
                    <p>$color-text-light</p>
                </div>
                <div class="color-box">
                    <div class="color background--color-background"></div>
                    <p>$color-background</p>
                </div>
                
            </div> <!-- End Colour Variables -->
            <hr />

            <!-- Style The Below Sections -->
            <div class="typography">
                <h3>Typography</h3>

                <h1>H1 This is a heading. </h1>
                <h2>H2 This is a heading. </h2>
                <h2 class="text--white">H2--light This is a light variant heading. </h2>
                <h3>H3 This is a subheading. </h3>
                <h4>H4 This is a heading. </h4>
                <h5>H5 This is a heading. </h5>
                <h6>H6 This is a heading. </h6>
                <p>P Lorem ipsum dolor sit amet, <a href="#">deposits to bank</a> adipisicing elit. Assumenda delectus incidunt itaque iusto maxime</p>
                
                <p><strong>Bold Text</strong></p>
                <p class="lead">
                    The Lead paragraph is a <a href="#">deposits to bank</a> that is slightly larger than the rest of the content. Often it
                    is the first paragraph of a post.
                </p>
                <!-- <blockquote>Lorem ipsum dolor sit amet, deposits to bank adipisicing elit. Assumenda delectus incidunt itaque iusto maxime</blockquote> -->
                <br/>
                <a href="#">A link, Hover + Visited</a> <br>
                <a href="#" class="link-with-arrow">Read More</a>
            </div> <!-- End Typography -->
            <hr />

            <!-- Buttons -->
            <h3>Buttons</h3>
            <div class="buttons"> 
                <a href="#" class="button">Button</a>
                <button class="button button--white">Button White</button>
                <a href="#" class="button button--gradient">Button gradient</a>
                <br>
                <br>
                <input type="submit" value="Submit" class="button"/>
                <br>
                <br>
            </div> <!-- End Buttons -->
            <hr />

            <h3>Lists</h3>
            <div class="lists">
                <ul>
                    <li>Unordered List</li>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</li>
                </ul>
                <ol>
                    <li>Ordered List</li>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</li>
                </ol>
            </div>
            <hr />

            <h3>Fields</h3>
            <div class="fields">
                <form action="">
                    <div class="form__column">
                        <div class="form__field">
                            <label for="">Your Name</label>
                            <input type="text" name="NAME" placeholder="E.g Shamim Al Hasan" required />
                        </div>
                        <div class="form__field">
                            <label for="">Your Email</label>
                            <input name="EMAIL" type="email" placeholder="E.g shamim582@gmail.com"/>
                        </div>
                        <div class="form__field">
                            <label for="">Your Message</label>
                            <textarea name="MESSAGE" placeholder="Write Here...." required></textarea>
                        </div>
                    </div>
                    <div class="form__button">
                        <button class='button'>Submit</button>
                    </div>
                </form>
            </div>
            <hr />
        </div>
    </div>
</section>