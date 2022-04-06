<div class="items-grid">
    <?php     
        foreach( $top_list as $toy ): ?>
            <div>
                <img src="/img/<?php echo $toy['image'] ?>" alt= "<?php echo $toy['name'] ?>">
                <h5><a href=""> <?php echo $toy['name'] ?></a> </h5>
                <p><?php echo $toy['price'] ?></p>
            </div>    
        <?php endforeach ?>

</div>
