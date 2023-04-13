
    <?php 
    include('header.php')?>
 

<?php include('navbar.php')?>

    <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img  src="assets/image1.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>offer!!</h5>
                        <p>product 1</p> 
                        <button type="button" class="btn btn-outline-primary">BUY NOW</button>
                        <button type="button" class="btn btn-outline-secondary">REVIEWS</button>
                        <button type="button" class="btn btn-outline-success">OFFERS</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/image1.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>offer!!</h5>
                        <p>product 2</p>
                        <button type="button" class="btn btn-outline-primary">BUY NOW</button>
                        <button type="button" class="btn btn-outline-secondary">REVIEWS</button>
                        <button type="button" class="btn btn-outline-success">OFFERS</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/image1.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>offer!!</h5>
                        <p>product 3</p>
                        <button type="button" class="btn btn-outline-primary">BUY NOW</button>
                        <button type="button" class="btn btn-outline-secondary">REVIEWS</button>
                        <button type="button" class="btn btn-outline-success">OFFERS</button>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="container my-4">
        <div class="row mb-2">
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">Blog post</strong>
                        <h3 class="mb-0">Featured post</h3>
                        <div class="mb-1 text-body-secondary">Nov 12</div>
                        <p class="card-text mb-auto">sample review</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="assets/thumb.jpg" alt="thumbnail">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Star Reviews</strong>
                        <h3 class="mb-0">Featured Blog</h3>
                        <div class="mb-1 text-body-secondary">Nov 11</div>
                        <p class="mb-auto">sample blog</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="assets/thumb.jpg" alt="thumbnail">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-4">
        <div class="row mb-2">
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">Blog post</strong>
                        <h3 class="mb-0">Featured post</h3>
                        <div class="mb-1 text-body-secondary">Nov 12</div>
                        <p class="card-text mb-auto">sample review</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img  src="assets/thumb.jpg" alt="thumbnail">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Star Reviews</strong>
                        <h3 class="mb-0">Featured Blog</h3>
                        <div class="mb-1 text-body-secondary">Nov 11</div>
                        <p class="mb-auto">sample blog</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="assets/thumb.jpg" alt="thumbnail">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="alert alert-primary" role="alert">
            Feel free to drop a review <a href="review.php" class="alert-link"> review form </a>. Click This.
          </div>
    </div>
    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        
        

<?php include('footer.php')?>
