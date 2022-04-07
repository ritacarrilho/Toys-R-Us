<div class="items-flex">
<?php // echo sprintf($_GET['id'])?>
<?php if( isset($_GET['id']) ) :?> 
    <?php foreach( $toys as $toy ): 
        $page_title = $toy['name']
    ?>
        
        <div class=img>
            <img src="/img/<?php echo $toy['image'] ?>" alt= "<?php echo $toy['name'] ?>">

        <p><?php $toy['price'] ?></p>

        <form class="store-form" method="get">
            <select name="store">
                <option value="choose-a-store">Quel magasin ?</option>
                <option value="<?php //echo $toy['brand_id']?>">PERPIGNAN<?php //echo $toy['brand_name'] ?></option>
            </select>

            <button type="submit">Ok</button>
            
        </form>

        <h6>Stock : <span><?php //echo $toy['brand_id'] ?>45</span></h6>

    </div>
    <div class="content">
        <h6>Marque : <span><?php echo $toy['brand_name'] ?></span></h6>
        <span><?php echo $toy['description'] ?></span>
    </div>
    
    <?php endforeach ?>
    <?php endif ?>

    
</div>

<?php //if( isset($_GET['store']) && $_GET['store'] === 'choose-a-store' ): header( 'Location: /list')?>
