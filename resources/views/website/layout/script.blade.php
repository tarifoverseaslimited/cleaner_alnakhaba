<!-- jequery plugins -->
<script src="{{asset('/')}}assets/js/jquery.js"></script>
<script src="{{asset('/')}}assets/js/popper.min.js"></script>
<script src="{{asset('/')}}assets/js/bootstrap.min.js"></script>
<script src="{{asset('/')}}assets/js/owl.js"></script>
<script src="{{asset('/')}}assets/js/wow.js"></script>
<script src="{{asset('/')}}assets/js/validation.js"></script>
<script src="{{asset('/')}}assets/js/jquery.fancybox.js"></script>
<script src="{{asset('/')}}assets/js/appear.js"></script>
<script src="{{asset('/')}}assets/js/scrollbar.js"></script>
<script src="{{asset('/')}}assets/js/isotope.js"></script>
<script src="{{asset('/')}}assets/js/nav-tool.js"></script>
<script src="{{asset('/')}}assets/js/timePicker.js"></script>
<script src="{{asset('/')}}assets/js/jquery-ui.js"></script>
<script src="{{asset('/')}}assets/js/nice_select.js"></script>
<script src="{{asset('/')}}assets/js/jquery.nice-select.min.js"></script>

<!-- main-js -->
<script src="{{asset('/')}}assets/js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    // Check if there is a success message
    @if(session('success'))
    toastr.success("{{ session('success') }}", "Success");
    @endif

    // Check if there is an error message
    @if(session('error'))
    toastr.error("{{ session('error') }}", "Error");
    @endif
</script>
