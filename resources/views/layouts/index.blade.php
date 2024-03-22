<!DOCTYPE html>
<html {{ str_replace('_', '-', app()->getLocale()) }}>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet" />
    <style>
      @media (max-width: 768px) {
        .review {
          display: none;
        }
      }
    </style>
  </head>
<body class="font-[DM Sans] text-[#486284] lg:px-[112px] px-[20px] mb-[50px]">
    <div>
        <nav class="flex justify-between mt-[30px] mb-[18px]">
            <div class="flex">
              <img src="./images/logo.png" alt="Wellup" class="size-10 my-auto" />
              <a href="" class="font-bold text-[20px] my-auto ml-[9px]">Wellup</a>
            </div>
            <div class="flex">
              <ul class="gap-[48px] text-[16px] my-auto hidden md:flex">
                <li><a href="">Home</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">Community</a></li>
              </ul>
              <button href="" class="bg-[#486284] ml-[48px] px-[32px] py-[12px] rounded-full text-[16px] text-[#fff]">Login</button>
            </div>
          </nav>
        <div>
            @yield('content')
        </div>
        <footer>
            <ul class="flex space-x-4 lg:text-[16px] text-[8.5px]">
                <li>© 2024</li>
                <li>Kelompok 5 Web Development, STACK 2024.</li>
                <li>Twitter</li>
                <li>LinkedIn</li>
                <li>Email</li>
            </ul>
        </footer>
    </div>
</body>
</html>