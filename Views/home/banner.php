<!-- hero section -->
<div class="container-fluid p-0">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php $active = true; foreach ($data_banner as $banner): ?>
            <div class="carousel-item <?php echo ($active == true)?"active":"" ?>">
                <img src="<?php echo URL; ?>public/images/<?php echo $banner['HinhAnh'] ?>" class="d-block w-100" alt="panner">
            </div>
            <?php $active = false; endforeach; ?>
            
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>
</div>

<!-- end hero section -->

<!-- promotion section -->
<!-- end promotion section -->