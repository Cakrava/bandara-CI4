
<?=$this->extend('Layout/main')?>
<?=$this->extend('Layout/menu')?>
<?=$this->section('isihome')?>

<div class="row">
    <div class="col-8">
<div class="container">
    <div id="slideshow" class="carousel slide d-flex align-items-start" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators ">
            <?php for ($i = 0; $i < 11; $i++) : ?>
                <li data-target="#slideshow" data-slide-to="<?php echo $i ?>" class="<?php echo $i == 0 ? 'active' : '' ?>"></li>
            <?php endfor ?>
        </ol>

        <!-- Slides -->
        <div class="carousel-inner">
            <?php for ($i = 1; $i <= 11; $i++) : ?>
                <div class="carousel-item  <?php echo $i == 1 ? 'active' : '' ?>">
                    <img src="<?php echo base_url('gambar/bandara/' . $i . '.jpg') ?>" alt="Slide <?php echo $i ?>">
                </div>
            <?php endfor ?>
        </div>

        <!-- Controls -->
        <a class="carousel-control-prev" href="#slideshow" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slideshow" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
</div>


<style>
            .warna{
               font-style:inherit;
            }
            .warna-merah{
              color: red;
            }
        </style>

<!-- <div class="row"> -->
    <div class="col-4">
        <div class="card mb-2 sudut">
           
            <div class="card-body">
                <!-- Code to retrieve and display data from "bandara" table goes here -->
                <span style="font-size: 20px" class="warna"> <?php echo $data['count']; ?> Transaksi Pemesanan</span>
            </div>
        </div>
      
        <div class="card mb-2 sudut">
          
            <div class="card-body">
                  <span style="font-size: 20px" class="warna warna-merah"> <?php echo $batal['batal']; ?> Transaksi Telah Dibatalkan</span>
          
            </div>
        </div> 
    

        <div class="card mb-3 sudut">
        
            <div class="card-body">
        
            <span style="font-size: 20px" class="warna"> <?php echo $penumpang['penumpang']; ?> Orang telah memesan</span>
          
            </div>
        </div>
        <div class="card sudut">
          
            <div class="card-body">
            <span style="font-size: 20px" class="warna "> <?php echo $maskapai['maskapai']; ?> Maskapai Tersedia</span>
             
            <!-- Code to retrieve and display data from "pesawat" table goes here -->
            </div>
            
        </div>
    </div>
</div>
<style>
#slideshow {
    width: 1000px;
    height: 450px;
    border-radius: 20px;
    overflow: hidden;
    
}

#slideshow .carousel-item  {
  
    text-align: right;
}

#slideshow .carousel-item img {
  width: 100%;
    height: 100%;
    object-fit: cover;
    
    display: inline-block;
}

.sudut{
  border-radius: 20px;
}
  </style>

<?=$this->endSection('')?>