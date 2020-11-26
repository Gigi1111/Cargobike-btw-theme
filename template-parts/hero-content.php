<?php
 /**
 * Template Name: Hero invitation
 */
$hero_text   = get_field('hero_text');
$hero_btn   = get_field('hero_btn');

?>
<div class="cover-container d-flex mx-auto flex-column">
            <div class="cover-inner">
                <div class="cover-text">
                    <form action="/buchung" method="post">
                        <label for="search">
                            <h1 style="margin: 20px;"><?php  echo $hero_text; ?></h1></label>
                        
                        <input type="text" name="daterange" id="daterange" value="27/11/2020 - 05/12/2020" style="
                            width: 280px;
    margin: auto;
    display: inline-block;
    height: 40px;
    border-radius: 25px;
    font-size: 18px;
    text-align: center;" />
                        <input type="submit" class="btn btn-success" id=”searchsubmit” value="<?php  echo $hero_btn; ?>" style="border-radius: 25px;
    background: var(--brand-green-lighter);
    color: white;"/>
                </div>
            </div>
    </div>

