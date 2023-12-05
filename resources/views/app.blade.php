<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pelindo | Monitor Tanki</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/51dbabe9f7.js" crossorigin="anonymous"></script>
    {{-- cdn bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    {{-- style --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    {{-- icon --}}
    <link rel="icon" href="{{ asset('assets/img/logo.png') }}">
    <!-- alpinejs -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

      <!-- Nucleo Icons -->
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('assets/css/soft-ui-dashboard.css?v=1.0.3') }}" rel="stylesheet" />
    <script src="chartjs/Chart.bundle.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>
    <div x-data="tabMemory()" x-init="$watch('tab', value => localStorage.setItem('tab', value))">
        <nav class="d-flex">
            <div class="logo-div">
                <img src="{{ asset('assets/img/logo.png') }}" alt="Pelindo" class="logo">
            </div>
            <div class="nav-div flex-grow-1 d-flex justify-content-between">
                <h1 class="title">Monitor Pengukuran Tanki</h1>
                <div class="d-flex justify-content-center align-items-center">
                    <button x-show="tab !== 'home'" @click.prevent="changeTab('home')" class="btn btn-primary align-self-center">Home</button>
                    <button x-show="tab !== 'table'" @click.prevent="changeTab('table')" class="btn btn-primary align-self-center">Table & graphic</button>
                </div>
            </div>
        </nav>
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg " x-show="tab === 'home'" x-transition>
            @include('partials.home')
        </main>
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg " x-show="tab === 'table'" x-transition>
            @include('partials.table')
        </main>
        
    </div>

    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/chartjs.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/dragula/dragula.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jkanban/jkanban.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/datatables.js') }}"></script>

    @stack('js')
    <script>
        function tabMemory() {
            return {
                tab: localStorage.getItem('tab') || 'home',
                changeTab(newTab) {
                    this.tab = newTab;
                    localStorage.setItem('tab', newTab);
                }
            }
        }
    </script>
</body>
</html>