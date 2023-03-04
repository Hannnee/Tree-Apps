<!DOCTYPE html>
<html lang="en" class="js">
@include('layouts.partials.head')
<body class="nk-body bg-white npc-default pg-auth">
    <div class="nk-app-root">
        <div class="nk-main ">
            <div class="nk-wrap nk-wrap-nosidebar">
                <div class="nk-content ">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @include('layouts.partials.script')
</html>
