<div class="container-fluid py-4">
    <div class="row justify-content-center mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header" style="background-color: #ffffff; border : none;">
                    <h3 class="text-center">Tanki 1</h3>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <div class="image-container">
                            <progress id="tank1" max="{{ $tank1_max }}" value="{{ $data[0]->volume }}"></progress>
                        </div>
                    </div>
                    <div class="card" style="margin-top: 10px;">
                        <div class="card-header" style="background-color: #ffffff; border : none;">
                            <h3 class="text-center">Level <span id="tank1-level">{{ $data[0]->level }}</span> <small>mm</small></h3>
                            <h3 class="text-center">Volume <span id="tank1-volume">{{ $data[0]->volume }}</span> <small>L</small></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header" style="background-color: #ffffff; border : none;">
                    <h3 class="text-center">Tanki 2</h3>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <div class="image-container">
                            <progress id="tank2" max="{{ $tank2_max }}" value="{{ $data2[0]->volume }}"></progress>
                        </div>
                    </div>
                    <div class="card" style="margin-top: 10px;">
                        <div class="card-header" style="background-color: #ffffff; border : none;">
                            <h3 class="text-center">Level <span id="tank1-level">{{ $data2[0]->level }}</span> <small>mm</small></h3>
                            <h3 class="text-center">Volume <span id="tank1-volume">{{ $data2[0]->volume }}</span> <small>L</small></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer pt-3">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.teknoklop.com" class="font-weight-bold" target="_blank">Tekno Klop Indonesia</a>
                for a better web.
              </div>
            </div>
          </div>
        </div>
      </footer>
</div>