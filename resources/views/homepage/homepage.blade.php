<!DOCTYPE html>
<html lang="en">

<!--script initialization-->
@include('blades.shared_initialization')
@include('homepage.local_initialization')

<body>

    <div class="hp_container_size">
        <!--top bar-->
    @include('blades.light_header')

    <!--search bar-->
        <form class="hp_search" method="GET" action="search" enctype="multipart/form-data" onsubmit="return q.value!={{constant::$emptyString}}">
            <img src="{{ asset(constant::$logo) }}" class="hp_search__logo disable-highlight" alt="" />
            <input autocomplete="off" type="text" class="form-control hp_search__search-box" name="q">
            <div class="hp_search__button-container disable-highlight">
                <input type="submit" class="hp_search__search-button hp_search__search-button--left-spacing" id="searchbutton" value="Boggle Search">
                <input type="submit" class="hp_search__search-button hp_search__search-button--right-spacing" id="luckybutton" value="I'm Feeling Lucky">
            </div>
            <input autocomplete="off" type="hidden" name="p_num" value="1">
            <input type="hidden" name="s_type" value="all">
            <p class="hp_search__language-text disable-highlight">Boogle offered in: <span class="hp_search__language-name ">English</span></p>
        </form>
        <!--footer-->
    </div>
    @include('blades.footer')

</body>


</html>
