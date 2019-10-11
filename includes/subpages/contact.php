<?php
/**
 * Created by PhpStorm.
 * User: pascu
 * Date: 8-4-2019
 * Time: 00:20
 */
include_once("header2.php");
?>

    <div class="contact-wrapper">
        <div class="contact-info border-dash">
            <p class="text-white title3">How to contact us</p>
            <p class="text-white">E-mail: <i>space-invaders@sike.com</i><br>Phone-number: <i>36133721</i></p>
        </div>
        <div class="contact-form border-dash">
            <form method="post" action="/includes/subpages/mailpage.php">
                <p class="text-white">First name:<br></p>
                <input class="contact-input" type="text" name="firstname" value="Robin"><br>
                <p class="text-white"> Last name:<br></p>
                <input class="contact-input" type="text" name="lastname" value="Dabank"><br>
                <p class="text-white"> E-mail address:<br></p>
                <input class="contact-input" type="text" name="mail" value="robindabank@example.com"><br>
                <p class="text-white"> Description:<br></p>
                <textarea class="contact-input" style="height: 125px;" type="text"
                          name="description"></textarea><br><br>
                <input type="submit" value="Submit"><br>
            </form>
        </div>
        <div class="contact-map border-dash">
            <iframe class="contact-iframe"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2322.0052822860494!2d-0.2139708130859654!3d51.52433034655571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761022dc512577%3A0xe2786973ade9cad6!2s355+Ladbroke+Grove%2C+North+Kensington%2C+London+W10+5AA%2C+Verenigd+Koninkrijk!5e0!3m2!1snl!2snl!4v1554688387187!5m2!1snl!2snl"
                    width="80%" height="100" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>

<?php
include_once("footer2.php");
?>