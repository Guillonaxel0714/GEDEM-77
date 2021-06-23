<?php
/**
 * Template affichant la section Président sur la page gouvernance
 *
 * 
 */
?>

<section class="gouvernance">
    <h3>La gouvernance</h3>
    <div class="img_intro">
        <span><?php the_field( 'title_intro' ); ?></span>
        <p><?php the_field( 'txt_intro' ); ?></p>
        <svg version="1.1" id="carte_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	        viewBox="0 0 1689.4 1383.2" style="enable-background:new 0 0 1689.4 1383.2;" xml:space="preserve">
            <style type="text/css">
                .st0{display:none;}
                .st1{display:inline;fill:none;stroke:#B9B9B9;stroke-width:7;stroke-miterlimit:10;}
                .st2{display:none;fill:none;stroke:#010202;stroke-width:17;stroke-miterlimit:10;}
                .st3{fill:none;stroke:#1B3762;stroke-width:17;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
                .st4{display:none;fill:none;stroke:#000000;stroke-width:8;stroke-linecap:round;stroke-miterlimit:10;}
                .st5{fill:none;stroke:#A8C550;stroke-width:8;stroke-miterlimit:10;}
                .st6{display:none;fill:none;stroke:#000000;stroke-width:8;stroke-miterlimit:10;}
                .st7{fill:#A8C550;}
            </style>
            <polyline class="st3" points="937.8,885.4 920.9,985.8 618.1,1035.8 605.6,1137.2 614,1170.5 584.8,1230.3 415.4,1331.6 
                412.6,1276.1 365.4,1283 370.9,1305.3 294.5,1334.4 268.1,1310.8 107,1330.3 172.3,1231.6 145.9,1177.5 83.4,1153.9 64,1062.2 
                191.7,967.8 159.8,874.7 202.9,626.1 223.7,608 240.4,474.7 208.5,365.9 241.7,285.8 184.5,179 264,58 357,130.3 423.7,73.3 
                469.5,108 672.3,46.9 750.1,134.4 729.2,169.1 829.4,260.2 "/>
            <polyline class="st4" points="619,1040.7 565.8,1017.3 914.8,504.6 433.9,204.6 731.8,166.3 550.2,1011.1 397.8,532.2 	"/>
            <polyline class="st5" points="422,161.1 293.4,345.9 322.5,501.6 184.1,588.9 309,784.8 548.6,990.4 548.6,990.4 337.6,1133.7 
                114.7,1220.9"/>
            <line class="st5" x1="586.2" y1="768.8" x2="548.6" y2="990.4"/>
            <circle class="st7" cx="422" cy="161.1" r="26.9"/>
            <circle class="st7" cx="293.4" cy="345.9" r="26.9"/>
            <circle class="st7" cx="322.5" cy="501.6" r="26.9"/>
            <circle class="st7" cx="184.1" cy="588.9" r="26.9"/>
            <circle class="st7" cx="309" cy="784.8" r="26.9"/>
            <circle class="st7" cx="548.6" cy="990.4" r="26.9"/>
            <circle class="st7" cx="586.2" cy="768.8" r="26.9"/>
            <circle class="st7" cx="336.8" cy="1134.5" r="26.9"/>
            <circle class="st7" cx="114.7" cy="1220.9" r="26.9"/>
        </svg>
    </div>
    <div class="presidence">
        <div class="presidence_txt">
            <span><?php the_field( 'name_president' ); ?></span>
            <div>
                <p>Présient du GEDEM 77</p>
                <p><?php the_field( 'poste_name' ); ?></p>
            </div>
        </div>
        <div class="presidence_img">
            <img src="<?php the_field( 'img_president' ); ?>" alt="Photo de monsieur Frank Vernin">
        </div>
    </div>
    </section>