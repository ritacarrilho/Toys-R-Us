<!-- Form to choose brand name -->
<form action="" method="get">
    <select name="brand">
    <option value="choose-a-brand">Quelle marque ?</option>
    
        <?php foreach($brand_data as $brand): ?>
            <?php ( $_GET['brand'] === $brand['brand_id']) ? $selected = 'selected' :  $selected = ''; ?>
            
            <option value="<?php echo $brand['brand_id']?>" <?php echo $selected ?>>
                <?php echo $brand['brand_name'] . " (" . $brand['toys_total'] . ")" ?>
            </option>

        <?php endforeach ?>
    </select>

    <button type="submit">Ok</button>
</form>

<!-- Display toys -->
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

<?php 
// '/list' redirection
// if( $_GET['brand'] === 'choose-a-brand' ){
//     header( 'Location: /list'); 
// }
// // error redirection
// if(!$toys && isset($_GET['brand']) && $_GET['brand'] !== 'choose-a-brand'){
//     header( 'Location: /error');
// }
?>