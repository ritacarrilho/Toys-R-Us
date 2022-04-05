<form action="" method="get">
    <select name="games">
        <?php foreach($brands as $brand): ?>
            
            <option value="<?php echo $marks['id']?>"><?php echo $marks['name']?></option>
    </select>

    <button type="submit">Ok</button>
</form>

<div class="items-grid">
    

        <?php //if( $_GET['id'] ===  ): ?> 
            <div>Aucune voitures en ce moment</div>
        
        
            <?php foreach( $toys as $toy ): ?>
            <div>
                <img src="/img/<?php echo $toy['image'] ?>" alt="Game Image">
                <h5><a href="/list?id=<?php echo $toy['id']?>"> <?php echo $toy['name'] ?></a> </h5>
                <p><?php echo $toy['price']; ?></p>
            </div> 
            <?php //else: ?>   
            <?php endforeach ?>
            <?php //endif ?>
</div>