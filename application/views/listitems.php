<div class="container">

    <h2 class="indigo-text">Recent Todos...</h2>

    <div class="card">
        <ul class="collection">

            <?php 
        if($list)
        {
            foreach($list as $item){
           
            echo '
            <li class="collection-item avatar">
            <div>
                <i class="material-icons circle indigo lighten-1">playlist_play</i>
                <h4>'.$item['title'].'</h4>
            </div>
            <div>
                <p>'.$item['content'].'</p>
            </div>
        </li>';}
        }   
        else{
            echo'
            <li class="collection-item avatar">
                <div>
                    <i class="material-icons circle indigo lighten-1">playlist_play</i>
                    <h4> NO DATA FOUND </h4>
                </div>
                <div>
                    <p> **************</p>
                </div>
            </li>';
        
        }
        ?>

        </ul>
    </div>
</div>