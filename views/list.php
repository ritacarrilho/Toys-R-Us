<form action="" method="get">
    <select name="games" id="game-sectle">
        <option value="">Quelle marque?</option>
        <option value="ravensburger">Ravensburger</option>
        <option value="silverlit-toys">Silverlit Toys</option>
        <option value="asmodee">Asmodée</option>
        <option value="clementoni">Clementoni</option>
        <option value="playmobil">Playmobil</option>
        <option value="mattel">Mattel</option>
        <option value="wow-wee">Wow Wee</option>
    </select>

    <button type="submit">Ok</button>
</form>

<div class="items-grid">
    
        <?php if( count ( $games ) <= 0 ): ?>
            <div class="error">Aucun jouet en ce moment</div>
        <?php else: 
            
            foreach( $games as $game ): ?>
            <div>
                <img src="/img/<?php echo $game['image'] ?>" alt="Game Image">
                <h5><a href=""> <?php echo $game['name'] ?></a> </h5>
                <p><?php echo $game['price']; ?></p>
            </div>    
            <?php endforeach ?>
        <?php endif ?>
</div>

<?php 

?>