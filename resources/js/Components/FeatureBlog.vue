<template>
    <section class="featured container my-5">
        <div class="row">
            <div class="one col-lg-4 col-md-6 col-12 mb-3">
                <img class="img-fluid" src="images/1.jpg" alt="" />
                <div class="text w-75 h-50 text-light p-4">
                    <h6>This is a sample title of the blog</h6>
                    <a class="link" href="#">Read more</a>
                </div>
            </div>
            <div class="one col-lg-4 col-md-6 col-12 mb-3">
                <img class="img-fluid" src="images/2.jpg" alt="" />
                <div class="text w-75 h-50 text-light p-4">
                    <h6>This is a sample title of the blog</h6>
                    <a class="link" href="#">Read more</a>
                </div>
            </div>
            <div class="one col-lg-4 col-md-6 col-12 mb-3">
                <img class="img-fluid" src="images/3.jpg" alt="" />
                <div class="text w-75 h-50 text-light p-4">
                    <h6>This is a sample title of the blog</h6>
                    <a class="link" href="#">Read more</a>
                </div>
            </div>
        </div>
    </section>
</template>

<style>
.featured .row .one {
    height: 300px;
}
.featured .row .one img {
    height: 100%;
    width: 100%;
    background-size: cover;
    box-sizing: border-box;
    object-fit: cover;
}
.featured .row .one .text {
    background-color: rgba(0, 0, 0, 0.5);
    height: 100%;
    width: 100%;
    position: absolute;
    bottom: 0;
}

.featured .row .one a {
    text-decoration: none;
    border-style: none;
    color: white;
    font-size: 0.9rem;
}

.featured .row .one a::after {
    content: "";
    display: block;
    width: 30%;
    height: 2px;
    background: #2ecc71;
}
</style>
