<form action="" method="get">
    <select name="brand">
    <option value="choose-a-brand">Quelle marque ?</option>
    
        <?php foreach($all_brands as $brand): ?>
            <?php if ($_GET['brand'] === $brand['id']) : $selected = 'selected'; else :  $selected = ''; endif ?>
            
            <option value="<?php echo $brand['id']?>" <?php echo $selected ?>>
                <?php echo $brand['name'] ?>
            </option>

        <?php endforeach ?>
    </select>

    <button type="submit">Ok</button>
</form>

<div class="items-grid">
    <?php if( count($toys) > 0 ): ?>
        <?php foreach( $toys as $toy ): ?>
        <div>
            <img src="/img/<?php echo $toy['image'] ?>" alt= "<?php echo $toy['name'] ?>">
            <h5><a href="/details?id=<?php echo $toy['id']?>"> <?php echo $toy['name'] ?></a> </h5>
            <p><?php echo str_replace('.' , ',', $toy['price']) ?>€</p>
        </div> 
        <?php endforeach ?>
    <?php endif ?>
</div>

<?php if( isset($_GET['brand']) && $_GET['brand'] === 'choose-a-brand' ): header( 'Location: /list')?>

<?php endif ?>