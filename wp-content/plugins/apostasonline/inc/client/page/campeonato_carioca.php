<style>
    #delivery-zones-map{
        width: 100%;
        height: 100%;
        position: fixed;
        transform: translateX(-25px);
        pointer-events: none;						
    }
    #delivery-zones-map .options {
        width: 35%;
        height: 100%;
        background: #098446;
        padding: 5px 30px 0 33px;
        position: absolute;
        pointer-events: visible;
        z-index: 5;
        transform: translateX(-35px);
    }
    #delivery-zones-map .tabs {
        display: flex;
        margin-bottom: 0;
        transform: translateY(3px);
    }
    #delivery-zones-map .tabs li {
        width: 24.8%;
        margin-left: 0;
        margin-right: auto;
        text-align: center;
        padding-top: 10px;
        padding-bottom: 7px;
        cursor: pointer;
        text-transform: uppercase;
        font-weight: 600;
        background: #c1c1c1;
        color: #098446;
        border-top-right-radius: 7px;
        border-top-left-radius: 7px;        
    }
    #delivery-zones-map .tabs .active {
        background: #f1f1f1;
        color: #098446;
        text-transform: uppercase;
        font-weight: 600;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }
    #delivery-zones-map .options .tab-content {
        display: none;
    }
    #delivery-zones-map .options .tab-content.box-active {
        display: block;
        border-top: none;
        transform: translateY(-3px);
        padding: 15px;
        padding-top: 10px;
        background: #f1f1f1;
        height: 75%;
        border-bottom-left-radius: 7px;
        border-bottom-right-radius: 7px;
        overflow: hidden;
        overflow-y: scroll;			
    }		
    #delivery-zones-map .options .tab-content .list-areas {
        margin-top: 21px;
    }
    #delivery-zones-map .options .tab-content .list-areas .area {
        width: 100%;
        background: transparent;
        color: #096484;
        font-size: 11px;
        text-transform: uppercase;
        padding-bottom: 21px;
    }	
    #delivery-zones-map .options .tab-content .list-areas .area .area-box .area-box-title {
        font-size: 12px;
        background: #098446;
        color: #fff;
        padding: 10px;
        margin-bottom: 0;
    }
    #delivery-zones-map .options .tab-content .list-areas .area .area-box .area-box-options {
        background: #fff;
        padding: 15px;
        padding-top: 25px;
        padding-bottom: 25px;        
        max-height: 25vw;
        overflow-y: auto;
        overflow-x: hidden;
        border-left: 2px solid;
        border-right: 2px solid;
    }
    #delivery-zones-map .options .tab-content .list-areas .area .area-box .area-box-options .list-options input[type=checkbox] {
        margin: -0.05rem .25rem 0 0;
    }
    #delivery-zones-map .options .tab-content .list-areas .area .area-box .area-box-options .list-options .row .collum {
        display: table-cell;
        padding-right: 20px;
    }
    #delivery-zones-map .options .tab-content .list-areas .area .area-box .area-box-options .list-options .row .collum .area-option {
        padding-bottom: 4px;
        padding-top: 3px;
    }
    .save-box {
        width: 100%;
        background: linear-gradient(45deg, #58ba38, #9ccc17);
        color: #fff;
        text-align: center;
    }
    .save-box .save {
        padding: 8px;
        font-weight: 600;
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 1px;
        cursor: pointer;
    }
    #delivery-zones-map .options h3 {
        text-align: center;
        font-weight: 500;
        letter-spacing: 1px;
        text-transform: uppercase;
        font-size: 19px;
        color: #ffffff;
        margin-top: 21px;
        margin-bottom: 28px;
    }
    #delivery-zones-map canvas.mapboxgl-canvas {
        background-color: #000000;
        opacity: .65;
    }
    p.area-box-title b {
        position: absolute;
        right: 30px;
        font-size: 12.5px;        
    }
    .home-box .row {
        display: table;
        width: 100%;
        justify-content: center;
        text-align: center;
    }
    .home-logo img, .away-logo img {
        width: 45px;
        height: 45px;
    }
    .home-box .row .away-info {
        width: 33%;
        margin-left: auto;
        margin-right: auto;
    }
    .home-box .row .placar {
        width: 33%;
        margin-left: auto;
        margin-right: auto;
    }
    .home-box .row .home-info,
    .home-box .row .away-info,
    .home-box .row .form-placar {
        width: 33%;
        display: inline-block;
        vertical-align: middle;
        margin-left: auto;
        margin-right: auto;
    }   
    #placar-home,
    #placar-away {
        width: 45px;
        padding-right: 0px;
        padding-left: 11px;
    }
    .home-box .row .form-placar .form-box {
        display: table;
        margin-left: auto;
        margin-right: auto;
        padding-top: 3px;
    }
    .home-box .row .form-placar .form-box p {
        padding-left: 8px;
        padding-right: 7px;
    }
    .home-box .row .local b {
        position: absolute;
        right: 7vw;
    }
    .placar-home, 
    .placar-away {
        display: table-cell;
        height: 20px;
        vertical-align: middle;
        font-size: 72px;
    }
    .form-placar {
        line-height: 0;
        transform: translateY(-21px);
        padding-top: 21px;        
    }
    .box-send {
        padding-top: 7px;
        line-height: 0;
        height: 35px;
        background: #098446;
    }
    .box-send .btn-bet {
        background: linear-gradient(45deg, #b5d20c, #4cb73e);
        text-align: center;
        margin-top: 0;
        padding: 5px;
        transform: translateY(-2px);
        color: #fff;
        font-weight: 500;
        width: 30%;
        margin-left: auto;
        margin-right: auto;
        border: 1px solid;
        cursor: pointer;
        border-radius: 7px;
        opacity: .4;
    }
    body{
        background: #fff;
    }
    .cup-info {
        width: 43%;
        right: 280px;
        height: 100%;
        padding: 0;
        position: absolute;
        pointer-events: visible;
        z-index: 5;
        overflow-y: scroll;
    }   
    .cup-info .area-box {
        padding: 65px;
        padding-top: 40px;
        padding-bottom: 10px;
    }
    .cup-info .area-box .home-logo img, .cup-info .area-box .away-logo img {
        width: 90px;
        height: 90px;
    }
    .cup-info p.area-box-title b {
        position: absolute;
        right: 6.5vw;
        font-size: 14px;
        font-weight: 400;
    }
    .cup-info p.area-box-title {
        font-size: 14px;
        font-weight: 500;
        padding-left: 1.2vw;
        line-height: 2;
        background: #38b247;
        color: #fff;
        text-transform: uppercase;
        padding-top: 7px;
        padding-bottom: 7px;
    }
    .cup-info .home-title,
    .cup-info .away-title {
        font-size: 15px;
        font-weight: 500;
        padding-bottom: 7px;
    }
    .cup-info .form-placar .form-box p {
        padding-left: 7px;
        padding-right: 7px;
        font-size: 40px;
        font-weight: 100;
        transform: translate(0.5px,-14px);
    }
    .cup-info .placar-home, .cup-info .placar-away {
        vertical-align: text-top;
    }
    .home-box .row .local {
        margin-top: 21px;
        border-bottom: 1px solid #ccc;
        padding-bottom: 70px;
    }  
    .options.tab-content.box-active {
        display: block;
    }
    .options.tab-content {
        display: none;
    }
    .home-box.home-winer-box .row .form-box .winer-home #placar-home,
    .home-box.home-winer-box .row .form-box .winer-drawn #placar-draw,
    .home-box.home-winer-box .row .form-box .winer-away #placar-away {
        width: auto;
    } 
    .home-winer-box .row {
        display: flex;
    }
    .home-winer-box .row .form-box {
        width: 31%;
        display: inline-block;
        vertical-align: middle;
        margin-left: auto;
        margin-right: auto;
    }
    .home-winer-box .form-box .box div {
        margin-left: 0.5vw;
        margin-right: 0.5vw;
    }
    .home-winer-box .row .form-box .box {
        display: inline-flex;
    }
    .home-winer-box .row .form-box .box input {
        margin-left: auto;
        margin-right: auto;
    }
    .placar-desc{
        font-size: 10px;
        width: 100%;
        margin: 0;
        text-align: center;        
    }
    .form-box .placar-desc {
        margin-bottom: 15px;
    }
    .tab-content.bet-loto.box-active .area-box-title{
        font-size: 12px;
        background: #098446;
        color: #fff;
        padding: 10px;
        margin-bottom: 0;
        margin-top: 21px;   
    }
    .bet-loto .list-areas .area {
        padding-bottom: 0!important;
        margin-bottom: 0;
    }
    .tab-content.bet-loto .list-areas {
        margin-top: 0!important;
        margin-bottom: 0;
    }
    .home-box .row-local {
        padding-left: 1vw;
        padding-bottom: 1px;
        padding-top: 1px;
        background: #f1f1f1;
        height: 37px;
        display: table;
        width: 97%;
        margin-bottom: 7px;
        margin-top: 7px;
        padding-right: 1px;
    }
    .home-box .row-local p b {
        position: absolute;
        right: 7.3vw;
    }
    .row.row-game {
        padding-top: 21px;
        padding-bottom: 14px;
        border: 1px solid #f1f1f1;
        border-top: none;
        transform: translate(0px, -10px);
    }
    .cup-info .area-box .area-box-options {
        padding-left: 1.5vw;
        padding-right: 1.5vw;
    }    
</style>
<div id="delivery-zones-map">
    <div class="options">
        <h3>Cariocão 2021</h3>
        <ul class="tabs">
            <li class="bet-bolao active">Bolão</li>
            <li class="bet-loto">Loteria</li>
            <li class="bet-placar">Placar</li>
            <li class="bet-winer">Resultado</li>
        </ul>
        <div class="tab-content bet-bolao box-active">
            <ul class="list-areas">             
                <li class="area">
                    <div class="area-box">
                        
                        <!-- <p class="area-box-title"><?php //print the_title(); ?><b><?php //echo get_field('game_time'); ?></b></p> -->
                        <?php 
                            $args = array(  
                                'post_type' => 'weeks',
                                'post_status' => 'publish',
                                'posts_per_page' => 1, 
                                'orderby' => 'title', 
                                'order' => 'DESC', 
                            );
                            $a=0;
                            $loop = new WP_Query( $args );
                            
                            // field que exibe o nome da competição
                            // $field = get_field_object(get_post_meta($loop->posts[0]->ID)['_week_cup'][0]);
                            // por hora ficará estático

                            echo '<p class="area-box-title">Cariocão 2021 <b>' . get_post($loop->posts[0]->ID)->post_title . '</b></p>';

                            while ( $loop->have_posts() ) : $loop->the_post(); 

                            $arr_jogos = get_field('rodada_carioca');
                            if( !empty($arr_jogos) ) {
                            foreach($arr_jogos as $i => $val) {
                                $game_id = $val->ID;
                        
                                $home_data = get_post_meta($game_id)['home'][0];
                                $away_data = get_post_meta($game_id)['away'][0];
            
                                $game_time = get_post_meta($game_id)['game_time'][0];
                                $date = date_create($game_time);
            
                                $game_local = get_post_meta($game_id)['local'][0];
            
                                $home_score = get_post_meta($game_id)['placar_home'][0];
                                $away_score = get_post_meta($game_id)['placar_away'][0];
            
                        ?>
                        
                        <div class="area-box-options">
                            <div class="home-box home-winer-box">
                                <div class="row ">                                   
                                    <div class="home-info">
                                        <div class="home-logo"><?php print_r(get_the_post_thumbnail($home_data)); ?></div>
                                        <div class="home-title"><?php print_r(get_post($home_data)->post_title); ?></div>
                                    </div>
                                    <div class="form-placar">
                                        <p class="placar-desc">Jogo <?php echo ++$loto_game; ?></p>
                                        <div id="loto-<?php echo get_the_ID() ?>" class="form-box">
                                            <div class="placar-home"><input min="0" max="99" type="number" name="punter-<?php echo get_the_ID() ?>" id="placar-home"></div>
                                            <p>x</p>
                                            <div class="placar-away"><input min="0" max="99" type="number" name="punter-<?php echo get_the_ID() ?>" id="placar-away"></div>
                                        </div>
                                    </div>                      
                                    <div class="away-info">
                                        <div class="away-logo"><?php print_r(get_the_post_thumbnail($away_data)); ?></div>
                                        <div class="away-title"><?php print_r(get_post($away_data)->post_title); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div> 
            
                        <?php }} else { echo "Ainda não há jogos nessa rodada"; } ?>
              

                        <?php
                            endwhile;
                            wp_reset_postdata(); 
                        ?>                                
                    </div>
                    <div class="box-send">
                        <p id="loto-<?php echo get_the_ID() ?>" class="btn-bet">Apostar</p> 
                    </div>                    
                </li>                      
            </ul>
        </div>         
        <div class="tab-content bet-loto">
            <p class="area-box-title">Cariocão 2021 <b>Rodada 1</b></b></p>
            <ul class="list-areas">
                <?php 
                    $args = array(  
                        'post_type' => 'jogos',
                        'post_status' => 'publish',
                        'posts_per_page' => 6, 
                        'orderby' => 'title', 
                        'order' => 'ASC', 
                    );
                    $loto_game=0;
                    $loop = new WP_Query( $args );   
                    while ( $loop->have_posts() ) : $loop->the_post(); 
                    // print the_title(); 
                    // the_excerpt(); 
                ?>                
                <li class="area">
                    <div class="area-box">
                        <div class="area-box-options">
                            <div class="home-box home-winer-box">
                                <div class="row ">                                   
                                    <div class="home-info">
                                        <div class="home-logo"><?php print_r(get_the_post_thumbnail(get_field('home')->ID)); ?></div>
                                        <div class="home-title"><?php print_r(get_field('home')->post_title); ?></div>
                                    </div>
                                    <div class="form-box">
                                        <p class="placar-desc">Jogo <?php echo ++$loto_game; ?></p>
                                        <div id="loto_<?php echo $loto_game; ?>" class="box">
                                            <div class="winer-home"><input min="0" max="99" type="radio" value="1" name="loto_<?php echo $loto_game; ?>" id="placar-home"></div>
                                            <div class="winer-draw"><input min="0" max="99" type="radio" value="0" name="loto_<?php echo $loto_game; ?>" id="placar-draw"></div>
                                            <div class="winer-away"><input min="0" max="99" type="radio" value="2" name="loto_<?php echo $loto_game; ?>" id="placar-away"></div>                                        
                                        </div>
                                    </div>                      
                                    <div class="away-info">
                                        <div class="away-logo"><?php print_r(get_the_post_thumbnail(get_field('away')->ID)); ?></div>
                                        <div class="away-title"><?php print_r(get_field('away')->post_title); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>         
                    </div>
                </li>
                <?php
                    endwhile;
                    wp_reset_postdata(); 
                ?>                
            </ul>
            <div class="box-send">
                <p id="winer-<?php echo get_the_ID() ?>" class="btn-bet">Apostar</p> 
            </div>              
        </div>          
        <div class="tab-content bet-placar">
            <ul class="list-areas">
                <?php 
                    $args = array(  
                        'post_type' => 'jogos',
                        'post_status' => 'publish',
                        'posts_per_page' => 6, 
                        'orderby' => 'title', 
                        'order' => 'ASC', 
                    );
                    $loop = new WP_Query( $args );   
                    while ( $loop->have_posts() ) : $loop->the_post(); 
                    // print the_title(); 
                    // the_excerpt(); 
                ?>                
                <li class="area">
                    <div class="area-box">
                        <p class="area-box-title"><?php print the_title(); ?><b><?php echo get_field('game_time'); ?></b></p>
                        <div class="area-box-options">
                            <div class="home-box">
                                <div class="row">
                                    <div class="home-info">
                                        <div class="home-logo"><?php print_r(get_the_post_thumbnail(get_field('home')->ID)); ?></div>
                                        <div class="home-title"><?php print_r(get_field('home')->post_title); ?></div>
                                    </div>
                                    <div class="form-placar">
                                        <p class="placar-desc">Resultado</p>
                                        <div id="punter-<?php echo get_the_ID() ?>" class="form-box">
                                            <div class="placar-home"><input min="0" max="99" type="number" name="punter-<?php echo get_the_ID() ?>" id="placar-home"></div>
                                            <p>x</p>
                                            <div class="placar-away"><input min="0" max="99" type="number" name="punter-<?php echo get_the_ID() ?>" id="placar-away"></div>
                                        </div>
                                    </div>
                                    <div class="away-info">
                                        <div class="away-logo"><?php print_r(get_the_post_thumbnail(get_field('away')->ID)); ?></div>
                                        <div class="away-title"><?php print_r(get_field('away')->post_title); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-send">
                            <p id="score-<?php echo get_the_ID() ?>" class="btn-bet">Apostar</p> 
                        </div>           
                    </div>
                </li>
                <?php
                    endwhile;
                    wp_reset_postdata(); 
                ?>                
            </ul>
        </div>
        <div class="tab-content bet-winer">
            <ul class="list-areas">
                <?php 
                    $args = array(  
                        'post_type' => 'jogos',
                        'post_status' => 'publish',
                        'posts_per_page' => 6, 
                        'orderby' => 'title', 
                        'order' => 'ASC', 
                    );
                    $result_game = 0;
                    $loop = new WP_Query( $args );   
                    while ( $loop->have_posts() ) : $loop->the_post(); 
                    // print the_title(); 
                    // the_excerpt(); 
                ?>                
                <li class="area">
                    <div class="area-box">
                        <p class="area-box-title"><?php print the_title(); ?><b><?php echo get_field('game_time'); ?></b></p>
                        <div class="area-box-options">
                            <div class="home-box home-winer-box">
                                <div class="row ">                                   
                                    <div class="home-info">
                                        <div class="home-logo"><?php print_r(get_the_post_thumbnail(get_field('home')->ID)); ?></div>
                                        <div class="home-title"><?php print_r(get_field('home')->post_title); ?></div>
                                    </div>
                                    <div class="form-box">
                                        <p class="placar-desc">Resultado</p>
                                        <!-- AQUI TEM QUE SER O ID DO JOGO! E NA HORA DE PASSAR O ARRAY ENVIAR O ID DO USUÁRIO QUE FEZ A APOSTA E O VALOR SELECIONADO PARA ESSE JOGO -->
                                        <div id="result_<?php echo ++$result_game; ?>" class="box">
                                            <div class="winer-home"><input min="0" max="99" type="radio" value="1" name="result_<?php echo $result_game; ?>" id="placar-home"></div>
                                            <div class="winer-draw"><input min="0" max="99" type="radio" value="0" name="result_<?php echo $result_game; ?>" id="placar-draw"></div>
                                            <div class="winer-away"><input min="0" max="99" type="radio" value="2" name="result_<?php echo $result_game; ?>" id="placar-away"></div>                                        
                                        </div>
                                    </div>               
                                    <div class="away-info">
                                        <div class="away-logo"><?php print_r(get_the_post_thumbnail(get_field('away')->ID)); ?></div>
                                        <div class="away-title"><?php print_r(get_field('away')->post_title); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-send">
                            <p id="winer-<?php echo get_the_ID() ?>" class="btn-bet">Apostar</p> 
                        </div>           
                    </div>
                </li>
                <?php
                    endwhile;
                    wp_reset_postdata(); 
                ?>                
            </ul>
        </div>       
    </div>
    <div class="cup-info">
        <?php 
            $args = array(  
                'post_type' => 'weeks',
                'post_status' => 'publish',
                'posts_per_page' => -1, 
                'orderby' => 'title', 
                'order' => 'DEASSC', 
            );
            $loop = new WP_Query( $args );   
            while ( $loop->have_posts() ) : $loop->the_post(); 
            // print the_title(); 
            // the_excerpt(); 
        ?>
        <div class="area-box">
            <p class="area-box-title"><?php print the_title(); ?> <b><?php print_r(get_field('week_cup')[0]->post_title) ?></b></p>
            <?php
                $arr_jogos = get_field('rodada_carioca');
                if( !empty($arr_jogos) ) {
                foreach($arr_jogos as $i => $val) {
                    $game_id = $val->ID;
            
                    $home_data = get_post_meta($game_id)['home'][0];
                    $away_data = get_post_meta($game_id)['away'][0];

                    $game_time = get_post_meta($game_id)['game_time'][0];
                    $date = date_create($game_time);

                    $game_local = get_post_meta($game_id)['local'][0];

                    $home_score = get_post_meta($game_id)['placar_home'][0];
                    $away_score = get_post_meta($game_id)['placar_away'][0];

            ?>
            
            <div class="area-box-options">
                <div class="home-box">
                    <div class="row-local">
                        <p class="local"><?php echo date_format($date, 'd/m \à\s g:i a'); ?> <b><?php echo $game_local; ?></b></p>
                    </div>                
                    <div class="row row-game">
                        <div class="home-info">
                            <div class="home-logo"><?php print_r(get_the_post_thumbnail(get_post($home_data)->ID)); ?></div>                        
                            <div class="home-title"><?php print_r(get_post($home_data)->post_title); ?></div>
                        </div>
                        <div class="form-placar">
                            <div class="form-box">
                                <div class="placar-home"><?php echo $home_score; ?></div>
                                <p>x</p>
                                <div class="placar-away"><?php echo $away_score; ?></div>
                            </div>
                        </div>
                        <div class="away-info">
                            <div class="away-logo"><?php print_r(get_the_post_thumbnail(get_post($away_data)->ID)); ?></div>                        
                            <div class="away-title"><?php print_r(get_post($away_data)->post_title); ?></div>
                        </div>
                    </div>
                </div>
            </div>

            <?php }} else { echo "Ainda não há jogos nessa rodada"; } ?>

        </div>
        <?php
            endwhile;
            wp_reset_postdata(); 
        ?>         
    </div>    
</div>
<script>

const menuClicked = document.querySelectorAll('.options .tabs li');

menuClicked.forEach(el => el.addEventListener('click', event => {
  if(event.target.className != 'active') {

    const tabCurrent = event.target.className.split(" ")
    const splitContent = event.target.className.split(" ")
    var newContent = document.getElementsByClassName(splitContent[0])

    // Adiciona class active no tab de destino
    if(!tabCurrent[1]) {
        
        menuClicked.forEach(function(cn){
            var tabNew = cn.className.split(" ")
            if(tabNew[1]) {
                var destiny = document.getElementsByClassName(tabNew[0])            
          
                destiny[0].classList.remove('active')    
                destiny[1].classList.remove('box-active')

            }
        }) 
        
        event.target.classList.add('active')

        newContent[1].classList.add('box-active')

        // var contentNew = document.getElementsByClassName(tabCurrent)

    }

  }
}));

</script>