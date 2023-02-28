<?php 
$array = config('headerLinks');
 
?>
<section class="header">
        <header>
        <div class="box d-flex justify-content-end ">
         <span>dc power visa</span> 
         <div class="nav-bar"><span>ADDITIONAL DLC SITES</span></div>
        </div>

        </header>

        <div class="container">
            <img src="{{ asset("images/dc-logo.png") }}" alt="">
            <div class="contenitore d-flex justify-content-between align-items-center">
                <ul>
                    @foreach ($array as $iteam)
                        <li >
                            <a >{{ $iteam['text'] }}</a>
                        </li>
                    @endforeach

                </ul>
                <input type="search" class="d-flex justify-content-end" placeholder="ricerca">
            </div>


        </div>
</section>