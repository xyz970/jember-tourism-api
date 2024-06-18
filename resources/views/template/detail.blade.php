<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>JemberTourism</title>
    <link rel="icon" href="public/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('styles/detail.css') }}" />
</head>

<body>
    <header>
        <nav>
            <div class="navbar">
                <i class="bx bx-menu"></i>
                <div class="logo">
                    <img src="{{ asset('images/logo.svg') }}" width="300px" alt="" />
                </div>
                <div class="nav-links">
                    <div class="sidebar-logo">
                        <span class="logo-name"> <img src="{{ asset('images/logo.svg') }}" width="100px"
                                alt="" /></span>
                        <i class="bx bx-x"></i>
                    </div>
                    <ul class="links">
                        <li><a href="index.html">Home</a></li>
                        <li>
                            <a href="index.html">Features</a>
                        </li>
                        <li>
                            <a href="">About Us</a>
                            <i class="bx bxs-chevron-down js-arrow arrow"></i>
                            <ul class="js-sub-menu sub-menu">
                                <li><a href="https://www.linkedin.com/in/luthfi-taufiqulhakim/">Luthfi</a></li>
                                <li><a href="https://www.linkedin.com/in/farhan-ansyah-182491284/">Farhan</a></li>
                                <li><a href="https://www.instagram.com/_irmeliagst?igsh=Y3ZyZTk5eW1sYTE2">Ira</a></li>
                            </ul>
                        </li>
                        <li><a href="index.html">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    @yield('detail-content')

    <script>
        let navbar = document.querySelector(".navbar");

        // sidebar open close js code
        let navLinks = document.querySelector(".nav-links");
        let menuOpenBtn = document.querySelector(".navbar .bx-menu");
        let menuCloseBtn = document.querySelector(".nav-links .bx-x");
        menuOpenBtn.onclick = function() {
            navLinks.style.left = "0";
        }
        menuCloseBtn.onclick = function() {
            navLinks.style.left = "-100%";
        }

        document.addEventListener("DOMContentLoaded", function() {
            const stars = document.querySelectorAll(".star");
            const starRating = document.getElementById("starRating");
            const rating = document.getElementById("rating");
            let selectedStar = null;

            stars.forEach((star) => {
                star.addEventListener("click", () => {
                    // Set selectedStar to the clicked star's data value
                    selectedStar = star.getAttribute("data-value");

                    // Clear any existing star images
                    const existingStarImg = starRating.querySelector(".star-img");
                    if (existingStarImg) {
                        existingStarImg.remove();
                    }
                    // console.log(selectedStar);
                    rating.value = selectedStar

                    // Create new elements for the corresponding star image
                    const starImg = document.createElement("img");
                    starImg.classList.add("star-img");

                    switch (selectedStar) {
                        case "5":
                            starImg.src = "{{asset('images/five-star.png')}}";
                            starImg.alt = "five-star";
                            break;
                        case "4":
                            starImg.src = "{{asset('images/four-star.png')}}";
                            starImg.alt = "four-star";
                            break;
                        case "3":
                            starImg.src = "{{asset('images/three-star.png')}}";
                            starImg.alt = "three-star";
                            break;
                        case "2":
                            starImg.src = "{{asset('images/two-star.png')}}";
                            starImg.alt = "two-star";
                            break;
                        case "1":
                            starImg.src = "{{asset('images/one-star.png')}}";
                            starImg.alt = "one-star";
                            break;
                        default:
                            break;
                    }

                    // Append the new star image to the starRating element
                    starRating.appendChild(starImg);
                });
            });

            // Function to clear star selection
            function clearSelection() {
                stars.forEach((star) => {
                    const existingStarImg = star.querySelector(".star-img");
                    if (existingStarImg) {
                        existingStarImg.remove();
                    }
                });
                selectedStar = null;
            }

            
        });
    </script>
</body>

</html>
