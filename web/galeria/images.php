<div class="gallery">
    <?php foreach($this->model->ListarImagenes() as $img):
        $imageThumbURL = '../../public/imagenes/actividades/'.$img->__GET('imagen');
        $imageURL = '../../public/imagenes/actividades/'.$img->__GET("imagen");
    ?>
    <a href="<?php echo $imageURL; ?>" data-fancybox="group" data-caption="<?php echo $img->__GET("imagen") ?>" >
        <img src="<?php echo $imageThumbURL; ?>" alt="" />
    </a>
    <?php endforeach; ?> 
</div>
