<?php $this->load->view("_partials/head.php") ?>
<?php $this->load->view("_partials/sidebar.php") ?>
            <!-- Header-->
            <header class="bg-dark py-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-2">Selamat Datang di <br>Live Streaming</h1>
                                <p class="lead fw-normal text-white-50 mb-4">Tempat Berkumpulnya Para Gamers Sejati</p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Login </a>
                                    <a class="btn btn-outline-light btn-lg px-4" href="#!">Daftar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">
							<!-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
									<img class="img-fluid rounded-3 my-5 d-block" src="<?php echo base_url('images/ml.jpg') ?>" alt="First slide">
									</div>
									<div class="carousel-item">
									<img class="img-fluid rounded-3 my-5 d-block" src="<?php echo base_url('images/pubgm.jpg') ?>" alt="Second slide">
									</div>
									<div class="carousel-item">
									<img class="img-fluid rounded-3 my-5 d-block" src="<?php echo base_url('images/csgo.jpg') ?>" alt="Third slide">
									</div>
								</div>
								<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								</a>
								<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
								</a>
							</div> -->
							<img class="img-fluid rounded-3 my-5" src="<?php echo base_url('images/csgo.jpg') ?>" alt="Logo" /></div>
                    </div>
                </div>
            </header>
            <!-- Features section-->
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5 mb-lg-0"><h2 class="fw-bolder mb-0">Pilih Game Favorit Kamu!</h2></div>
                        <div class="col-lg-8">
                            <div class="row gx-5 row-cols-1 row-cols-md-2">
                                <div class="col mb-5 h-100">
                                    <img src="<?php echo base_url('images/ml.jpg') ?>" width="300" height="210" alt="">
                                    <h2 class="h5"><br><b>Mobile Legend</b></h2>
                                    <p class="mb-0"></p>
                                </div>
                                <div class="col mb-5 h-100">
									<img src="<?php echo base_url('images/pubgm.jpg') ?>" width="300" height="210" alt="">
									<h2 class="h5"><br><b>Player Unknown's <br>Battle Ground Mobile</b></h2>
                                    <p class="mb-0"></p>
                                </div>
                                <div class="col mb-5 mb-md-0 h-100">
									<img src="<?php echo base_url('images/dota2.jpeg') ?>" width="300" height="210" alt="">
                                    <h2 class="h5"><br><b>Defend Of The <br>Ancient 2</b></h2>
                                    <p class="mb-0"></p>
                                </div>
                                <div class="col h-100">
								<img src="<?php echo base_url('images/csgo.jpg') ?>" width="300" height="210" alt="">
                                    <h2 class="h5"><br><b>Counter Strike: <br>Global Offensive</b></h2>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Blog preview section-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <div class="text-center">
                                <h2 class="fw-bolder">Ongoing Live Streaming !!!</h2>
                                <p class="lead fw-normal text-muted mb-5">For Gamers - By Gamers</p>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                            <iframe class="card-img-top" width="560" height="315" src="https://www.youtube.com/embed/cT8Wi8gRYhg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>    
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">Dota 2</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">OG vs NIGMA</h5></a>
                                    <p class="card-text mb-0">The International 10</p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                            <div class="small">
                                                <div class="fw-bold">User 1</div>
                                                <div class="text-muted">March 12, 2021</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
							<iframe class="card-img-top" width="560" height="315" src="https://www.youtube.com/embed/qN9nzU9L27k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">Counter Strike: Global Offensive</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Navi vs Vitality</h5></a>
                                    <p class="card-text mb-0">IEM Cologne</p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                            <div class="small">
                                                <div class="fw-bold">User 2</div>
                                                <div class="text-muted">March 23, 2021</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
							<iframe class="card-img-top" width="560" height="315" src="https://www.youtube.com/embed/mRis6Zpeulc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">Mobile Legend Bang Bang</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">RRQ vs Evos</p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                            <div class="small">
                                                <div class="fw-bold">User 3</div>
                                                <div class="text-muted">April 2, 2021</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer-->
		<?php $this->load->view("_partials/footer.php") ?>

