<x-layouts.main>
    <!-- Header Start -->
    <x-header-start>
        Property List
    </x-header-start>
    <!-- Header End -->

    <x-search-bar></x-search-bar>
    <div class="container p-5">
        <div class="row">
            <div class="col-lg-12">
                <h1>Property Name</h1>
                <p class="text-muted">Location: Property Location</p>
                <div class="row">
                    <div class="col-md-6">
                        <div id="carouselExampleControls" class="carousel slide relative" data-bs-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="/img/property-1.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="/img/property-2.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="/img/property-3.jpg" class="d-block w-100" alt="...">
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <i class="bi bi-chevron-left"></i>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <i class="bi bi-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="/img/property-1.jpg" alt="" class="img-fluid rounded mb-3">
                            </div>
                            <div class="col-md-6">
                                <img src="/img/property-1.jpg" alt="" class="img-fluid rounded mb-3">
                            </div>
                            <div class="col-md-6">
                                <img src="/img/property-1.jpg" alt="" class="img-fluid rounded mb-3">
                            </div>
                            <div class="col-md-6">
                                <img src="/img/property-1.jpg" alt="" class="img-fluid rounded mb-3">
                            </div>
                        </div>
                    </div>
                </div>
                <p class="mt-4">Property Description Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <div class="row property-detailed">
            <div class="col-lg-8 property-detailed__overview" >
                <div class="row col-lg-12">
                    <h4>Overview</h4>
                    <div class="row property-detailed__overview-grabber">
                        <!-- Bedroom -->
                        <div class="col-md-4">
                            <div class="text-center py-3 d-flex gap-3">
                                <div class="border rounded-2 p-2 col-4" style="width: 50px; height: 50px;">
                                    <i class="fas fa-bed fa-2x" style="width: 32px; height: 32px;"></i>
                                </div>
                                <div class="col-8 text-start">
                                    <p class="m-0">Bedroom</p>
                                    <p class="m-0">X</p>
                                </div>
                            </div>
                        </div>

                        <!-- Bath -->
                        <div class="col-md-4">
                            <div class="text-center py-3 d-flex gap-3">
                                <div class="border rounded-2 p-2 col-4" style="width: 50px; height: 50px;">
                                    <i class="fas fa-bath fa-2x"></i>
                                </div>
                                <div class="col-8 col-8 text-start">
                                    <p class="m-0">Bath</p>
                                    <p class="m-0">X</p>
                                </div>
                            </div>
                        </div>

                        <!-- Year of the Property -->
                        <div class="col-md-4">
                            <div class="text-center py-3 d-flex gap-3">
                                <div class="border rounded-2 p-2 col-4" style="width: 50px; height: 50px;">
                                    <i class="fas fa-calendar-alt fa-2x"></i>
                                </div>
                                <div class="col-8 text-start">
                                    <p class="m-0">Year Built</p>
                                    <p class="m-0">X</p>
                                </div>
                            </div>
                        </div>

                        <!-- Garage -->
                        <div class="col-md-4">
                            <div class="text-center py-3 d-flex gap-3">
                                <div class="border rounded-2 p-2 col-4" style="width: 50px; height: 50px;">
                                    <i class="fas fa-car fa-2x"></i>
                                </div>
                                <div class="col-8 text-start">
                                    <p class="m-0">Bath</p>
                                    <p class="m-0">X</p>
                                </div>
                            </div>
                        </div>

                        <!-- Sqft -->
                        <div class="col-md-4">
                            <div class="text-center py-3 d-flex gap-3">
                                <div class="border rounded-2 p-2 col-4" style="width: 50px; height: 50px;">
                                    <i class="fas fa-home fa-2x"></i>
                                </div>
                                <div class="col-8 text-start">
                                    <p class="m-0">Sqft</p>
                                    <p class="m-0">X</p>
                                </div>
                            </div>
                        </div>

                        <!-- Property Type -->
                        <div class="col-md-4">
                            <div class="text-center py-3 d-flex gap-3">
                                <div class="border rounded-2 p-2 col-4" style="width: 50px; height: 50px;">
                                    <i class="fas fa-building fa-2x"></i>
                                </div>
                                <div class="col-8 text-start">
                                    <p class="m-0">Property Type</p>
                                    <p class="m-0">X</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Features & Amenities Box -->
                <div class="row mt-4">
                    <div class="col-md-12">
                        <h4>Features & Amenities</h4>
                        <div class="property-detailed__overview-grabber py-3">
                            <ul class="row">
                                <li class="col-4 py-2">Feature 1</li>
                                <li class="col-4 py-2">Feature 2</li>
                                <li class="col-4 py-2">Feature 3</li>
                                <li class="col-4 py-2">Feature 1</li>
                                <li class="col-4 py-2">Feature 2</li>
                                <li class="col-4 py-2">Feature 3</li>
                                <li class="col-4 py-2">Feature 1</li>
                                <li class="col-4 py-2">Feature 2</li>
                                <li class="col-4 py-2">Feature 3</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Comments Section -->
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="mb-3">Leave a review</h4>
                        <div class="property-detailed__overview-grabber py-3">
                            <!-- Existing Comments -->
                            <div class="mb-5">
                                <h3 class="mb-4 section-title">3 Comments</h3>
                                <div class="media mb-4 row">
                                    <img src="/img/user.jpg" alt="Image" class="img-fluid rounded-circle mr-3 mt-1 col-2" style="width: 75px; height:50px;">
                                    <div class="media-body col-10">
                                        <h6>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                                        <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum clita, at tempor amet ipsum diam tempor sit.</p>
                                        <button class="btn btn-sm btn-light">Reply</button>
                                    </div>
                                </div>
                                <div class="media mb-4 row">
                                    <img src="/img/user.jpg" alt="Image" class="img-fluid rounded-circle mr-3 mt-1 col-2" style="width: 75px; height:50px;">
                                    <div class="media-body col-10">
                                        <h6>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                                        <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum clita, at tempor amet ipsum diam tempor sit.</p>
                                        <button class="btn btn-sm btn-light">Reply</button>
                                        <div class="media mt-4 row">
                                            <img src="/img/user.jpg" alt="Image" class="img-fluid rounded-circle mr-3 mt-1 col-2" style="width: 75px; height:50px;">
                                            <div class="media-body col-10">
                                                <h6>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                                                <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum clita, at tempor amet ipsum diam tempor sit.</p>
                                                <button class="btn btn-sm btn-light">Reply</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Comment Form -->
                        <h4 class="mt-4">Leave a Comment</h4>
                        <form>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="name" class="form-label">Your Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="email" class="form-label">Your Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                </div>
                                <div class="mb-3">
                                    <label for="website" class="form-label">Your Website</label>
                                    <input type="text" class="form-control" id="website" placeholder="Your Website (optional)">
                                </div>
                                <div class="mb-3">
                                    <label for="comment" class="form-label">Your Comment</label>
                                    <textarea class="form-control" id="comment" rows="4" placeholder="Write your comment"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit Comment</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Property Details</h5>
                        <ul class="list-group">
                            <li class="list-group-item">Price: $X,XXX,XXX</li>
                            <li class="list-group-item">Bedrooms: X</li>
                            <li class="list-group-item">Bathrooms: X</li>
                            <li class="list-group-item">Area: XXX sq. ft.</li>
                        </ul>
                        <p class="mt-3">Contact Agent: Agent Name</p>
                        <p>Contact Email: agent@example.com</p>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#scheduleModal">Schedule a Viewing</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Existing Code (Previous Content) -->
        <div class="row my-5">
            <div class="col-lg-12">
                <h4 class="mb-4">Similar Homes</h4>
                <div class="row">
                    @foreach ($recent_properties as $property)
                    <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp " data-wow-delay="0.1s">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="/img/property-1.jpg" alt=""></a>
                                <div class="badge rounded-pill btn-primary text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                                <button class="bg-white rounded-top text-primary position-absolute bottom-0 end-0 border border-0 bottom-0 mx-4 pt-1 px-3">Like</button>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">${{ number_format($property->price) }}</h5>
                                <a class="d-block h5 mb-2" href=""></a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $property->street }}, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>Bath</small>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</x-layouts.main>


<div class="modal fade" id="scheduleModal" tabindex="-1" aria-labelledby="scheduleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="scheduleModalLabel">Schedule a Viewing</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Get More Information Menu -->
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab">Contact</a>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content mt-3">
                    <!-- Contact Tab -->
                    <div class="tab-pane fade show active" id="contact" role="tabpanel">
                        <form class="row">
                            <div class="mb-3 col-md-6">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="tel" class="form-control" id="phone" placeholder="Your Phone">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Your Email">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="whoiam" class="form-label">Who I Am</label>
                                <input type="text" class="form-control" id="whoiam" placeholder="Who I Am">
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" rows="4" placeholder="Your Message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary col-2 mx-auto my-3">Request Info</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
