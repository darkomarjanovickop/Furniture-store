<!--Ako bude vremena dodati i input za ocene od 1 do 5, da bi review-ovi mogli da se sortiraju od najnižih do najviših i obratno-->

<?php
    $reviews = array(
        array("Svetlana", "Sofa je odlična, preporučila bih svima", "Molestiae praesentium unde nam eligendi possimus quod quis, animi odio, dolorum iure tempore id corrupti! Optio impedit veniam laboriosam praesentium magni! Enim beatae nisi accusamus maxime fuga distinctio eligendi laborum."),
        array("Dragan", "Komoda za TV je pravi primer modernog dizajna", "Numquam magnam possimus dolorum omnis accusantium fugit ipsa ratione, necessitatibus quas architecto veniam, at consequatur nisi in rem laborum quis ut culpa distinctio! Inventore, culpa quia assumenda minima laboriosam earum!"),
        array("Marija", "Krevet je fantastičan!", "Tenetur fugit perferendis consequuntur laborum exercitationem, magnam enim assumenda aliquam neque ut minus ab consectetur consequatur fuga inventore voluptatem unde, voluptatibus architecto explicabo beatae omnis? Ex saepe atque possimus facilis!"),
        array("Slavica", "Uz kupovinu dobila sam na poklon dve lampe. Oduševljena sam!", "Earum corporis dicta illum est atque quis ipsam exercitationem, nulla soluta tempora, sunt omnis modi officiis consequuntur veritatis sequi beatae ut a voluptatem unde cumque. Animi sint ab totam laborum."),
        array("Dario", "Fotelja je odlična, sve preporuke!", "Sequi, deserunt distinctio. Harum nemo, obcaecati quibusdam, neque aperiam eius accusamus molestiae sunt sed voluptatibus aspernatur officiis veniam magnam eveniet, aliquam reiciendis porro fugiat hic odit ducimus perspiciatis. Harum, beatae!"),
        array("Mario", "Kuhinja je počela da se raspada posle dva meseca. Ne bih nikom preporučio!!!", "Quaerat iste earum iure. Quisquam ea voluptatibus ad tempora ex exercitationem ratione laudantium veniam. Consectetur, ipsum maxime. Ad, commodi temporibus. Totam, omnis corporis repudiandae quaerat voluptas distinctio pariatur quibusdam voluptates."),
        array("Nataša", "Deca obožavaju da dolaze na radionice", "Tenetur illo dignissimos quas voluptate facere, dolorem ipsam in voluptates temporibus maiores laudantium magni mollitia natus placeat corporis numquam eligendi id? Aperiam illum necessitatibus tempora quos quaerat repellat atque ullam!"),
        array("Filip", "M Nameštaj prevaranti!!! Zaobilazite ih u širokom luku", "Aliquid nemo possimus cumque voluptate architecto blanditiis atque quod vero unde dolor, itaque ex, rerum earum magnam sapiente ipsum, impedit nobis commodi sequi tenetur! Ipsum voluptas eaque nisi obcaecati perferendis?"),
    );

        for($i = 0; $i < count($reviews); $i++) {
            $ime = $reviews[$i][0];
            $naslov = $reviews[$i][1];
            $komentar = $reviews[$i][2];
            echo "<div class=\"row\">
                <div class=\"story\">
                    <figure class=\"story__shape\">
                    <img src=\"img/review$i.jpg\" alt=\"review\" class=\"story__img\">
                    <figcaption class=\"story__caption\">$ime</figcaption>
                    </figure>
                    <div class=\"story__text\">
                        <h3 class=\"heading-tertiary u-margin-bottom-small\">$naslov</h3>
                        <p>
                            $komentar
                        </p>
                    </div>
                </div>
            </div>";
        }

?>