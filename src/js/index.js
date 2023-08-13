  $(document).ready(function() {

    $("#features").owlCarousel({

      items: 4,
      autoplay: true,
      nav: false,
      autoPlaySpeed: 500,
      autoPlayTimeout: 5000,
      autoPlayHoverPause: true,
      margin: 10,
      loop: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 4
        }
      }
    });

  });

  // Owlcarousel
  $(document).ready(function() {

    $("#bestseller").owlCarousel({
      items: 8,
      nav: false,
      loop: true,
      margin: 10,
      dots: false,
      autoplay: true,
      slideTransition: 'linear',
      autoplayTimeout: 6000,
      autoplaySpeed: 8000,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 2
        },
        600: {
          items: 3
        },
        1000: {
          items: 5
        }
      }

    });

  });
  const container = document.querySelector('#bestseller');
  for (var i = 0; i < 12; i++) {
    const chaild = `
           <div class="card shadow my-4">
              <img src="./src/Image/1_380x.jpeg" alt="" class="card-img-top">
              <div class="card-body pb-5">
                <p class="card-text m-0  category">
                  <small>${i} item</small>
                </p>
                <h4 class="card-title my-2 text-capitalize title">Discover the art</h4>
                <h5 class="card-text m-0 mb-2">
                  <small>chaos</small>
                </h5>
                <a href="" class="btn btn-lg btn-outline-primary price">$400</a>
              </div>
            </div>
                        `;

    container.innerHTML += chaild;
  }