
        </div>
        <!-- END layout-wrapper -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © Skote.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-right d-none d-sm-block">
                            Design & Develop by Themesbrand
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="{{asset('admin/')}}/assets/libs/jquery/jquery.min.js"></script>
<script src="{{asset('admin/')}}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
{{-- <script src="{{asset('admin/')}}/assets/libs/metismenu/metisMenu.min.js"></script> --}}
 <script src="{{asset('admin/')}}/assets/libs/simplebar/simplebar.min.js"></script>

 <script>
  let arrows = document.querySelectorAll('.arrow');
  arrows.forEach(arrow=> {
    arrow.addEventListener('click', function(){
    let submenu = arrow.nextElementSibling;
  submenu.classList.toggle('d-none')

})
  });

 </script>
{{-- <script src="{{asset('admin/')}}/assets/libs/node-waves/waves.min.js"></script> --}}

<!-- apexcharts -->
{{-- <script src="{{asset('admin/')}}/assets/libs/apexcharts/apexcharts.min.js"></script>

<script src="{{asset('admin/')}}/assets/js/pages/dashboard.init.js"></script> --}}

<!-- App js -->
{{-- <script src="{{asset('admin/')}}/assets/js/app.js"></script> --}}
</body>


</html>
