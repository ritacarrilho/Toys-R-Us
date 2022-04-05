<form action="" method="get">
    <select name="games">
        <option value="">Quelle marque?</option>
        <option value="1">Ravensburger</option>
        <option value="2">Silverlit Toys</option>
        <option value="3">Asmodée</option>
        <option value="4">Clementoni</option>
        <option value="5">Playmobil</option>
        <option value="6">Mattel</option>
        <option value="7">Wow Wee</option>
    </select>

    <button type="submit">Ok</button>
</form>

<div class="items-grid">
    
        <?php
            foreach( $toys as $toy ): ?>
            <div>
                <img src="/img/<?php echo $toy['image'] ?>" alt="Game Image">
                <h5><a href="/list?id=<?php echo $toy['id']?>"> <?php echo $toy['name'] ?></a> </h5>
                <p><?php echo $toy['price']; ?></p>
            </div>    
            <?php endforeach ?>
</div>