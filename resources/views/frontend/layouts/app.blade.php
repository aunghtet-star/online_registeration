<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kyaukse TU</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


    {{--flow bite--}}
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />



    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>

    <script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.3.x/dist/index.js"></script>


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
</head>
<body class="dark:bg-slate-800 shadow">

<div class="md:container md:mx-auto bg-gray-100 dark:bg-slate-900 min-h-screen pt-2 px-4">
    <div class="h-40 dark:gd  md:h-28 border-b-2 mb-2 dark:border-gray-100 shadow ">
        <img src="https://www.kyauksetu.edu.mm/wp-content/uploads/2023/10/TUKSElogo-iso-1536x1536.png" alt="Logo" class="w-[50px] md:w-[100px] rounded mx-4 my-2 inline-block">
        <h1 class="text-lg md:text-3xl inline-block dark:text-gray-700 font-semibold text-gray-700">Kyaukse Technological University</h1>

        <div class="inline-block flex align-middle justify-center  md:float-right md:pt-8 md:pr-8">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/profile') }}" class="font-semibold hover:bg-slate-900 hover:scale-110 hover:text-gray-400 dark:hover:text-gray-800 text-gray-600 dark:text-gray-300 border border-gray-900 md:p-4 p-1 rounded dark:hover:bg-green-500 duration-300 dark:border-gray-900  focus:outline focus:outline-2 focus:rounded-sm focus:outline-green-500">My Profile</a>

                @endauth
            @endif
        </div>
    </div>

    @yield('content')

    @yield('contact_us')
    <footer class="text-center">
          <h5 class="font-semibold inset-x-0 bottom-0 text-sm dark:text-gray-300 p-4">copyright &copy; 2024 Kyaukse Technological University</h5>
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>

<!-- Laravel Javascript Validation -->
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>

<!-- jsDelivr :: Sortable :: Latest (https://www.jsdelivr.com/package/npm/sortablejs) -->
<script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>


<script>
    //all ids and some classes are importent for this script

    multiUploadButton = document.getElementById("multi-upload-button");
    multiUploadInput = document.getElementById("multi-upload-input");
    imagesContainer = document.getElementById("images-container");
    multiUploadDisplayText = document.getElementById("multi-upload-text");
    multiUploadDeleteButton = document.getElementById("multi-upload-delete");

    multiUploadButton.onclick = function () {
        multiUploadInput.click(); // this will trigger the click event
    };

    multiUploadInput.addEventListener('change', function (event) {

        if (multiUploadInput.files) {
            let files = multiUploadInput.files;

            // show the text for the upload button text filed
            multiUploadDisplayText.innerHTML = files.length + ' files selected';

            // removes styles from the images wrapper container in case the user readd new images
            imagesContainer.innerHTML = '';
            imagesContainer.classList.remove("w-full", "grid", "grid-cols-1","sm:grid-cols-2","md:grid-cols-3","lg:grid-cols-4", "gap-4");

            // add styles to the images wrapper container
            imagesContainer.classList.add("w-full", "grid", "grid-cols-1","sm:grid-cols-2","md:grid-cols-3","lg:grid-cols-4", "gap-4");

            // the delete button to delete all files
            multiUploadDeleteButton.classList.add("z-100", "p-2", "my-auto");
            multiUploadDeleteButton.classList.remove("hidden");

            Object.keys(files).forEach(function (key) {

                let file = files[key];

                // the FileReader object is needed to display the image
                let reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function () {

                    // for each file we create a div to contain the image
                    let imageDiv = document.createElement('div');
                    imageDiv.classList.add("h-64", "mb-3", "w-full", "p-3", "rounded-lg", "bg-cover", "bg-center");
                    imageDiv.style.backgroundImage = 'url(' + reader.result + ')';
                    imagesContainer.appendChild(imageDiv);
                }
            })
        }
    })

    function removeMultiUpload() {
        imagesContainer.innerHTML = '';
        imagesContainer.classList.remove("w-full", "grid", "grid-cols-1","sm:grid-cols-2","md:grid-cols-3","lg:grid-cols-4", "gap-4");
        multiUploadInput.value = '';
        multiUploadDisplayText.innerHTML = '';
        multiUploadDeleteButton.classList.add("hidden");
        multiUploadDeleteButton.classList.remove("z-100", "p-2", "my-auto");
    }


    //all ids and some classes are importent for this script certification

    multiUploadButtonCertification = document.getElementById("multi-upload-button-certification");
    multiUploadInputCertification = document.getElementById("multi-upload-input-certification");
    imagesContainerCertification = document.getElementById("images-container-certification");
    multiUploadDisplayTextCertification = document.getElementById("multi-upload-text-certification");
    multiUploadDeleteButtonCertification = document.getElementById("multi-upload-delete-certification");

    multiUploadButtonCertification.onclick = function () {
        multiUploadInputCertification.click(); // this will trigger the click event
    };

    multiUploadInputCertification.addEventListener('change', function (event) {

        if (multiUploadInputCertification.files) {
            let files = multiUploadInputCertification.files;

            // show the text for the upload button text filed
            multiUploadDisplayTextCertification.innerHTML = files.length + ' files selected';

            // removes styles from the images wrapper container in case the user readd new images
            imagesContainerCertification.innerHTML = '';
            imagesContainerCertification.classList.remove("w-full", "grid", "grid-cols-1","sm:grid-cols-2","md:grid-cols-3","lg:grid-cols-4", "gap-4");

            // add styles to the images wrapper container
            imagesContainerCertification.classList.add("w-full", "grid", "grid-cols-1","sm:grid-cols-2","md:grid-cols-3","lg:grid-cols-4", "gap-4");

            // the delete button to delete all files
            multiUploadDeleteButtonCertification.classList.add("z-100", "p-2", "my-auto");
            multiUploadDeleteButtonCertification.classList.remove("hidden");

            Object.keys(files).forEach(function (key) {

                let file = files[key];

                // the FileReader object is needed to display the image
                let reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function () {

                    // for each file we create a div to contain the image
                    let imageDivCertification = document.createElement('div');
                    imageDivCertification.classList.add("h-64", "mb-3", "w-full", "p-3", "rounded-lg", "bg-cover", "bg-center");
                    imageDivCertification.style.backgroundImage = 'url(' + reader.result + ')';
                    imagesContainerCertification.appendChild(imageDivCertification);
                }
            })
        }
    })

    function removeMultiUploadCertification() {
        imagesContainerCertification.innerHTML = '';
        imagesContainerCertification.classList.remove("w-full", "grid", "grid-cols-1","sm:grid-cols-2","md:grid-cols-3","lg:grid-cols-4", "gap-4");
        multiUploadInputCertification.value = '';
        multiUploadDisplayTextCertification.innerHTML = '';
        multiUploadDeleteButtonCertification.classList.add("hidden");
        multiUploadDeleteButtonCertification.classList.remove("z-100", "p-2", "my-auto");
    }


    //all ids and some classes are important for this script letter_of_recommendation

    multiUploadButtonLetterOfRecommendation = document.getElementById("multi-upload-button-letter_of_recommendation");
    multiUploadInputLetterOfRecommendation = document.getElementById("multi-upload-input-letter_of_recommendation");
    imagesContainerLetterOfRecommendation = document.getElementById("images-container-letter_of_recommendation");
    multiUploadDisplayTextLetterOfRecommendation = document.getElementById("multi-upload-text-letter_of_recommendation");
    multiUploadDeleteButtonLetterOfRecommendation = document.getElementById("multi-upload-delete-letter_of_recommendation");

    multiUploadButtonLetterOfRecommendation.onclick = function () {
        multiUploadInputLetterOfRecommendation.click(); // this will trigger the click event
    };

    multiUploadInputLetterOfRecommendation.addEventListener('change', function (event) {

        if (multiUploadInputLetterOfRecommendation.files) {
            let files = multiUploadInputLetterOfRecommendation.files;

            // show the text for the upload button text filed
            multiUploadDisplayTextLetterOfRecommendation.innerHTML = files.length + ' files selected';

            // removes styles from the images wrapper container in case the user readd new images
            imagesContainerLetterOfRecommendation.innerHTML = '';
            imagesContainerLetterOfRecommendation.classList.remove("w-full", "grid", "grid-cols-1","sm:grid-cols-2","md:grid-cols-3","lg:grid-cols-4", "gap-4");

            // add styles to the images wrapper container
            imagesContainerLetterOfRecommendation.classList.add("w-full", "grid", "grid-cols-1","sm:grid-cols-2","md:grid-cols-3","lg:grid-cols-4", "gap-4");

            // the delete button to delete all files
            multiUploadDeleteButtonLetterOfRecommendation.classList.add("z-100", "p-2", "my-auto");
            multiUploadDeleteButtonLetterOfRecommendation.classList.remove("hidden");

            Object.keys(files).forEach(function (key) {

                let file = files[key];

                // the FileReader object is needed to display the image
                let reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function () {

                    // for each file we create a div to contain the image
                    let imageDivLetterOfRecommendation = document.createElement('div');
                    imageDivLetterOfRecommendation.classList.add("h-64", "mb-3", "w-full", "p-3", "rounded-lg", "bg-cover", "bg-center");
                    imageDivLetterOfRecommendation.style.backgroundImage = 'url(' + reader.result + ')';
                    imagesContainerLetterOfRecommendation.appendChild(imageDivLetterOfRecommendation);
                }
            })
        }
    })

    function removeMultiUploadLetterOfRecommendation() {
        imagesContainerLetterOfRecommendation.innerHTML = '';
        imagesContainerLetterOfRecommendation.classList.remove("w-full", "grid", "grid-cols-1","sm:grid-cols-2","md:grid-cols-3","lg:grid-cols-4", "gap-4");
        multiUploadInputLetterOfRecommendation.value = '';
        multiUploadDisplayTextLetterOfRecommendation.innerHTML = '';
        multiUploadDeleteButtonLetterOfRecommendation.classList.add("hidden");
        multiUploadDeleteButtonLetterOfRecommendation.classList.remove("z-100", "p-2", "my-auto");
    }


</script>

@yield('script')

</body>
</html>
