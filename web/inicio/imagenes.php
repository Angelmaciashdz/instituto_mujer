 <div class="slider" >
    <ul class="slides" id="slid1">
            <?php
     foreach($this->model->ListarSlider() as $sld): 
      ?>
      <li style="">
      
       <center> <img src="../multimedia/imagenes/logos/<?php echo $sld->__GET('imagen'); ?>" style="width: 650px;height: 399px;"></center> <!-- random image -->
      </li>
                 <?php endforeach;?>
    </ul>
  </div>
